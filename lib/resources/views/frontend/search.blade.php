@extends('frontend.master')
@section('title','Trang Tìm kiếm ' )
@section('main')
@include('frontend.menuleft')
	<link rel="stylesheet" href="css/search.css">
	<div id="wrap-inner">
		<div class="products">
			<h3>Tìm kiếm với từ khóa: <span>{{$keyword}}</span></h3>
			<div class="search-result-container ">
		      <div id="myTabContent" class="tab-content category-list">
		        <div class="tab-pane active " id="grid-container">
		          <div class="category-product">
					<div class="row">
					@foreach($search as $item)
		              <div class="col-md-3 wow fadeInUp">
		                <div class="products">
		                  <div class="product">
		                    <div class="product-image">
		                      <div class="image"> <a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}"><img src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}" alt=""></a> </div>

		                    </div>
		                    <!-- /.product-image -->
		                    
		                    <div class="product-info text-left">
		                      <h3 class="name"><a href="detail.html">{{$item->prod_name}}</a></h3>
		                      <div class="rating rateit-small"></div>
		                      <div class="description"></div>
		                      <div class="product-price"> <span class="price"> {{number_format($item->prod_price,0,',','.').'VNĐ'}}</span>  </div>
		                      <!-- /.product-price --> 
		                      
		                    </div>
		                    <!-- /.product-info -->
		                    <div class="cart clearfix animate-effect">
		                      <div class="action">
		                        <ul class="list-unstyled">
		                          <li class="lnk"> <a class="add-to-cart" href="{{asset('cart/ad/'.$item->prod_id)}}" title="Thêm vào giỏ hàng"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a> </li>
		                          <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Thêm vào yêu thích"> <i class="icon fa fa-heart"></i> </a> </li>
		                          <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}" title="Xem chi tiết"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
		                        </ul>
		                      </div>
		                      <!-- /.action --> 
		                    </div>
		                    <!-- /.cart --> 
		                  </div>
		                  <!-- /.product --> 
		                  
		                </div>
		                <!-- /.products --> 
		              </div>
		              <!-- /.item -->
		            @endforeach
		        	</div>
		    	</div>
			</div>
		</div>	
	</div>	               	                	
		</div>

		<!-- <div id="pagination">
			<ul class="pagination pagination-lg justify-content-center">
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					</a>
				</li>
				<li class="page-item disabled"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					</a>
				</li>
			</ul>
		</div> -->
	</div>
	</div>
</div>
</div>
@stop