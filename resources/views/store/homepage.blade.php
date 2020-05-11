<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pizza Order Online - Home page</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<script
	src="https://code.jquery.com/jquery-3.4.1.js"
	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/homepage.css">
</head>
<body>
	<!-- nav bar -->
	<div class="container-fluid">
		<div class="row">
			<div class="container-fluid col-md-12 col-nav">
				<nav class="navbar navbar-expand-lg navbar-light">
					<!-- brand and navbar-toggler -->
					<a class="navbar-brand" href="#"><img src="../images/tuantt/logo.png"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
						<span class="navbar-toggler-icon"></span>
					</button> 

					<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
						<ul class="navbar-nav navbar-direct">
							<li class="nav-item active">
								<a class="nav-link" href="{{route('home')}}">Home Pages<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{asset('')}}blog">Blog</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pages </a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<li><a class="dropdown-item" href="#">About Us</a></li>
									<li><a class="dropdown-item" href="{{route('register')}}">Sign Up</a></li>
									<li><a class="dropdown-item" href="#">Checkout</a></li>
									<li><a class="dropdown-item" href="{{asset('')}}cart">Cart</a></li>
									<li><a class="dropdown-item" href="#">Error 404</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu </a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<li><a class="dropdown-item" href="{{asset('')}}menu">Menu 1</a></li>
									<li><a class="dropdown-item" href="{{asset('')}}menu">Products</a></li>	
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Locations</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="{{route('contact')}}">Contact Us</a>
							</li>
							
						</ul>
						<!-- menu right -->
						<ul class="navbar-nav ml-md-auto navbar-nav-right">
							{{-- //Hello user --}}
							{{-- @if(Auth::user())
	                			@if(Auth::user()->group_id == 2)
	                			<a href="#" class="btn btn-success btn-block">
	                				Hello: {{Auth::user()->username}}</a>
	               				<a href="logout" class="btn btn-danger">Logout</a>
	               				@endif
                			@else   
	                			<a href="{{route('auth.login')}}" class="btn btn-danger btn-block">Login</a>
	                			<a href="{{route('register')}}" class="btn btn-info btn-block">Register</a>
                			@endif --}}
							<li class="nav-item btn btn-danger btn-order">
								<a class="nav-link text-white font-weight-bold text-uppercase" href="{{asset('')}}menu">order online</a>
							</li>
							<li class="nav-item btn btn-dark btn-cart">
								<a class="text-light" href="{{asset('')}}cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
							</li>
							<li class="nav-item btn btn-dark btn-search">
								<a class="text-light" href="#"><i class="fa fa-search"></i></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- /nav bar -->

	<!-- content -->
	<div class="container-fluid">
		<div class="row banner bg-light">
			<div class="col-md-6 col-sm-12 col-xs-12 left banner-item">
				<img src="../images/tuantt/2.jpg" class="img-fluid">
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 right banner-item">
				<div class="title-text">
					<span class="text-uppercase font-weight-bold">celebrating 100 year of cheesy pizza</span>
				</div>
				<div class="short-text">
					<span class="font-weight-bold">Join our grand opening tonight for free pizza</span>
				</div>
				<div class="content-text">
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
				</div>
				<div class="join-now row">
					<div class="btn-join item col-md-6 col-sm-12">
						<button class="btn btn-md btn-danger btn-click">
							<span class="text-uppercase font-weight-bold">join now</span>
						</button>
					</div>
					<div class="img-item item col-md-6 col-sm-12">
						<img src="../images/tuantt/3.png" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
		<div class="row how-do-it">
			<div class="col-md-12 col-md-12">
				<h5 class="text-danger font-weight-bold text-capitalize text-center">how we do it</h5>
				<h2 class=" font-weight-bold text-capitalize text-center">we deliver your food in 4 steps</h2>
				<h6 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. .</h6>
				<div class="row steps">
					<div class="col-md-3 col-xs-12">
						<div class="container content">
							<h1 class="text-center text-danger"><i class="fa fa-free-code-camp" aria-hidden="true"></i></h1>
							<h4 class="text-center text-capitalize font-weight-bold">order</h4>
							<h6 class="text-center">There are many variation of passages of Lorem input avaliable</h6>
						</div>
					</div>
					<div class="col-md-3 col-xs-12">
						<div class="container content">
							<h1 class="text-center text-danger"><i class="fa fa-free-code-camp" aria-hidden="true"></i></h1>
							<h4 class="text-center text-capitalize font-weight-bold">cook</h4>
							<h6 class="text-center">There are many variation of passages of Lorem input avaliable</h6>
						</div>
					</div>
					<div class="col-md-3 col-xs-12">
						<div class="container content">
							<h1 class="text-center text-danger"><i class="fa fa-free-code-camp" aria-hidden="true"></i></h1>
							<h4 class="text-center text-capitalize font-weight-bold">deliver</h4>
							<h6 class="text-center">There are many variation of passages of Lorem input avaliable</h6>
						</div>
					</div>
					<div class="col-md-3 col-xs-12">
						<div class="container content">
							<h1 class="text-center text-danger"><i class="fa fa-free-code-camp" aria-hidden="true"></i></h1>
							<h4 class="text-center text-capitalize font-weight-bold">enjoy</h4>
							<h6 class="text-center">There are many variation of passages of Lorem input avaliable</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="btn-order .mx-auto .container-fluid">
				<button class="btn btn-md btn-danger btn-click">
					<a class="text-uppercase font-weight-bold text-white text-decoration-none" href="{{asset('')}}layouts.menu">order online</a>
				</button>
			</div>
		</div>
		<div class="row pizza bg-light">
			<div class="col-md-6 col-xs-12 left">
				<h6 class="text-danger font-weight-bold text-capitalize">pizza</h6>
				<h3 class="text-capitalize">Crazy pizza offers</h3>
				<h6>Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
				<div class="btn-order .mx-auto .container-fluid">
					<button class="btn btn-md btn-danger btn-click">
						<a class="text-uppercase font-weight-bold text-white text-decoration-none" href="{{asset('')}}layouts.menu">order online</a>
					</button>
				</div>
			</div>
			<div class="col-md-6 col-xs-12 right">
				<img src="../images/tuantt/pizza-2.png" class="img-fluid">
			</div>
		</div>
		<div class="row trending">
			<div class="col-md-12">
				<h6 class="text-center text-danger font-weight-bold text-capitalize">trending</h6>
				<h3 class="text-capitalize text-center font-weight-bold">our customers'top picks</h3>
				<h6 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h6>
			</div>
			<div class="row offers">
				<div class="col-md-4 offers-item">
					<div class="container item bg-light">
						<img src="../images/tuantt/pizza-1.png" class="img-fluid">
						<h5 class="text-center font-weight-bold text-capitalize">four chesse</h5>
						<h6 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
						<div class="row text-center d-flex justify-content-center">
							<button class="btn btn-light">13.99$</button>
							<button class="btn btn-light">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</button>
						</div>
						<hr>
						<div class="row btn-choose d-flex justify-content-center">
							<button class="btn btn-danger text-uppercase">
								<span>order <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
							</button>
							<button class="btn btn-warning text-uppercase text-white">
								<span>customize <i class="fa fa-plus" aria-hidden="true"></i></span>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-4 offers-item">
					<div class="container item bg-light">
						<img src="../images/tuantt/pizza-2.png" class="img-fluid">
						<h5 class="text-center font-weight-bold text-capitalize">vegetarian</h5>
						<h6 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
						<div class="row text-center d-flex justify-content-center">
							<button class="btn btn-light">11.69$</button>
							<button class="btn btn-light">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</button>
						</div>
						<hr>
						<div class="row btn-choose d-flex justify-content-center">
							<button class="btn btn-danger text-uppercase">
								<span>order <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
							</button>
							<button class="btn btn-warning text-uppercase text-white">
								<span>customize <i class="fa fa-plus" aria-hidden="true"></i></span>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-4 offers-item">
					<div class="container item bg-light">
						<img src="../images/tuantt/pizza-3.png" class="img-fluid">
						<h5 class="text-center font-weight-bold text-capitalize">Barbeque chicken</h5>
						<h6 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
						<div class="row text-center d-flex justify-content-center">
							<button class="btn btn-light">9.89$</button>
							<button class="btn btn-light">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</button>
						</div>
						<hr>
						<div class="row btn-choose d-flex justify-content-center">
							<button class="btn btn-danger text-uppercase">
								<span>order <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
							</button>
							<button class="btn btn-warning text-uppercase text-white">
								<span>customize <i class="fa fa-plus" aria-hidden="true"></i></span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row pagination d-flex justify-content-center">
				<button class="btn btn-light">
					<span class="text-body"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>
				</button>
				<button class="btn btn-light">
					<span class="text-body"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
				</button>
			</div>
		</div>
		<div class="row great-offer bg-light">
			<div class="col-md-6 col-xs-12">
				<img src="../images/tuantt/great-offer.png" class="img-fluid">
			</div>
			<div class="col-md-6 col-xs-12 content">
				<h6 class="text-danger font-weight-bold text-capitalize">great offer</h6>
				<h3 class="text-capitalize font-weight-bold">buy 1 get 1 free</h3>
				<h6 class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
				<button class="btn btn-click btn-danger">
					<a class="text-uppercase text-white text-decoration-none" href="{{asset('')}}layouts.menu">order now</a>
				</button>
			</div>
		</div>
		<div class="row our-backbone">
			<div class="title col-md-12">
				<h6 class="text-center text-danger font-weight-bold text-capitalize">our backbone</h6>
				<h3 class="text-capitalize text-center font-weight-bold">customers testimonials</h3>
				<h6 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.
				</h6>
			</div>
			<div class="row backbone ">
				<div class="col-md-4 backbone-item">
					<div class="container b-bone bg-light">
						<img src="../images/tuantt/per1.jpg" class="img-fluid rounded-circle">
						<h5 class="text-center font-weight-bold text-warning">
							<i class="fa fa-quote-left" aria-hidden="true"></i>
						</h5>
						<h6 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
						<h5 class="text-center font-weight-bold text-capitalize">john doe</h5>
						<h6 class="text-center text-capitalize">food specialist</h6>
					</div>
				</div>
				<div class="col-md-4 backbone-item">
					<div class="container b-bone bg-light">
						<img src="../images/tuantt/per2.jpg" class="img-fluid rounded-circle">
						<h5 class="text-center font-weight-bold text-warning">
							<i class="fa fa-quote-left" aria-hidden="true"></i>
						</h5>
						<h6 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
						<h5 class="text-center font-weight-bold text-capitalize">jame havani</h5>
						<h6 class="text-center text-capitalize">food specialist</h6>
					</div>
				</div>
				<div class="col-md-4 backbone-item">
					<div class="container b-bone bg-light">
						<img src="../images/tuantt/per3.jpg" class="img-fluid rounded-circle">
						<h5 class="text-center font-weight-bold text-warning">
							<i class="fa fa-quote-left" aria-hidden="true"></i>
						</h5>
						<h6 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
						<h5 class="text-center font-weight-bold text-capitalize">dexuly luna</h5>
						<h6 class="text-center text-capitalize">food specialist</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="row join-our">
			<div class="form-email bg-light">
				<form>
					<!-- @csrf -->
					<h2 class="text-capitalize font-weight-bold">join our newsletter</h2>
					<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</h6>
					<div class="form-group">
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
					</div>
					<button type="submit" class="btn btn-danger btn-click">
						SUBMIT <i class="fa fa-paper-plane" aria-hidden="true"></i>
					</button>
				</form>
			</div>
		</div>
	</div>
	<!-- /content -->

	<!-- footer -->
	<div class="container-fluid footer bg-light">
		<div class="row download-us d-flex justify-content-between">
			<div class="logo">
				<img src="../images/tuantt/logo.png" class="img-fluid">
			</div>
			<div class="download d-flex justify-content-end">
				<img src="../images/tuantt/android.png" class="img-fluid">
				<img src="../images/tuantt/ios.png" class="img-fluid">
			</div>
		</div>
		<div class="row info">
			<div class="col-md-3 col-sm-6 col-xs-12 info-item">
				<div class="item">
					<ul class="">
						<li><h5 class="font-weight-bold text-capitalize">infomation</h5></li>
						<li class="list-item text-dark">home</li>
						<li class="list-item text-dark">blog</li>
						<li class="list-item text-dark">about us</li>
						<li class="list-item text-dark">menu</li>
						<li class="list-item text-dark">contact us</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 info-item">
				<div class="item">
					<ul class="">
						<li><h5 class="font-weight-bold text-capitalize">top items</h5></li>
						<li class="list-item text-dark">pepperoni</li>
						<li class="list-item text-dark">pepperoni</li>
						<li class="list-item text-dark">pepperoni</li>
						<li class="list-item text-dark">pepperoni</li>
						<li class="list-item text-dark">pepperoni</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 info-item">
				<div class="item">	
					<ul class="">
						<li><h5 class="font-weight-bold text-capitalize">others</h5></li>
						<li class="list-item text-dark">check out</li>
						<li class="list-item text-dark">cart</li>
						<li class="list-item text-dark">product</li>
						<li class="list-item text-dark">location</li>
						<li class="list-item text-dark">legal</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 info-item">
				<div class="item">
					<ul class="">
						<li><h5 class="font-weight-bold text-capitalize">social media</h5></li>
						<li class="">sign up and get exclusive offers and coupon codes</li>
						<li class="">
							<a class="btn btn-click btn-danger text-uppercase text-white text-decoration-none" href="{{route('register')}}">sign up</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<hr>
		<div class="row copy-right d-flex justify-content-between">
			<div class="content">
				<h6>Copyright 2020 <span class="text-danger">APV</span> All Rights Reserved</h6>
			</div>
			<div class="top">
				<span class="font-weight-bold">Back to top</span>
				<button class="btn bg-dark"><i class="fa fa-chevron-up text-white" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
	<!-- /footer -->

	<!-- Slick slider js -->
	<script src="../homepage/js/slick.js" type="text/javascript" charset="utf-8"></script>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>