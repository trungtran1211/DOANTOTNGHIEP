@extends('frontend.master')
@section('title','Trang Xem Chi Tiết' )
@section('main')

<link rel="stylesheet" href="css/category.css">
<section id="body" style="margin-top: -13px;">
<div class="terms-conditions-page">
<div class="x-page inner-bottom-sm">

	<div class="row">
		<div class="col-md-12 x-text text-center">
			<h3>Cảm ơn bạn. Đơn đặt hàng của bản đã được nhận.</h3>
			<div class="row" style="background: cornsilk;">
				<div class="col-lg-6" style="text-align: left;">
					<h2 class="heading-title">Thông tin đơn hàng</h2>
					<h5 class="name">Mã đơn hàng : {{$bills->bil_id}}</h5>
					<h5 class="name">Ngày đặt : {{$bills->created_at}}</h5>
					<h5 class="name">Tổng tiền : {{$bills->bil_total}}</h5>
					<h5 class="name">Phương thức thanh toán : {{$bills->bil_payments}}</h5>
				</div>
				
				<div class="col-lg-6" style="text-align: left;">
					
					<h2 class="heading-title">Thông tin người nhận</h2>
					<h5 class="name">Tên người nhận : {{$bills->bil_name}} </h5>
					<h5 class="name">Địa chỉ :  {{$bills->bil_address}}</h5>
					<h5 class="name">Số điện thoại : {{$bills->bil_phone}}</h5>
					<h5 class="name">Tình trạng đơn hàng : </h5>

				</div>
				
			</div>
		</div>
	</div><!-- /.row -->
	<div class="row">
		<h2 class="heading-title">Chi tiết hóa đơn</h2>
		<table class="table">
						<thead>
							<tr>
								<th scope="col">Sản phẩm</th>
								<th scope="col">Giá tiền</th>
								<th scope="col">Số lượng</th>
								<th scope="col">Thành tiền</th>
							</tr>
						</thead>
						<tbody>
							@foreach($cart as $item)
							<tr>
								
								<td>
									{{$item->name}}
								</td>
								<td>
									{{number_format($item->price,0,',','.')}}₫
								</td>
								<td>
									{{$item->qty}}
								</td>
								<td>
									{{number_format($item->price*$item->qty,0,',','.')}} ₫
								</td>
							</tr>
							@endforeach
														<tr>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <h4>Tổng tiền :{{$total}} ₫ </h4>
                                </td>
                                <td>
                                   
                                </td>
                            </tr>
							<tr>
								<td>
									<h4></h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<a href="{{asset('/')}}" class="btn-upper btn btn-primary checkout-page-button" style="margin-left: 240px">Quay Lại</a>
								</td>
							</tr>
						</tbody>
						
					</table>
	</div>
</div>
</div>
</section>
@stop