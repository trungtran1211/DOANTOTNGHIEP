@extends('frontend.master')
@section('title','Trang Xem Chi Tiết' )
@section('main')
<div class="row">
@include('frontend.menuleft')

<div id="main" class="col-md-9">
@include('frontend.slide')
<link rel="stylesheet" href="css/category.css">
<section id="body" style="margin-top: -13px;">


	<div id="wrap-inner">
		<div class="container-fluid">
<h4 style="color: #004fc5;text-shadow: -1px 0px 20px black; margin-top: 34px;">{{$catename->cate_name}}</h4>
		<div class="search-result-container ">
		      <div id="myTabContent" class="tab-content category-list">
		        <div class="tab-pane active " id="grid-container">
		          <div class="category-product">
					<div class="row">
					@foreach($items as $item)
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
		                          <li class="add-cart-button btn-group">
		                            <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Thêm vào giỏ hàng" style="height: 37px;"> <i class="fa fa-shopping-cart"></i> </button>
		                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
		                          </li>
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
	
		<div id="pagination" style="text-align: center;">
			
			{{$items->links()}}
		</div>
	</div>				
	<!-- end main -->
</div>
</div>
</div>
</section>
</div>
</div>
<!-- endmain -->
@stop