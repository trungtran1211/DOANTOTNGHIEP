@extends('frontend.master')
@section('title','Trang chủ')
@section('main')
<!-- main -->
<div class="row">
@include('frontend.menuleft')

<div id="main" class="col-md-9">
@include('frontend.slide')


<section id="body" style="margin-top: -13px;">

	
	<div id="wrap-inner">
		<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
			<div class="more-info-tab clearfix ">
				<h3 class="new-product-title pull-left">Sản Phẩm Mới Nhất </h3>

				<!-- /.nav-tabs --> 
			</div>
			<div class="tab-content outer-top-xs">
				<div class="tab-pane in active" id="all">
					<div class="product-slider">
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="5">

							@foreach($news as $item)
							<div class="item item-carousel">
								<div class="products">
									<div class="product">
										<div class="product-image">
											<div class="image"> <a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}"><img  height="230px" src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}" alt="" style="width: 164px"></a> </div>
											<!-- /.image -->

											<div class="tag hot" style="background-color: #306bc3"><span>NEW</span></div>
										</div>
										<!-- /.product-image -->

										<div class="product-info text-left">
											<h3 class="name" style="height: 45px"><a href="detail.html">{{$item->prod_name}}</a></h3>
											<div class="rating rateit-small"></div>
											<div class="description"></div>
											<div class="product-price"> <span class="price"> {{number_format($item->prod_price,0,',','.') .'VNĐ'}} </span>  </div>
											<!-- /.product-price --> 

										</div>
										<!-- /.product-info -->
										<div class="cart clearfix animate-effect">
											<div class="action">
												<ul class="list-unstyled">
													<li class="lnk"> <a class="add-to-cart" href="{{asset('cart/ad/'.$item->prod_id)}}" title="Thêm vào giỏ hàng"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a> </li>
													
													<li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Thêm vào yêu thích"> <i class="icon fa fa-heart"></i> </a> </li>
													<li class="lnk"> <a class="add-to-cart" href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}" title="Xem chi tiết"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
							@endforeach
							<!-- /.item -->

							<!-- /.item --> 
						</div>
						<!-- /.home-owl-carousel --> 
					</div>
					<!-- /.product-slider --> 
				</div>
				<!-- /.tab-pane -->
				

				<!-- end main -->
			</div>
			<div id="wrap-inner">
					<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
						<div class="more-info-tab clearfix ">
							<h3 class="new-product-title pull-left">Sản Phẩm Hot</h3>

							<!-- /.nav-tabs --> 
						</div>
						<div class="tab-content outer-top-xs">
							<div class="tab-pane in active" id="all">
								<div class="product-slider">
									<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="5">

										@foreach($featured as $item)
										<div class="item item-carousel">
											<div class="products">
												<div class="product">
													<div class="product-image">
														<div class="image">
															
															 <a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}"><img height="230px" src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}" alt="" style="width: 160px"></a>
														</div>
														<!-- /.image -->

														<div class="tag hot"><span>hot</span></div>
													</div>
													<!-- /.product-image -->

													<div class="product-info text-left">
														<h3 class="name" style="height: 45px"><a href="detail.html">{{$item->prod_name}}</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>
														<div class="product-price"> <span class="price"> {{number_format($item->prod_price,0,',','.').'VNĐ'}} </span>  </div>
														<!-- /.product-price --> 

													</div>
													<!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="lnk"> <a class="add-to-cart" href="{{asset('cart/ad/'.$item->prod_id)}}" title="Thêm vào giỏ hàng"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a> </li>
																<li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
																<li class="lnk"> <a class="add-to-cart" href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}" title="Xem chi tiết"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
										@endforeach
										<!-- /.item -->

										<!-- /.item --> 
									</div>
									<!-- /.home-owl-carousel --> 
								</div>
								<!-- /.product-slider --> 
							</div>
							<!-- /.tab-pane -->

							<!-- /.tab-pane --> 

						</div>
						<!-- /.tab-content --> 
					</div>

				
					<div class="best-deal wow fadeInUp outer-bottom-xs">
						<h3 class="section-title">Sản Phẩm Bán Chạy</h3>
						<div class="sidebar-widget-body outer-top-xs">
							<div class="tab-content outer-top-xs">
							<div class="tab-pane in active" id="all">
								<div class="product-slider">
									<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="5">

										@foreach($new as $item)
										<div class="item item-carousel">
											<div class="products">
												<div class="product">
													<div class="product-image">
														<div class="image">
															
															 <a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}"><img height="230px" src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}" alt="" style="width: 160px"></a>
														</div>
														<!-- /.image -->

														<div class="tag hot"><span>hot</span></div>
													</div>
													<!-- /.product-image -->

													<div class="product-info text-left">
														<h3 class="name" style="height: 45px"><a href="detail.html">{{$item->prod_name}}</a></h3>
														<div class="rating rateit-small"></div>
														<div class="description"></div>
														<div class="product-price"> <span class="price"> {{number_format($item->prod_price,0,',','.').'VNĐ'}} </span>  </div>
														<!-- /.product-price --> 

													</div>
													<!-- /.product-info -->
													<div class="cart clearfix animate-effect">
														<div class="action">
															<ul class="list-unstyled">
																<li class="lnk"> <a class="add-to-cart" href="{{asset('cart/ad/'.$item->prod_id)}}" title="Thêm vào giỏ hàng"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a> </li>
																<li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
																<li class="lnk"> <a class="add-to-cart" href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}" title="Xem chi tiết"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
										@endforeach
										<!-- /.item -->

										<!-- /.item --> 
									</div>
									<!-- /.home-owl-carousel --> 
								</div>
								<!-- /.product-slider --> 
							</div>
							<!-- /.tab-pane -->

							<!-- /.tab-pane --> 

						</div>
						</div>
						<!-- /.sidebar-widget-body --> 
					</div>
				</div>
		
		</div>
	</div>
</div>
</div>
</div>
</section>
</div>
</div>
<!-- endmain -->
@stop
