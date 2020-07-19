@extends('frontend.master')
@section('title','Trang thanh toán đơn hàng' )
@section('main')

<style type="text/css">
	.checkout-item1{
		display: inline-block !important;
    	margin-right: 120px;
    	color: #777777;
	}
	.checkout-item2{
		display: inline-block !important;
		color: #777777;
	}
	.checkout-item2 b{
		
		color: black;
	}
	.checkout-item3{
		white-space: nowrap;
		width: 100px;
		text-overflow: ellipsis;    
		overflow: hidden; 
		color: #777777;
		display: inline-block !important;
		margin-right: -3px;
	}
</style>
@if(!Auth::check())
	<h2>Nếu bạn đã có tài khoản xin mời <a href="{{asset('login1')}}">Bấm vào đây</a> để đăng nhập hoặc điền vào thông tin bên dưới để mua hàng.Xin cảm ơn</h2>
@endif
<div class="row">
		
	<div class="col-md-8"></div>
	<div class="col-md-4" >

<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Đơn hàng của bạn</h4>
		    </div>
		     <div class="" style="margin: 29px;">
				<ul class="nav nav-checkout-progress list-unstyled">
					<li class="checkout-item1"><h5 class="unicase-checkout-title"><b>SẢN PHẨM</b></h5></li>

					<li class="checkout-item2"><h5 class="unicase-checkout-title"><b>THÀNH TIỀN</b></h5></li>
				</ul>	
				<hr>
				<ul class="nav nav-checkout-progress list-unstyled">
					@foreach($items as $item)
					<li><p class="checkout-item3">{{$item->name}}</p>
						<p class="checkout-item3">x{{$item->qty}}</p>
						<p class="checkout-item3">{{number_format($item->price,0,',','.')}} .₫</p>
					</li>
					@endforeach
					<hr>
					
					<li><p class="checkout-item3">Tổng tiền :</p><p class="checkout-item3"></p><p class="checkout-item3">{{$total}} .₫</p></li>
					
				</ul>		
			</div>
		</div>
	</div>
</div>

<form action="{{url('cart/show')}}" method="post">
	<div id="xac-nhan">
		<h3>Xác nhận mua hàng</h3>
			<div class="form-group">
				<label for="email">Email address:</label>
				<input required type="email" class="form-control" id="email" name="email" value="{{$email}}">
			</div>
			<div class="form-group">
				<label for="name">Họ và tên:</label>
				<input required type="text" class="form-control" id="name" name="name"  value="{{$name}}">
			</div>
			<div class="form-group">
				<label for="phone">Số điện thoại:</label>
				<input required type="number" class="form-control" id="phone" name="phone" value="{{$phone}}">
			</div>
			<div class="form-group">
				<label for="add">Địa chỉ:</label>
				<input required type="text" class="form-control" id="add" name="add" value="{{$address}}">
			</div>
			<div class="form-group text-right">
				<button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
			
			</div>
			
	</div>
			{{ csrf_field() }}
</form>
@stop	