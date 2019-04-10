<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use App\Province;
use App\District;
use App\Customer;
use App\Order;
use App\OrderDetail;
use Auth;
use Mail;

class CartController extends Controller
{
    public function getCountItem(){
        if(count(Cart::content()) > 0)
            return true;
        else
            return false;
    }
    public function getCart(){
    	return view('client.page.cart');
    }
    public function postAddCart(Request $req){
        //Get Product ID
        $proID = $req->productID;
        $product = Product::findorFail($proID);

    	$add = Cart::add([
			'id' => $proID,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => $req->quantity,
		]);

    	return redirect()->route('cart');
    }
    public function postCart(Request $req){
        $btn = $req->btn;
        if($btn == "update"){
            foreach($req->qty as $qty)
                foreach($qty as $key => $v)
                    Cart::update($key, $v);
            return back();
        }
        else{
            session(['note' => $req->note]);
            return redirect()->route('checkout');
        }
    }
    public function getRemoveItem($id){
        Cart::remove($id);
    	return back();
    }
    public function getCheckout(){
        //Get ID user logged
        if(Auth::check()){
            $userId = Auth::user()->id;
            $customer = Customer::getByUserId($userId);
        }
        $province = Province::all()->sortby('name');

        return view('client.checkout.step1',compact('province','customer'));
    }
    public function postCheckout(Request $req){
        $this->validate($req, [
            'full_name'=>'required|max:50',
            'phone'=>'required|numeric',
            'address'=>'required|max:150'
        ],[
            'full_name.required'=>'Bạn chưa nhập Họ tên',
            'full_name.max'=>'Họ tên tối đa 50 ký tự',
            'phone.required'=>'Bạn chưa nhập số điện thoại',
            'phone.numeric'=>'Số điện thoại phải là số',
            'address.required'=>'Bạn chưa nhập Địa chỉ',
            'address.max'=>'Địa chỉ tối đa 150 ký tự',

        ]);
        $infoCustomer = array(
            'full_name' => $req->full_name,
            'email'     => $req->email,
            'phone'     => $req->phone,
            'address'   => $req->address,
            'province'  => $req->province,
            'district'  => $req->district
        );
        //Save to session
        session(['infoCustomer' => $infoCustomer]);
        return redirect()->route('checkout2');
    }
    public function getCheckout2(){
        return view('client.checkout.step2');
    }
    public function postCheckout2(Request $req){ 
        //Check the cart with the product
        //If cart is empty then go to Home
        if(!$this->getCountItem())
            return redirect()->route('trang-chu');
        //Get content Cart
        $cart = Cart::content();
        //Get info customer
        $infoCustomer = session('infoCustomer');
        //Check infomation
        //If logged userId = userId_Logged
        //Else Anonymous then userId = 0
        if(Auth::check())
            $userId = Auth::user()->id;
        else
            $userId = 0;
        $customerUnique = Customer::where([
            ['full_name',$infoCustomer['full_name']],
            ['address',$infoCustomer['address']],
            ['email',$infoCustomer['email']],
            ['phone',$infoCustomer['phone']],
            ['provinces_id',$infoCustomer['province']],
            ['districts_id',$infoCustomer['district']],
            ['users_id',$userId]
        ])->get();
        //Check unique
        if(count($customerUnique) != 0)
        {
            $customer = $customerUnique->first();
        }else{
            //New customer
            $customer = new Customer;
            $customer->full_name = $infoCustomer['full_name'];
            $customer->email = $infoCustomer['email'];
            $customer->phone = $infoCustomer['phone'];
            $customer->address = $infoCustomer['address'];
            $customer->provinces_id = $infoCustomer['province'];
            $customer->districts_id = $infoCustomer['district'];
            if(Auth::check())
                $customer->users_id = Auth::user()->id;
            $customer->save();
        }
        //New Order
        $order = new Order;
        $order->code = md5(time());
        $order->total_price = str_replace(',','',Cart::subtotal());
        $order->note = session('note');
        $order->payment = $req->payment_method;
        $order->customers_id = $customer->id;
        $order->save();

        //New Detail Order
        foreach(Cart::content() as $carts)
        {
            //Reduce the quantity in stock
            $qtyProduct = Product::find($carts->id);
            $qtyProduct->inventory = $qtyProduct->inventory - $carts->qty;
            $qtyProduct->save();
            //End

            $orderDetail = new OrderDetail;
            $orderDetail->orders_id = $order->id;
            $orderDetail->products_id = $carts->id;
            $orderDetail->price = $carts->price;
            $orderDetail->quantity = $carts->qty;
            $orderDetail->save();
        }
        //Delete Cart
        Cart::destroy();
        //Forget session
        session()->forget(['infoCustomer', 'note']);
        return redirect()->route('checkout.step3',['code' => $order->code]);
    }   
    public function getThankYou($code){
        $order = Order::whereCode($code)->firstorFail();

        //Send Mail Confirm
        if($order->send_mail == 0){
            Mail::send('client.mail.confirm_order', ['order' => $order], function($m) use ($order) {
                $m->from('auto.txgroup@gmail.com', 'TXGroup Support');
                $m->to('nvxuyen.102@gmail.com', 'Test')->subject('[TXGroup.us] Xác nhận đơn hàng!');
            });
        }

        $order->send_mail = 1;
        $order->save();
        return view('client.checkout.thankyou', compact('order'));
    }
}
