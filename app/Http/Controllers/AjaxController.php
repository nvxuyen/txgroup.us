<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\District;
use App\Customer;

class AjaxController extends Controller
{
    public function getDistrict($id, $id_district = ""){
    	if($id == 0){
    		echo "<option value='null'>Chọn quận / huyện</option>";
    	}else{
    	$district = Province::find($id)->getDistricts()->orderBy('name')->get();
    		echo "<option value='null'>Chọn quận / huyện</option>";
    	foreach($district as $d){
            if($id_district != "" && $d->id == $id_district)
                echo "<option value='".$d->id."' selected>".$d->name."</option>";
            else
                echo "<option value='".$d->id."'>".$d->name."</option>";
    		
    	}
    }
    }

    public function getInfoCustomer($id){
        return $customer = Customer::select('full_name','address','email','phone','provinces_id','districts_id')->find($id);
    }
}
