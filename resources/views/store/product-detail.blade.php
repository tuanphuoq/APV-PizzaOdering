<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Product Detail</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/pr1.css">

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
		<h1 class="title-detail">{{__('store.name_page')}}</h1>
		<div class="listing">{{__('store.listing')}}</div>
	</div>
	<div class="content">
		<div class="rows">
			<div class="rows-left">
				<img class="img-product" src="{{ asset(\Storage::url($data['product']->image)) }}">
			</div>
			<div class="rows-right">
				<h1 class="product-name">{{$data['product']->name}}</h1>
				<span class="rate"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> </span>
				
				<h3 class="product-price-detail"></h3>
				<input type="hidden" class="price-hidden" value="{{$data['product']->price}}">
				<div class="product-info">{{$data['product']->description}}</div>
				<div class="customize">
					<div class="customize-size">
						<span class="title-qty">{{__('store.size')}}</span>
						<div>
							@foreach($data['sizes'] as $value)
							<button class="size-value" value="{{$value->price}}">{{$value->name}}"</button>
							@endforeach
							
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="customize-variation-wrapper">
								<h5>{{__('store.topping')}}</h5>
								<div class="customize-variation-item" data-price="1.00">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="cheeseMozarella1">
										<label class="custom-control-label" for="cheeseMozarella1">{{__('store.mozarella')}}</label>
									</div>
									<span>{{__('store.default_price')}}</span>
								</div>
								<div class="customize-variation-item" data-price="1.25">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="cheeseCheddar1">
										<label class="custom-control-label" for="cheeseCheddar1">{{__('store.cheddar')}}</label>
									</div>
									<span>{{__('store.default_price')}}</span>
								</div>
								<div class="customize-variation-item" data-price="3.75">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="cheeseGruyer1">
										<label class="custom-control-label" for="cheeseGruyer1">{{__('store.gruyere')}}</label>
									</div>
									<span>{{__('store.default_price')}}</span>
								</div>
								<div class="customize-variation-item" data-price="0.25">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="cheeseBlueCheese1">
										<label class="custom-control-label" for="cheeseBlueCheese1">{{__('store.blue_chesse')}}</label>
									</div>
									<span>{{__('store.default_price')}}</span>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-12">
							<div class="customize-variation-wrapper">

								<h5>{{__('store.topping')}}</h5>
								<div class="customize-variation-item" data-price="1.00">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="cheeseMozarella1">
										<label class="custom-control-label" for="cheeseMozarella1">{{__('store.mozarella')}}</label>
									</div>
									<span>{{__('store.default_price')}}</span>
								</div>
								<div class="customize-variation-item" data-price="1.25">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="cheeseCheddar1">
										<label class="custom-control-label" for="cheeseCheddar1">{{__('store.cheddar')}}</label>
									</div>
									<span>{{__('store.default_price')}}</span>
								</div>
								<div class="customize-variation-item" data-price="3.75">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="cheeseGruyer1">
										<label class="custom-control-label" for="cheeseGruyer1">{{__('store.gruyere')}}</label>
									</div>
									<span>{{__('store.default_price')}}</span>
								</div>
								<div class="customize-variation-item" data-price="0.25">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="cheeseBlueCheese1">
										<label class="custom-control-label" for="cheeseBlueCheese1">{{__('store.blue_chesse')}}</label>
									</div>
									<span>{{__('store.default_price')}}</span>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="customize-variation-wrapper">
								<h5>{{__('store.topping')}}</h5>
								@foreach($data['topping'] as $value)
								<div class="customize-variation-item">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" name="topping" disabled="true" class="custom-control-input topping-check" id="topping-{{$value->id}}" value="{{$value->price}}">
										<label class="custom-control-label" for="topping-{{$value->id}}">{{$value->name}}</label>
									</div>
									<span>+ {{$value->price}} {{__('store.init')}}</span>
								</div>
								@endforeach
								
							</div>
						</div>

						<div class="col-lg-6 col-12">
							<div class="customize-variation-wrapper">
								<h5>{{__('store.topping')}}</h5>
								<div class="customize-variation-item" data-price="1.00">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="cheeseMozarella1">
										<label class="custom-control-label" for="cheeseMozarella1">{{__('store.mozarella')}}</label>
									</div>
									<span>{{__('store.default_price')}}</span>
								</div>
								<div class="customize-variation-item" data-price="1.25">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="cheeseCheddar1">
										<label class="custom-control-label" for="cheeseCheddar1">{{__('store.cheddar')}}</label>
									</div>
									<span>{{__('store.default_price')}}</span>
								</div>
								<div class="customize-variation-item" data-price="3.75">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="cheeseGruyer1">
										<label class="custom-control-label" for="cheeseGruyer1">{{__('store.gruyere')}}</label>
									</div>
									<span>{{__('store.default_price')}}</span>
								</div>
								<div class="customize-variation-item" data-price="0.25">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="cheeseBlueCheese1">
										<label class="custom-control-label" for="cheeseBlueCheese1">{{__('store.blue_chesse')}}</label>
									</div>
									<span>{{__('store.default_price')}}</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="atc-form">
					<div class="form-group">
						<label class="title-qty">{{__('store.quantity')}}</label>
						<div class="qty">
							<span class="qty-subtract"><i class="fa fa-minus"></i></span>
							<input class="product-qty" type="text" name="qty" value="1" readonly>
							<span class="qty-add"><i class="fa fa-plus"></i></span>
						</div>
					</div>
					<button  name="button" class="btn-custom secondary btn-cart"> {{__('store.order')}} <i class="fa fa-shopping-cart"></i> </button>
				</div>
				<ul class="product-meta">
					<li>
						<span>{{__('store.category')}} </span>
						<div class="product-meta-item">
							@if(isset($data['category']))
							@foreach($data['category'] as $value)
							<a href="#">{{$value}}, </a>
							@endforeach
							@endif
						</div>
					</li>
					<li>
						<span>{{__('store.tag')}} </span>
						<div class="product-meta-item">
							<a href="#">{{$data['product']->tag}}</a>,
							
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="section pt-0">
			<div class="container">
				<div class="product-additional-info">
					<ul class="nav" id="bordered-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="tab-product-desc-tab" data-toggle="pill" href="#tab-product-desc" role="tab" aria-controls="tab-product-desc" aria-selected="true">{{__('store.description')}}</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="tab-product-reviews-tab" data-toggle="pill" href="#tab-product-reviews" role="tab" aria-controls="tab-product-reviews" aria-selected="false">{{__('store.reviews')}} </a>
						</li>
					</ul>
					<div class="tab-content" id="bordered-tabContent">
						<div class="tab-pane fade show active" id="tab-product-desc" role="tabpanel" aria-labelledby="tab-product-desc-tab">
							<h4 class="title-desc">{{__('store.description')}}</h4>
							{{$data['product']->description}}
						</div>


					</div>
				</div>

			</div>
		</div>
		<div class="section section-padding related-products pt-0">
			<div class="container">
				<h3>{{__('store.also')}}</h3>

				<div class="row menu-v2">
					
					@foreach($maybe as $value)
					<div class="col-lg-4 col-md-6">
						<div class="product">
							<a class="product-thumb" href="{{asset('')}}product-detail/{{$value['id']}}" href=""> <img src="{{ asset(\Storage::url($value['image'])) }}" alt="menu item"> </a>
							<div class="product-body">
								<div class="product-desc">
									<h4> <a href="{{asset('')}}product-detail/{{$value['id']}}">{{$value['name']}}</a> </h4>
									<p class="p1">{{$value['description']}}...</p>
									<a href="{{asset('')}}product-detail/{{$value['id']}}" class="btn-custom light btn-sm shadow-none" data-toggle="modal" data-target="#customizeModal"> {{__('store.custom')}}  <i class="fa fa-plus"></i> </a>
								</div>
								<div class="product-controls">
									<p class="product-price">{{$value['price']}}{{__('store.init')}}</p> {{-- @todo --}}
									<a href="{{asset('')}}product-detail/{{$value['id']}}" class="order-item btn-custom btn-sm shadow-none ">{{__('store.order')}} <i class="fa fa-shopping-cart"></i> </a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

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
					<li><button class="btn-signup" >{{__('store.sign_up')}}</button></li>
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
<input type="hidden" class="priceSize-hidden" value=""> 
<input type="hidden" class="priceTopping-hidden" value=""> 
<input type="hidden" class="product-id-hidden" value="{{$data['product']->id}}">
<input type="hidden" class="total-price">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" src="../js/message.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>