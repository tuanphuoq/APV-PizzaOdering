<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css-js/css/style.css">
</head>
<body>
	<div class="on-top">
		<h4 class="phone-number"><span><i class="fa fa-phone" aria-hidden="true"></i> +123 456 789</span></h4>
	</div>
	<nav class="navbar">
		<span class="navbar-toggle" id="js-navbar-toggle">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</span>
		<a href="#" class="logo"><img class="logo-img" src="css-js/images/logo.png"></a>
		<ul class="main-nav" id="js-menu">
			<li>
				<a href="{{route('home')}}" class="nav-links">Home Pages</a>
			</li>
			<li>
				<a href="#" class="nav-links">Blog</a>
			</li>
			<li>
				<a href="#" class="nav-links">Pages</a>
			</li>
			<li>
				<a href="#" class="nav-links">Menu</a>
			</li>
			<li>
				<a href="#" class="nav-links">Location</a>
			</li>
			<li>
				<a href="#" class="nav-links">Contact Us</a>
			</li>
			<li>
				<a href="#" class="nav-links"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
				<a href="#" class="nav-links"><i class="fa fa-search" aria-hidden="true"></i></a>
			</li>
		</ul>
	</nav>
	<div class="content">
		<div class="sub-content">
			<div class="content-left">
				<h1 class="left-title">Welcome Back</h1>
				<p class="left-des">	Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
			</div>
			
			<div class="content-right">
				<h1 class="title-login">Login</h1>
				<form action="{{route('login')}}" method="post">
					@csrf
					<div class="form-input">
						<input type="text" name="username" placeholder="Username"><br>
						@if($errors->first('username'))
						<span class="text-danger" style="color:red">{{$errors->first('username')}}</span>
					@endif
					</div>
					<div class="form-input">
						<input type="password" name="password" placeholder="Password"><br>
						@if($errors->first('password'))
					<span class="text-danger" style="color:red">{{$errors->first('password')}}</span>
					@endif
					</div><br>
					<div class="forgot-title">
						<a href="" >Forgot Password ?</a>
						<br>
						<br>
						<button class="btn-login" type="submit">LOGIN</button>
					</div>

					<div class="or">OR</div>
					<div class="group-btn">
						<button class="btn-fb"><i class="fa fa-facebook-official" aria-hidden="true"></i> Continue with Facebook</button>
						<br>
						<button class="btn-gg"><i class="fa fa-google-plus" aria-hidden="true"></i> Continue with Google</button>
					</div>
					
				</form>
				<div class="create-title">
					<p>Don't have an account? <a href="{{route('register')}}">Create One</a></p>
				</div>
			</div>
		</div>

	</div>
	<div class="footer">
		<div class="head-footer">
			<div class="group-app">
				<div class="footer-logo">
					<img src="css-js/images/logo_header (1).png">
				</div>
				<div class="app-title">
					<span><a href=""><img class="play-store" src="css-js/images/ggstore.PNG"></a><a href=""><img class="appstore" src="css-js/images/appstore.PNG"></a></span>
					
				</div>
			</div>
			<div class="menu-footer">
				<div class="list-menu">
					<ul>
						<li class="main-title">Information</li>
						<li>Home</li>
						<li>Blog</li>
						<li>About Us</li>
						<li>Menu</li>
						<li>Contact</li>
					</ul>
				</div>
				<div class="list-menu">
					<ul>
						<li class="main-title">Top Items</li>
						<li>Home</li>
						<li>Blog</li>
						<li>About Us</li>
						<li>Menu</li>
						<li>Contact</li>
					</ul>
				</div>
				<div class="list-menu">
					<ul>
						<li class="main-title">Other</li>
						<li>Home</li>
						<li>Blog</li>
						<li>About Us</li>
						<li>Menu</li>
						<li>Contact</li>
					</ul>
				</div>
				<div class="list-menu">
					<ul>
						<li class="main-title">Social Media</li>
						<li><span><i class="fa fa-facebook-official social b-fb" aria-hidden="true"></i> <i class="fa fa-pinterest-p social b-pr" aria-hidden="true"></i> <i class="fa fa-google-plus social b-gg" aria-hidden="true"></i> <i class="fa fa-twitter social b-tw" aria-hidden="true"></i></span></li>
						<li class="title-signup">Sign up and get exclusive offers and coupon codes</li>
						<li><button class="btn-signup" >Sign up</button></li>
					</ul>
				</div>
			</div>	
			<div class="end-footer">
				<div class="end-app">
					<div class="footer-logo">
						<div>Copyright@ 2020 <span style="color: red;">APV</span> All Right Reserved</div>
					</div>
					<div class="end-title">
						<div class="icon-top">
							<i class="fa fa-chevron-up" aria-hidden="true"></i>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="css-js/js/script.js"></script>
</body>
</html>
