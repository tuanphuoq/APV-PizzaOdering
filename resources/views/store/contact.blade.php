<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pizza Order Online - Contact Us</title>
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
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
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
							<li class="nav-item ">
								<a class="nav-link" href="{{route('home')}}">Home Pages</a>
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
									<li><a class="dropdown-item" href="{{asset('')}}menu">Menu 2</a></li>	
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Locations</a>
							</li>

							<li class="nav-item active">
								<a class="nav-link" href="{{route('contact')}}">Contact Us<span class="sr-only">(current)</span></a>
							</li>
							
						</ul>
						<!-- menu right -->
						<ul class="navbar-nav ml-md-auto">
							<li class="nav-item btn btn-danger btn-order">
								<a class="nav-link text-white font-weight-bold text-uppercase" href="{{asset('')}}layouts.menu">order online</a>
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

	<!-- contact -->
	<div class="container-fluid contact">
		<div class="row row-contact">
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="mapping embed-responsive embed-responsive-16by9">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3993006898695!2d105.78139631424513!3d21.016703193567295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ab43c0c4db%3A0xdb6effebd6991106!2sKeangnam%20Hanoi%20Landmark%20Tower!5e0!3m2!1svi!2s!4v1583980570335!5m2!1svi!2s" width="" height="" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="embed-responsive-item"></iframe>
					<button class="btn btn-danger text-white"><a href="https://www.google.com/maps/place/Keangnam+Hanoi+Landmark+Tower/@21.0166982,105.783585,15z/data=!4m5!3m4!1s0x0:0xdb6effebd6991106!8m2!3d21.0166982!4d105.783585?hl=vi" class="text-white text-decoration-none" target="blank">View in Google map</a></button>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="row info-us">
					<div class="col-md-6">
						<div class="find-us bg-light">
							<ul>
								<li class="text-body">
									<h5 class="text-capitalize font-weight-bold">find us</h5>
								</li>
								<li class="text-dark text-capitalize">445 Mount Eden Road</li>
								<li class="text-dark text-capitalize">mount eden</li>
								<li class="text-dark text-capitalize">21 greens road rd 21 ruawai</li>
								<li class="text-dark text-capitalize">059</li>
								<li class="text-dark text-capitalize">+0123 456 789</li>
								<li class="text-dark text-capitalize">info@example.com</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="opening bg-light">
							<ul>
								<li class="text-body">
									<h5 class="text-capitalize font-weight-bold">opening hours</h5>
								</li>
								<li class="text-dark text-capitalize">mon - web : 8:00am - 8:00pm</li>
								<li class="text-dark text-capitalize">thu : 8:00am - 5:00pm</li>
								<li class="text-dark text-capitalize">fri : 8:00am - 8:00pm</li>
								<li class="text-dark text-capitalize">sat - sun : 8:00am - 2:00pm</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row send-us">
					<div class="form-send-us">
						<h3 class="font-weight-bold text-body">Send us a Messages</h3>
						<h6 class="text-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
						<form>
							<!-- @csrf -->
							<div class="form-group  d-flex justify-content-between input-name">
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Frist Name">
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Last Name">
							</div>
							<div class="form-group input-email">
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
							</div>
							<div class="form-group input-subject">
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Subject">
							</div>
							<div class="form-group input-messages">
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Type your message"></textarea>
							</div>
							<button type="submit" class="btn btn-danger text-white font-weight-bold">Send Message</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /contact -->

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
							<button class="btn btn-click btn-danger text-uppercase"><a href="{{route('register')}}" class="text-white text-decoration-none">sign up</a></button>
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

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>