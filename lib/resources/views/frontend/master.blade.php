<!DOCTYPE html>
<html>
<head>
	<base href="{{asset('public/layout/frontend/')}}/">  
	<link rel="stylesheet" href="assets\css\bootstrap.min.css">

	<!-- Customizable CSS -->
	<link rel="stylesheet" href="assets\css\main.css">
	<link rel="stylesheet" href="assets\css\blue.css">
	<link rel="stylesheet" href="assets\css\owl.carousel.css">
	<link rel="stylesheet" href="assets\css\owl.transitions.css">
	<link rel="stylesheet" href="assets\css\animate.min.css">
	<link rel="stylesheet" href="assets\css\rateit.css">
	<link rel="stylesheet" href="assets\css\bootstrap-select.min.css">

	<!-- Icons/Glyphs -->
	<link rel="stylesheet" href="assets\css\font-awesome.css">


  

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .example{
            margin: 20px;
            text-align: center;
            background: antiquewhite;
        }

    </style>
	<base href="{{asset('public/layout/frontend')}}/">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Shop Giày Store- @yield('title')</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">

		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
</head>
<body>    
	<!-- header -->
	<header id="header" >
		<div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li><a href="#"><i class="icon fa fa-user"></i>Tài khoản của tôi</a></li>
            <li><a href="#"><i class="icon fa fa-heart"></i>Sản phẩm yêu thích</a></li>
            
            @if(!Auth::check())
            @else
             <i class="fa fa-user-circle"></i> 
              {{Auth::user()->name}}
              
            @endif
            @if(Auth::check())
              <li><a href="{{url('login1/logout1')}}"><i class="icon fa fa-sign-out"></i>Đăng Xuất</a></li>
            @else
              <li><a href="{{asset('login1')}}"><i class="icon fa fa-lock"></i>Đăng nhập</a></li>
              <li><a href="{{asset('signup')}}"><i class="icon fa fa-lock"></i>Đăng ký</a></li>  
            @endif
          </ul>
        </div>
        <!-- /.cnt-account -->
        
        <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">Chuyển ngôn ngữ </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{url(Request::getPathInfo().'?lang=en')}}">English</a></li>
                <li><a href="{{url(Request::getPathInfo().'?lang=vn')}}">Vietnamese</a></li>
              </ul>
            </li>
          </ul>
          <!-- /.list-unstyled --> 
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
		<div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="{{asset('/')}}"> <img src="img/home/logo.png" alt="logo"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder" style="margin-top: 22px"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form method="get" action="{{asset('search/')}}">
              <div class="control-group">
                <input class="search-field" name="result" placeholder="Search here...">
                <button class="search-button"></button> </div>
            </form>
          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= -->
        </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          
          <div class="dropdown dropdown-cart"> <a href="" class="dropdown-toggle lnk-cart" data-toggle="dropdown" style="background: none;border: none; ">
            <div class="items-cart-inner" style="margin-left: 39px">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <div class="basket-item-count" style="margin-left: 2px"><span class="count">{{Cart::count()}}</span></div>
              <div class="total-price-basket" style="margin-left: -27px;"> <span class="lbl">TC:</span> <span class="total-price"> <span class="sign"></span><span class="value">{{ Cart::subtotal(0,3,',').'VNĐ'}}</span> </span> </div>
            </div>
            </a>
            <ul class="dropdown-menu">
              
              <li>
                <div class="cart-item product-summary">
                  <div class="row">
                    @foreach(Cart::content() as $item)
                    <div class="col-xs-4">
                      <div class="image"> <a href="detail.html"><img src="{{asset('lib/storage/app/avatar/'.$item->options->img)}}" alt=""></a> </div>
                    </div>
                    <div class="col-xs-7">
                      <h3  class="name"><p style="white-space: nowrap;width: 100px;text-overflow: ellipsis;    overflow: hidden;"><a href="index.php?page-detail" >{{ $item->name }}}</a></p></h3>
                      <div class="price">{{ $item->price}}</div>
                    </div>
                    <div class="col-xs-1 action"> <a href="{{asset('cart/delete/'.$item->rowId)}}"><i class="fa fa-trash"></i></a> </div>
                    @endforeach
                  </div>

                </div>
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>{{ Cart::subtotal(0,3,',')}}</span> </div>
                  <div class="clearfix"></div>
                  <a href="{{ route('show-cart') }}" class="btn btn-upper btn-primary btn-block m-t-20">Giỏ Hàng</a> </div>
                <!-- /.cart-total--> 
                
              </li>
            </ul>
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
          
          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>

	</header><!-- /header -->
	<!-- endheader -->
	<div class="header-nav animate-dropdown" style="margin-top: 10px">
	    <div class="container">
	      <div class="yamm navbar navbar-default" role="navigation">
	        <div class="navbar-header">
	       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
	       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
	        </div>
	        <div class="nav-bg-class">
	          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse" style="padding-left: 323px;background-color: #74b3b3;">
	            <div class="nav-outer">
	              <ul class="nav navbar-nav">
	                <li class="active dropdown yamm-fw"> <a href="{{asset('/')}}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-home" style="font-size: 20px;line-height: 10px;letter-spacing: 5px; " aria-hidden="true"></i>Home</a> </li>
	                
	                
	                
	                <li class="dropdown"> <a href="contact.html"><i class="fa fa-user" style="font-size: 20px;line-height: 10px;letter-spacing: 5px; "></i>Giới Thiệu</a> </li>
	                <li class="dropdown"> <a href="{{asset('contact')}}"><i class="icon fa fa-phone" style="font-size: 20px;line-height: 10px;letter-spacing: 5px; " aria-hidden="true"></i>Liên Hệ</a> </li>
	                
	                <li class="dropdown"> <a href="contact.html"><i class="fa fa-tags" style="font-size: 20px;line-height: 10px;letter-spacing: 5px; " aria-hidden="true"></i>Tuyển Dụng</a> </li>

	                <li class="dropdown  navbar-right special-menu" > <a href="#">Tình Trạng Đơn Hàng</a> </li>

	              </ul>
	              <!-- /.navbar-nav -->
	              <div class="clearfix"></div>
	            </div>
	            <!-- /.nav-outer --> 
	          </div>
	          <!-- /.navbar-collapse --> 
	        </div>
	        <!-- /.nav-bg-class --> 
	      </div>
	      <!-- /.navbar-default -->

	    </div>
    <!-- /.container-class --> 
      
  </div>
 <div class="container">
        
        
          @yield('main')
          <!-- main -->
          <!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
          
         

        </div>

        
          
<!-- <----wrap--- -->
   

  <!-- footer -->
  <footer id="footer">      
    <div id="footer-t">
      <div class="container">
        <div class="row">       
          <div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">            
            <a href="{{asset('/')}}"><img src="img/home/logo.png"></a>   
          </div>
          <div id="about" class="col-md-3 col-sm-12 col-xs-12">
            <h3>Về chúng tôi</h3>
            <p class="text-justify">Với kinh nghiệm hơn 5 năm kinh doanh lĩnh vực giày dép nói riêng và ngành thời trang nói chung Giày Store tự tin khẳng định luôn mang đến cho các bạn những sản phẩm chất lượng với giá hợp lí nhất.ngoài ra cùng chế độ bảo hành và chính sách bán hàng chuyên nghiệp sẽ mang đến cho các bạn những trải nghiệm vô cùng hấp dẫn tại Giày Store.</p>
          </div>
          <div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
            <h3>Hotline</h3>
            <p>Phone Sale: (+84)  093.777.97.90</p>
            <p>Email: thanhtrungtran8888@gmail.com</p>
          </div>
          <div id="contact" class="col-md-3 col-sm-12 col-xs-12">
            <h3>Liên hệ chúng tôi</h3>
            <p>Chi Nhánh 1: 666 Quang Trung, P.11, Quận Gò Vấp</p>
            <p>Chi Nhánh 2: 113 Đường số 8, P.11, Quận Gò Vấp</p>
          </div>
        </div>        
      </div>
      <div id="footer-b">       
        <div class="container">
          <div class="row">
            <div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
              <p>Shop Giày Store Giá Rẻ - Giày Tập Gym Nam Nữ Giá Rẻ</p>
            </div>
            <div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
              <p>© 2017 Vietpro Academy. All Rights Reserved</p>
            </div>
          </div>
        </div>
        <div id="scroll">
          <a href="#"><img src="img/home/scroll.png"></a>
        </div>  
      </div>
    </div>
  </footer>
  <!-- endfooter -->
  <script src="assets\js\jquery-1.11.1.min.js"></script> 
<script src="assets\js\bootstrap.min.js"></script> 
<script src="assets\js\bootstrap-hover-dropdown.min.js"></script> 
<script src="assets\js\owl.carousel.min.js"></script> 
<script src="assets\js\echo.min.js"></script> 
<script src="assets\js\jquery.easing-1.3.min.js"></script> 
<script src="assets\js\bootstrap-slider.min.js"></script> 
<script src="assets\js\jquery.rateit.min.js"></script> 
<script type="text/javascript" src="assets\js\lightbox.min.js"></script> 
<script src="assets\js\bootstrap-select.min.js"></script> 
<script src="assets\js\wow.min.js"></script> 
<script src="assets\js\scripts.js"></script>



</body>
</html>