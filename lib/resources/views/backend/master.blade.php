<!DOCTYPE html>
<html>
<head>
<base href="{{asset('public/layout/backend')}}/">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="bower_components/bootstrap/dist/css/bootstrap.min.css'" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- MetisMenu CSS -->
<link href="bower_components/metisMenu/dist/metisMenu.min.css'" rel="stylesheet">

<!-- Custom CSS -->
<link href="dist/css/sb-admin-2.css'" rel="stylesheet">

<!-- Custom Fonts -->
<link href="bower_components/font-awesome/css/font-awesome.min.css'" rel="stylesheet" type="text/css">

<!-- DataTables CSS -->
<link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css'" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="bower_components/datatables-responsive/css/dataTables.responsive.css'" rel="stylesheet">

<script src="js/ckeditor/ckeditor.js'"></script>
<script type="text/javascript" src="../../editor/ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Giày Store Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{Auth::user()->email}} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{asset('logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
	@yield('main')	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu" style="background-color: #223a48;">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li><a href="{{asset('admin/category')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh mục</a></li>
			<li><a href="{{asset('admin/product')}}"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 20px;margin-right: 10px" ></i> Sản phẩm</a></li>
			<li><a href="{{asset('admin/khachhang')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Khách hàng</a></li>
			<li><a href="{{asset('admin/staff')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Nhân viên</a></li>
			<li><a href="{{asset('admin/binhluan')}}"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg></svg> Bình Luận Khách Hàng</a></li>
			<li><a href="{{asset('admin/bill')}}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Đơn đặt hàng</a></li>
			<li><a href="{{asset('admin/product/binhluan')}}"><svg class="glyph stroked tag"><use xlink:href="#stroked-tag"/></svg>Tuyển Dụng</a></li>
			<li><a href="{{asset('admin/product/listslide')}}"><i class="fa fa-glide" aria-hidden="true" style="font-size: 20px;margin-right: 10px"></i>Slide</a></li>
			<li><a href="{{asset('admin/product/binhluan')}}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg></svg>Kho hàng</a></li>
			
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->
	<script src="bower_components/jquery/dist/jquery.min.js'"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js'"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js'"></script>

    <!-- Chart js -->
    <script src="bower_components/Chart.js-1.1.1/Chart.min.js'"></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.1.1/Chart.min.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="public/backend/dist/js/sb-admin-2.js'"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js'"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')"></script>
    
    <!-- My JavaScript -->
    <script src="js/myscript.js'"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
	<script>
  $('#calendar').datepicker({
  });

  !function ($) {
      $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
          $(this).find('em:first').toggleClass("glyphicon-minus");      
      }); 
      $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
  }(window.jQuery);

  $(window).on('resize', function () {
    if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
  })
  $(window).on('resize', function () {
    if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
  })
  // Chang Image add product
  function changeImg(input){
      //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
      if(input.files && input.files[0]){
          var reader = new FileReader();
          //Sự kiện file đã được load vào website
          reader.onload = function(e){
              //Thay đổi đường dẫn ảnh
              $('#avatar').attr('src',e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
      }
  }
  $(document).ready(function() {
      $('#avatar').click(function(){
          $('#img').click();
      });
  });
 </script>	
</body>

</html>