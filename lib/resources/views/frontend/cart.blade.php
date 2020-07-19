@extends('frontend.master')
@section('title','Trang Giỏ Hàng' )
@section('main')
	<link rel="stylesheet" href="css/cart.css">
	<script type="text/javascript">
		function updateCart(qty,rowId){
			$.get(
				'{{asset('cart/update')}}',
				{qty:qty,rowId:rowId},
				function(){
					location.reload();
				}
				);
		}
	</script>
	<div id="wrap-inner">
		<div id="list-cart">
			<h3>Giỏ hàng</h3>
			@if(Cart::count()>=1)
			<form >
				<table class="table table-bordered .table-responsive text-center">
					<tr class="active">
						<td width="11.111%">Ảnh mô tả</td>
						<td width="22.222%">Tên sản phẩm</td>
						<td width="10%">Số lượng</td>
						<!-- <td width="11.112%">Size</td> -->
						<td width="16.6665%">Đơn giá</td>
						<td width="16.6665%">Thành tiền</td>
						<td width="11.112%">Xóa</td>
					</tr>
					@foreach ($items as $item)
					<tr>
						<td><img class="img-responsive" src="{{asset('lib/storage/app/avatar/'.$item->options->img)}}"></td>
						<td>{{$item->name}}</td>
						<td>
							<div class="form-group">
								<input class="form-control" type="number" value="{{$item->qty}}" onchange="updateCart(this.value,'{{$item->rowId}}')">
							</div>
						</td>
						  <!-- <td >
						    							<div class="form-group">
						    								<input class="form-control" type="number" min="36" max="43" value="37" name="size{{ $item->id }}" id="size{{ $item->id }}">
						    								
						    							</div>
						    						</td>  -->
						<td><span class="price">{{number_format($item->price,0,',','.')}}đ</span></td>
						<td><span class="price">{{number_format($item->price*$item->qty,0,',','.')}}đ</span></td>
						<td><a href="{{asset('cart/delete/'.$item->rowId)}}">Xóa</a></td>
					</tr>
						<input type="hidden" name="id" value="{{$item->id}}">
						<!-- <input type="hidden" name="rowId" value="{{$item->rowId}}" id="rowId{{$item->id}}"> -->
					@endforeach
				</table>
				<div class="row" id="total-price">
					<div class="col-md-6 col-sm-12 col-xs-12">										
							Tổng thanh toán: <span class="total-price">{{$total}} đ</span>
																									
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<a href="#" class="my-btn btn">Chọn tiếp sản phẩm</a>
						<a href="{{asset('cart/delete/all')}}" class="my-btn btn">Xóa giỏ hàng</a>
						
						
							<a href="{{asset('cart/checkout')}}" class="my-btn btn">Tiến hành thanh toán</a>
						
							
						
					</div>
				</div>         	                	
		</div>
	</form>
		<!-- <form method="post">
		<div id="xac-nhan">
			<h3>Xác nhận mua hàng</h3>
			
				<div class="form-group">
					<label for="email">Email address:</label>
					<input required type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="name">Họ và tên:</label>
					<input required type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="phone">Số điện thoại:</label>
					<input required type="number" class="form-control" id="phone" name="phone">
				</div>
				<div class="form-group">
					<label for="add">Địa chỉ:</label>
					<input required type="text" class="form-control" id="add" name="add">
				</div>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
				
				</div>
				{{csrf_field()}}
			</form>-->
		</div> 
		@else
			<h2>Giỏ hàng rỗng</h2>
		@endif
	</div>
</div>
</div>
</div>
</section>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	/*$(document).ready(function(){
		@foreach ($items as $item)
			$('#size{{$item->id}}').on('keyup change', function(){
				var size = $('#size{{$item->id}}').val();
				var rowId = $('#rowId{{$item->id}}').val();
				$.ajax({
					url: "{{url('cart/update-size')}}",
					data: {size: size, rowId: rowId},
					type: 'POST',
					headers: { 
				    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
				    },
					success:function(response){
						console.log(response);
					}
				});
			});
		@endforeach
	});
*/

	$(document).ready(function(){
        @foreach($items as $item)
            $("#size{{$item->id}}").on('change keyup', function(){
                var size = $('#size{{$item->id}}').val();
				var rowId = $('#rowId{{$item->id}}').val();
                $.ajax({
                    url:"{{url('cart/update-size')}}",
                    data:{size: size, rowId: rowId},
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(response){
                        console.log(response);

                    } 
                });
            });
        @endforeach
    });
</script> -->
@stop 