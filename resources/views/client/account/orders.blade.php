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
        <div class="header-page">
            <h1>Đơn hàng: #{{ $order->id }}, đặt lúc <span class="order_date">— {{ $order->create_at }}</span></h1>
            
            <div id="order_cancelled" class="flash notice col-sm-12">
                <h5 id="order_cancelled_title">{{ $order->status_order }} <span>{{ $order->updated_at }}</span></h5>
                <span>{{ $order->reason_cancle }}</span>
            </div>
            
        </div>
        <div class="col-xs-12">
            <a href="{{ route('account') }}" id="return_to_store">Quay lại trang tài khoản </a>
        </div>
        <div class="col-md-12 content-page">
            <div id="order_payment" class="col-md-6 col-sm-6">
                <div class="row">
                    <h3 class="order_section_title">Địa chỉ giao hàng</h3>
                    <p><span>Tình trạng thanh toán:</span> <span class="status">{{ $order->status_order }}</span></p>
                    <div class="address">
                        <p>{{ $order->getCustomer()->full_name }}</p>
                        <p></p>
                        <p>{{ $order->getCustomer()->address }}</p>
                        <p> {{ $order->getCustomer()->getDistrict() }}</p>
                        <p> {{ $order->getCustomer()->getProvince() }}</p>
                        <p>{{ $order->getCustomer()->phone }}</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-12 content-page">
            <table id="order_details">
                <tbody><tr height="40px">
                    <th class="">Sản phẩm</th>
                    <th class="text-center">Mã sản phẩm</th>
                    <th class="text-center">Giá</th>
                    <th class="text-center">Số lượng</th>
                    <th class="total text-right">Tổng cộng</th>
                </tr>
                
                @foreach($order->detail() as $detail)

                <tr height="40px" id="0" class="odd">
                    <td class="" style="max-width:300px">
                        <a href="{{ route('products',['name' => $detail->getProduct()->name_ascii]) }}" title="">{{ $detail->getProduct()->name }}</a> <br>
                         
                    </td>
                    <td class="sku text-center"></td>
                    <td class="money text-center">{{ number_format($detail->price) }}₫</td>
                    <td class="quantity center text-center">{{ $detail->quantity }}</td>
                    <td class="total money text-right">{{ number_format($detail->price * $detail->quantity) }}₫</td>
                </tr>
                @endforeach

                <tr height="40px" class="order_summary order_total">
                    <td class="text-right" colspan="4"><b>Tổng tiền</b></td>
                    <td class="total money text-right"><b>{{ number_format($order->total_price) }}₫ </b></td>
                </tr>
            </tbody></table>
        </div>
    </div>
</div>
@endsection