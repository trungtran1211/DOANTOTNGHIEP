
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="public/layout/frontend/assets/scss/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/layout/frontend/assets/scss/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/layout/frontend/assets/scss/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/layout/frontend/assets/scss/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/layout/frontend/assets/scss/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="public/layout/frontend/assets/scss/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/layout/frontend/assets/scss/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/layout/frontend/assets/scss/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="public/layout/frontend/assets/scss/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/layout/frontend/assets/scss/css/util.css">
  <link rel="stylesheet" type="text/css" href="public/layout/frontend/assets/scss/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg'); background-color: #9fdad2;">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="background-color: #e2e2e2;">
				<form action="{{ url('/login1') }}" method="POST" class="login100-form validate-form">
				{!! csrf_field() !!}
					<span class="login100-form-title p-b-49">
						Login
					</span>
					
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						@if ($errors->has('email'))
			                <span class="help-block">
			                    {{ $errors->first('email') }}
			                </span>
			            @endif
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" value="{{ old('email') }}" placeholder="Type your username">
						
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						@if ($errors->has('password'))
			                <span class="help-block">
			                    {{ $errors->first('password') }}
			                </span>
			            @endif
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
						
					
					<div class="text-right p-t-8 p-b-31">
						<label  style="margin-right: 126px;font-size: 15px;color: #736b6b;">
	                        <input type="checkbox" name="remember"> Remember Me
	                    </label>
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="{{asset('signup')}}" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
  <script src="public/layout/frontend/assets/scss/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="public/layout/frontend/assets/scss/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="public/layout/frontend/assets/scss/vendor/bootstrap/js/popper.js"></script>
  <script src="public/layout/frontend/assets/scss/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="public/layout/frontend/assets/scss/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="public/layout/frontend/assets/scss/vendor/daterangepicker/moment.min.js"></script>
  <script src="public/layout/frontend/assets/scss/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="public/layout/frontend/assets/scss/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="public/layout/frontend/assets/scss/js/main.js"></script>

</body>
</html>