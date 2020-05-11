<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/cart.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#"><img class="logo-img" src="../images/logo.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="{{route('home')}}">{{__('store.menu_home')}}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{asset('')}}blog">{{__('store.menu_blog')}}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">{{__('store.menu_pages')}}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{asset('')}}menu">{{__('store.menu_menu')}}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">{{__('store.menu_location')}}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('contact')}}">{{__('store.menu_contact')}}</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<a href="{{asset('')}}cart" class="nav-links"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
				&nbsp;&nbsp;	
				<a href="#" class="nav-links"><i class="fa fa-search" aria-hidden="true"></i></a>
			</form>
		</div>
	</nav>
	<div class="sub-header">
		<div class="mask"></div>
		<h1 class="title-detail">{{__('store.cart')}}</h1>
		<div class="listing">{{__('store.home')}} / {{__('store.cart')}}</div>
	</div>
	<section class="section">
		<div class="container">

			<!-- Cart Table Start -->
			<table class="ct-responsive-table">
				<thead>
					<tr>
						<th class="remove-item"></th>
						<th>{{__('store.product')}}</th>
						<th>{{__('store.price')}}</th>
						<th>{{__('store.qty')}}</th>
						<th>{{__('store.total')}}</th>
					</tr>
				</thead>
				<tbody>
					@foreach(Cart::content() as $row)
					<tr id="div_{{$row->rowId}}">
						<td class="remove" >
							<span class="remove-items" rowId="{{$row->rowId}}"><i class="fa fa-times" aria-hidden="true"></i> </span>
						</td>
						<td data-title="Product">
							<div class="cart-product-wrapper">
								<img src="{{ asset('') }}storage/{{$row->options->image}}" >
								<div class="cart-product-body">
									<h6> <a href="#">{{$row->name}}</a> </h6>
									<p>{{$row->options->sizeName}} Inch</p>
									@if($row->options->toppingName != null)
									@foreach($row->options->toppingName as $value)
									<p>{{$value}}</p>
									@endforeach
									@endif
								</div>
							</div>
						</td>
						<td data-title="Price"> <strong>{{$row->price}}{{config('cart.unit')}}</strong> </td>
						<td class="quantity" data-title="Quantity">
							{{$row->qty}}
						</td>
						<td data-title="Total"> <strong>{{$row->options->realPrice*$row->qty}}{{config('cart.unit')}}</strong> </td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<!-- Cart Table End -->

			<!-- Coupon Code Start -->
			<div class="row">
				<div class="col-lg-5">
					<div class="form-group mb-0">
						<div class="input-group mb-0">
							<input type="text" class="form-control" placeholder="Enter Coupon Code" aria-label="Coupon Code">
							<div class="input-group-append">
								<button class="btn-custom shadow-none" type="button">{{__('store.apply')}}</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Coupon Code End -->

			<!-- Cart form Start -->
			<div class="row ct-cart-form">
				<div class="offset-lg-6 col-lg-6">
					<h4>{{__('store.cart')}} {{__('store.total')}}</h4>
					<table>
						<tbody>
							<tr>
								<th>{{__('store.subtotal')}}</th>
								<td>{{Cart::subtotal()}} {{config('cart.unit')}}</td>
							</tr>
							<tr>
								<th>{{__('store.tax')}}</th>
								<td> {{Cart::tax()}} {{config('cart.unit')}} <span class="small">({{config('cart.tax')}}{{__('store.percent')}})</span> </td>

							</tr>
							<tr>
								<th>{{__('store.total')}}</th>
								<td> <b>{{Cart::total()}} {{config('cart.unit')}}</b> </td>
							</tr>
						</tbody>
					</table>

					@if(count(Cart::content())!=0)
					<a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn-custom primary btn-block">{{__('store.process_check')}}</a>
					@endif

				</div>
			</div>
			<!-- Cart form End -->

		</div>
	</section>


	@if(Auth::user()==null)


	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header" >
					<h5 class="modal-title">Enter your information</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="POST">
						@csrf
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12 ml-auto" >
									<img class="img-modal" src="../images/tuantt/bg-email.jpg">
								</div>
								<div class="col-md-6 ml-auto">
									<label for="">First Name <span class="nope">*</span></label>
									<input type="text" class="form-control firstName" name="firstName" placeholder="First Name">	

								</div>
								<div class="col-md-6 ml-auto">
									<label for="">Last Name <span class="nope">*</span></label>
									<input type="text" class="form-control lastName" placeholder="Last Name">
								</div>
								<div class="col-md-12 ml-auto">
									<label for="">Company Name <span class="nope">*</span></label>
									<input type="text" class="form-control companyName" placeholder="Company Name">
								</div>
								<div class="col-md-6 ml-auto">
									<label for="">Street Address <span class="nope">*</span></label>
									<input type="text" class="form-control streetAddress" placeholder="Street Address">
								</div>
								<div class="col-md-6 ml-auto">
									<label for="">City <span class="nope">*</span></label>
									<input type="text" class="form-control city" placeholder="City">
								</div>
								<div class="col-md-6 ml-auto">
									<label for="">Email <span class="nope">*</span></label>
									<input type="text" class="form-control emailAddress" placeholder="Email Address">
								</div>
								<div class="col-md-6 ml-auto">
									<label for="">Phone Number <span class="nope">*</span></label>
									<input type="text" class="form-control phoneNumber" placeholder="Phone Number">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary btn-order">Order</button>

				</div>
			</div>
		</div>
	</div>
	@else
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header" >
					<h5 class="modal-title">Enter your information</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="POST">
						@csrf
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12 ml-auto" >
									<img class="img-modal" src="../images/tuantt/bg-email.jpg">
								</div>
								<div class="col-md-6 ml-auto">
									<label for="">First Name <span class="nope">*</span></label>
									<input type="text" class="form-control firstName" name="firstName" placeholder="First Name">	

								</div>
								<div class="col-md-6 ml-auto">
									<label for="">Last Name <span class="nope">*</span></label>
									<input type="text" class="form-control lastName" placeholder="Last Name">
								</div>
								<div class="col-md-12 ml-auto">
									<label for="">Company Name <span class="nope">*</span></label>
									<input type="text" class="form-control companyName" placeholder="Company Name" value="{{Auth::user()->company_name}}">
								</div>
								<div class="col-md-6 ml-auto">
									<label for="">Street Address <span class="nope">*</span></label>
									<input type="text" class="form-control streetAddress" placeholder="Street Address" value="{{Auth::user()->street_address}}">
								</div>
								<div class="col-md-6 ml-auto">
									<label for="">City <span class="nope">*</span></label>
									<input type="text" class="form-control city" placeholder="City" value="{{Auth::user()->city}}">
								</div>
								<div class="col-md-6 ml-auto">
									<label for="">Email <span class="nope">*</span></label>
									<input type="text" class="form-control emailAddress" placeholder="Email Address" value="{{Auth::user()->email}}">
								</div>
								<div class="col-md-6 ml-auto">
									<label for="">Phone Number <span class="nope">*</span></label>
									<input type="text" class="form-control phoneNumber" placeholder="Phone Number" value="{{Auth::user()->phone}}">
								</div>
							</div>
						</div>

					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary btn-order">Order</button>

				</div>
			</div>
		</div>
		</div>
	@endif

			
		
			


	<div class="footer">
		<div class="head-footer">
			<div class="group-app">
				<div class="footer-logo">
					<img src="../images/logo_header (1).png">
				</div>
				<div class="app-title">
					<span><a href=""><img class="play-store" src="../images/ggstore.PNG"></a><a href=""><img class="appstore" src="../images/appstore.PNG"></a></span>

				</div>
			</div>
			<div class="menu-footer">
				<div class="list-menu">
					<ul>
						<li class="main-title">{{__('store.info')}}</li>
						<li>{{__('store.menu_home')}}</li>
						<li>{{__('store.menu_blog')}}</li>
						<li>{{__('store.menu_pages')}} </li>
						<li>{{__('store.menu_menu')}}</li>
						<li>{{__('store.menu_contact')}}</li>
					</ul>
				</div>
				<div class="list-menu">
					<ul>
						<li class="main-title">{{__('store.top_item')}}</li>
						<li>{{__('store.menu_home')}}</li>
						<li>{{__('store.menu_blog')}}</li>
						<li>{{__('store.menu_pages')}} </li>
						<li>{{__('store.menu_menu')}}</li>
						<li>{{__('store.menu_contact')}}</li>
					</ul>
				</div>
				<div class="list-menu">
					<ul>
						<li class="main-title">{{__('store.other')}}</li>
						<li>{{__('store.menu_home')}}</li>
						<li>{{__('store.menu_blog')}}</li>
						<li>{{__('store.menu_pages')}} </li>
						<li>{{__('store.menu_menu')}}</li>
						<li>{{__('store.menu_contact')}}</li>
					</ul>
				</div>
				<div class="list-menu">
					<ul>
						<li class="main-title">{{__('store.social')}}</li>
						<li><span><i class="fa fa-facebook-official social b-fb" aria-hidden="true"></i> <i class="fa fa-pinterest-p social b-pr" aria-hidden="true"></i> <i class="fa fa-google-plus social b-gg" aria-hidden="true"></i> <i class="fa fa-twitter social b-tw" aria-hidden="true"></i></span></li>
						<li class="title-signup">{{__('store.title_signup')}}</li>
						<li><a class="btn-signup btn btn-danger text-white text-decoration-none" href="{{route('register')}}">{{__('store.sign_up')}}</a></li>
					</ul>
				</div>
			</div>	
			<div class="end-footer">
				<div class="end-app">
					<div class="footer-logo">
						<div>{{__('store.copy')}} <span style="color: red;">APV</span> {{__('store.allright')}}</div>
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


	<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script type="text/javascript" src="../js/message.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>