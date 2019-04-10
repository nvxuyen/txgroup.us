<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class AdmOrderController extends Controller
{
    public function getListOrder(){
    	$order_act = 1;
    	$order = Order::all()->sortByDesc('created_at');
    	return view('admin.order.list', compact('order', 'order_act'));
    }
    public function postUpdateOrder(Request $r){
    	$id = $r->id;
    	$status = $r->status;
    	$order = Order::findorFail($id);
    	$order->status = $status;
    	$order->save();
    	return 'Thay đổi trạng thái đơn hàng #'.$id.' sang '.$order->status_order;
    }
}
