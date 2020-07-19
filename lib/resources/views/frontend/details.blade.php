@extends('frontend.master')
@section('title','Trang Xem Chi Tiết' )
@section('main')
<div class="row">
@include('frontend.menuleft')

<div id="main" class="col-md-9">
	<link rel="stylesheet" href="css/details.css">
	<section id="body" style="margin-top: -13px;">
		<style type="text/css">
			.thumbnail {
			    
			    overflow: hidden;
			    border: 2px solid #e5e5e5;
			    width: 240px;
			}

			.thumbnail img {
			    
			    transition-duration: 0.3s;
			}

			.thumbnail img:hover {
			    transform: scale(1.5);
			    box-shadow:0px 0px 30px gray;
			    opacity: 1;
			}
		</style>

					<div id="wrap-inner">
						<div id="product-info" style="margin-top: 37px;">
							<div class="clearfix"></div>
							<h3>{{$item->prod_name}}</h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<div class="thumbnail">
										<img src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}">
									</div>
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price">{{number_format($item->prod_price,0,',','.')}}</span></p>
									<p>Bảo hành: {{$item->prod_warranty}}</p> 
									<p >Khuyến mại: {{$item->prod_promotion}}</p>
									<p>Còn hàng: 
										@if ($item->soluongcon > 0)
											Còn Hàng
										@else
											Hết Hàng
										@endif

									</p>
									<label>Chọn Size:</label>
									<input type="number" min="36" max="44" name="size" >
									<!-- href=" {{asset('cart/add/'.$item->prod_id)}}" -->
									<p class="add-cart text-center">
										@if ($item->soluongcon > 0)
										<a href="#" id="addCart">Đặt hàng</a>
										@else
											Hết Hàng
										@endif

									</p>
								</div>
							</div>							
						</div>
						<div id="product-detail">
							<h3>Chi tiết sản phẩm</h3>
							<p class="text-justify">{!!$item->prod_description!!}</p>
						</div>
						<div id="comment">
							<h3>Bình luận</h3>
							<div class="col-md-9 comment">
								<form method="post">
									<div class="form-group">
										<label for="email">Email:</label>
										<input required type="email" class="form-control" id="email" name="email">
									</div>
									<div class="form-group">
										<label for="name">Tên:</label>
										<input required type="text" class="form-control" id="name" name="name">
									</div>
									<div class="form-group">
										<label for="cm">Bình luận:</label>
										<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
									</div>
									<div class="form-group text-right">
										<button type="submit" class="btn btn-default">Gửi</button>
									</div>
									{{csrf_field()}}
								</form>
							</div>
						</div>

						
					</div>

					<!-- end main -->
				</div>
				 <div id="comment-list" >
				 		@foreach($comments as $comment)
							<ul>
								<li class="com-title">
									{{$comment->com_name}}
									<br>
									<span>{{date('d/m/Y H:i',strtotime($comment->created_at))}}</span>	
								</li>
								<li class="com-details">
									{{$comment->com_content}}
								</li>
							</ul>
						@endforeach	
						</div>
			</div>
		</div>
	</section>
</div>
</div>
	<!-- endmain -->
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
	
	</script> -->
	<script type="text/javascript">
		 {{asset('cart/add/'.$item->prod_id)}}
		$('#addCart').on('click',function{
			 $.ajax({
	            type: 'POST',
	            url: '/tasks',
	            data: 
	                task: $("#frmAddTask input[name=task]").val(),
	                description: $("#frmAddTask input[name=description]").val()
            });
		});
	</script>
@stop
