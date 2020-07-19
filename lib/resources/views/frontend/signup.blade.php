
<!DOCTYPE html>
<html>
<head>
<title>Bubble SignUp Form a Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bubble SignUp Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="public/layout/frontend/assets/sscss/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Xin Mời Bạn Đăng Ký</h1>
		<div class="main-agileinfo">
			<div class="agileits-top"> 
				<form action="{{ url('regrister') }}" method="post"> 
					{!! csrf_field() !!}
					<input class="text" type="text" name="name" placeholder="Username" required="">
					@if ($errors->has('email'))
		                <span class="help-block">
		                    {{ $errors->first('email') }}
		                </span>
		            @endif
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="text" name="address" placeholder="address" required="" style="margin-bottom: 28px;">
					<input class="text" type="text" name="phone" placeholder="number phone" required="" style="margin-bottom: 28px;">
					@if ($errors->has('cfpassword'))
		                <span class="help-block">
		                    {{ $errors->first('cfpassword') }}
		                </span>
		            @endif
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="cfpassword" placeholder="Confirm Password" required="">
					<!-- <input class="text" type="text" name="level" value="2" required=""> -->
					@if(Session('alert'))
					<Session class='alert alert-success'>{{Session('alert')}}</Session>
					@endif
					<input type="submit" value="SIGNUP">
				</form>
				<p>Bạn đã có tài khoản <a href="{{asset('login1')}}"> Login Now!</a></p>
			</div>	 
		</div>	
		<!-- copyright -->
		<div class="w3copyright-agile">
			<p>© 2017 Bubble SignUp Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div>
		<!-- //copyright -->
		<ul class="w3lsg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>	
	<!-- //main --> 

</body>
</html>
