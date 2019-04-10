<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Order extends Model
{
    protected $table = "orders";
    public function detail(){
    	return $this->hasMany('App\OrderDetail', 'orders_id', 'id')->get();
    }
    public function getCustomer(){
    	return $this->belongsTo('App\Customer', 'customers_id', 'id')->firstorFail();
    }
    public static function getOrderByUser($userId){
        return DB::table('orders')->select('orders.*')->join('customers', 'orders.customers_id','customers.id')
                            ->join('users', 'customers.users_id', 'users.id')
                            ->whereUsersId($userId)
                            ->orderBy('orders.created_at', 'DESC')
                            ->get();
    }
    public function getStatusOrderAttribute(){
        switch($this->status){
            case 0: 
                $label = "Chờ xử lý";
                break;
            case 1: 
                $label = "Đang xử lý";
                break;
            case 2: 
                $label = "Đang giao hàng";
                break;
            case 3:
                $label = "Đã giao hàng";
                break;
            case 4:
                $label = "Đã hủy";
                break;
        }
        return $label;
    }
    public function getCreateAtAttribute(){
        return date('d/m/Y H:i:s', strtotime($this->created_at));
    }
    public function getUpdateAtAttribute(){
        return date('d/m/Y H:i:s', strtotime($this->update_at));
    }
    public function getTotalPricesAttribute(){
        return number_format($this->total_price);
    }
}
