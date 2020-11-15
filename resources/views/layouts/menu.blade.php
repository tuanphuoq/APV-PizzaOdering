<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pizza Template</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ URL::asset('/css/animate.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
	<link rel="stylesheet" href="../css/css/menu.css">
</head>
<body>
	<div class="py-1 bg-black top py-1-top">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">+ 1235 2355 98</span>
						</div>

						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
							<button class="btn btn-danger"><a href ="#"> Order Online</a></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="{{route('home')}}">Pizza Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu">Menu</span>
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="#" class="nav-link">About</a></li>
					<li class="nav-item active"><a href="#" class="nav-link">Menu</a></li>
					<li class="nav-item"><a href="{{asset('')}}cart" class="nav-link">Cart</a></li>
					<li class="nav-item"><a href="{{asset('')}}blog" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact Us</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/Pizzas/pizza.png');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate text-center mb-4">
					<h1 class="mb-2 bread">Specialties</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
					<div class="container">
						<div class="ftco-search">

							<div class="row">
								<div class="col-md-12 nav-link-wrap">
									<div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
										<a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">All</a>

										<a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Sides</a>

										<a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Pizzas</a>

										<a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Salads</a>

										<a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Pastas</a>

										<a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Deserts</a>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</section>

	{{-- search profuct --}}
	<section>
		<div class="row" style="padding: 20px 0px;">
			<div class="container d-flex" style="width : 50%; margin : auto;">
				<span>Search</span>
				<a id="search" style="border : 1px solid #c8a97e; padding: 0px 17px; margin-left: 30px; background-color: #c8a97e; color : white; cursor: pointer;">
					<i class="fa fa-search" aria-hidden="true"></i>
				</a>
				<input type="text" placeholder="" style="width: 60%; outline: none;" id="search-input">
			</div>
		</div>
	</section>

	<!--==================Show Products==================-->

	<section class="ftco-section">
		<div class="container">
			<div class="col-md-12 tab-wrap">
				<div class="tab-content" id="v-pills-tabContent">

					
					<div class="row no-gutters d-flex align-items-stretch" id="group-product">
						@if(empty($products))
						<h3 class=text-danger>No Data</h3>
						@else
						@foreach($products as $product)
						
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img order-md-last" style="background-image: url({{ asset(\Storage::url($product->image)) }});"></div>
								<div class="text d-flex align-items-center">
									<div>
										<div class="d-flex">
											<div class="one-half">
												<h3><a href="{{asset('')}}product-detail/{{$product->id}}">{{$product->name}}</a></h3>
											</div>
											<div class="one-forth">
												<span class="price">{{$product->price}}</span>
											</div>
										</div>
										<p><span>{{$product->description}}</span></p>
										<p><a href="{{asset('')}}product-detail/{{$product->id}}" class="btn btn-primary">Order</a></p>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						@endif
					</div>

				</div>
			</div>
		</div>


	</section>
	<!--==================End Show Products==================-->


	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-4">
					<a class="navbar-brand" href="#">Pizza Home</a>
				</div>
				<div class="col-md-6 col-lg-4">
				</div>
				<div class="col-md-6 col-lg-4">  
					<div class="row container d-flex justify-content-center">
						<div class="template-demo mt-2"> 
							<button class="btn btn-outline-primary btn-icon-text"> 
								<span class="icon-apple mdi-36px"></span>
								<span class="d-inline-block text-left"> 
									<small class="font-weight-light d-block">Download on the</small> App Store 
								</span> </button> 
								<button class="btn btn-outline-success btn-icon-text"> 
									<span class="icon-android"></span>
									<span class="d-inline-block text-left"> 
										<small class="font-weight-light d-block">Get it on</small> Google Play 
									</span> </button> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row mb-5">
						<div class="col-md-6 col-lg-3">
							<div class="ftco-footer-widget mb-4">
								<h2 class="ftco-heading-2">Information</h2>
								<ul class="list-unstyled open-hours">
									<li class="d-flex"><a href="index.html"><span>Home</span></a></li><br>
									<li class="d-flex"><a href="blog.html"><span>Blog</span></a></li><br>
									<li class="d-flex"><a href="about.html"><span>About Us</span></a></li><br>
									<li class="d-flex"><a href="menu.html"><span>Menu</span></a></li><br>
									<li class="d-flex"><a href="contact.html"><span>Contact Us</span></a></li><br>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="ftco-footer-widget mb-4">
								<h2 class="ftco-heading-2">Top Items</h2>
								<ul class="list-unstyled open-hours">
									<li class="d-flex"><a href="#"><span>Pepperoni</span></a></li><br>
									<li class="d-flex"><a href="#"><span>Swiss Mushroom</span></a></li><br>
									<li class="d-flex"><a href="#"><span>Barbeque Chicken</span></a></li><br>
									<li class="d-flex"><a href="#"><span>Vegetarian</span></a></li><br>
									<li class="d-flex"><a href="#"><span>Ham & Cheese</span></a></li><br>
								</ul>
							</div>
						</div>	
						<div class="col-md-6 col-lg-3">
							<div class="ftco-footer-widget mb-4">
								<h2 class="ftco-heading-2">Others</h2>
								<ul class="list-unstyled open-hours">
									<li class="d-flex"><a href="#"><span>Checkout</span></a></li><br>
									<li class="d-flex"><a href="#"><span>Cart</span></a></li><br>
									<li class="d-flex"><a href="#"><span>Product</span></a></li><br>
									<li class="d-flex"><a href="#"><span>Locations</span></a></li><br>
									<li class="d-flex"><a href="#"><span>Legal</span></a></li><br>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="ftco-footer-widget mb-4">
								<h2 class="ftco-heading-2">Social Media</h2>
								<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-pinterest"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
								</ul><br><br><br>
							</div>
							<p id="p-tag">Sign up and get exclusive offers and coupon codes</p>
							<button class="btn btn-danger"><a href="{{route('register')}}">SIGN UP</a></button>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<a href="#"><span>Privacy Policy </span></a> 
							<a href="#" class="foot-poly"><span class="r-25"> Refund Policy </span></a>
							<a href="#" class="foot-poly"><span class="r-25"> Cookie Policy </span></a>
							<a href="#" class="foot-poly"><span class="r-25"> Terms & Conditions </span></a>
						</div>
						<div class="col">
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-12 text-left">

							<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script>
								<a>APV</a> All rights reserved 
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
							</div>
						</div>
					</div>
				</footer>


				<!-- loader -->
				<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

				<script src="js/jquery.min.js"></script>
				<script src="js/jquery-migrate-3.0.1.min.js"></script>
				<script src="js/popper.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/jquery.easing.1.3.js"></script>
				<script src="js/jquery.waypoints.min.js"></script>
				<script src="js/jquery.stellar.min.js"></script>
				<script src="js/owl.carousel.min.js"></script>
				<script src="js/jquery.magnific-popup.min.js"></script>
				<script src="js/aos.js"></script>
				<script src="js/jquery.animateNumber.min.js"></script>
				<script src="js/scrollax.min.js"></script>


				<script src="js/main.js"></script>
				<script src="../js/menu/search.js"></script>


			</body>

			</html>

			</html>

