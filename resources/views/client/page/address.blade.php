@extends('client.master')
@section('sidebar')
@include('client.layout.sidebar')
@endsection
@section('banner')
@include('client.layout.banner')
@endsection
@section('content')
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div id="layout-page" class="clearfix">
        <span class="header-contact header-page clearfix">
            <h1>Địa chỉ</h1>
        </span>
        <div class="content-page">
            <div class="col-md-5">
                <div id="address_tables">
                    
                    
                </div>
            </div>
            <script>
            	function toggleForm(){
            		var x = document.getElementById('add_address');
            		if(x.style.display === 'none'){
            			x.style.display = 'block';
            		}else{
            			x.style.display = 'none';
            		}
            	}
            </script>
            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 pt20">
                <a href="#" onclick="toggleForm();" class="add-new-address">Nhập địa chỉ mới</a>
                <div id="add_address" class="customer_address edit_address" style="display:none">
                    <form accept-charset="UTF-8" action="/account/addresses" id="address_form_new" method="post">
<input name="form_type" type="hidden" value="customer_address">
<input name="utf8" type="hidden" value="✓">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" id="address_last_name_new" class="form-control textbox" name="full_name" size="40" value="" placeholder="Họ và tên">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input type="text" id="address_address1_new" class="form-control textbox" name="address[address1]" size="40" value="" placeholder="Địa chỉ Email">
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                        <select class="form-control textbox" id="address_country_new" name="address[country]" data-default=""><option value""="" data-provinces="[]">- Please Select --</option>

</select>
                    </div>
                    <div class="input-group" id="address_province_container_new" style="display:none">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                        <select id="address_province_new" class="form-control textbox" name="address[province]" data-default=""></select>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                        <input type="text" id="address_phone_new" class="form-control textbox" name="address[phone]" size="40" value="" placeholder="Số điện thoại">
                    </div>
                    <div class="input-group">
                        <input type="checkbox" id="address_default_address_new" name="address[default]" value="1"> Đặt làm địa chỉ mặc định.
                    </div>
                    <div class="action_bottom">
                        <input class="btn btn-primary" type="submit" value="Thêm mới">
                        <span class="">hoặc <a href="#" onclick="Haravan.CustomerAddress.toggleNewForm(); return false;">Hủy</a></span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection