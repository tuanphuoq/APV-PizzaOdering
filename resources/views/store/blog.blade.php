<!DOCTYPE html>
<html>
<head>
	<title>{{__('store.menu_blog')}}</title>
	<link rel="stylesheet" type="text/css" href="../css/blog.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
	<section class="container blog">
		<section class="header">
			<section class="hotline">
				<i class="fa fa-phone">{{__('store.phone_number')}} </i>
			</section>
			<section class="oder">
				<p><a class="order-online" href="{{asset('')}}layouts.menu" >{{__('store.order_online')}}</a></p>
			</section>
		</section>

		<section class="banner">
			  <img class="img-banner" src="../images/blog/pizzabox.jpg" alt="Snow">
			  <div class="bottom-left">
			  	<h3 class="title-banner">{{__('store.blog_grid')}}</h3><br>
			  	<p class="menu-grid"><a href="{{route('home')}}" >{{__('store.home')}}</a>
			  	 / <a href="#" >{{__('store.menu_blog')}}</a> / {{__('store.blog_grid')}}</p>
			  </div>
			  <div class="top-left">
			  	<img class="img-topleft" src="../images/blog/logo.png" >
			  </div>
			  <div class="top-right">
			  		<a href="{{asset('')}}cart" ><i class='fas fa-shopping-cart'></i></a>
			  		<a href="#" ><i class="fa fa-search" ></i></a>
			  </div>
			  <div class="centered">
			  	<ul>
			  		<li>
			  			<a href="{{route('home')}}" class="link-item" >{{__('store.menu_home')}}</a>
			  		</li>
			  		<li>
			  			<a href="{{asset('')}}blog" class="link-item" >{{__('store.menu_blog')}}</a>
			  		</li>
			  		<li>
			  			<a href="#" class="link-item">{{__('store.menu_pages')}}</a>
			  		</li>
			  		<li>
			  			<a href="{{asset('')}}menu" class="link-item">{{__('store.menu_menu')}}</a>
			  		</li>
			  		<li>
			  			<a href="#" class="link-item" >{{__('store.menu_location')}}</a>
			  		</li>
			  		<li>
			  			<a href="{{route('contact')}}" class="link-item" >{{__('store.menu_contact')}}</a>
			  		</li>
			  	</ul>
			  </div>
		</section>

		<section class="content">
			<section class="row">
				<section class="col">
					@if(!empty($blogs['posts']))
						@foreach($blogs['posts'] as $blog)
						<section class="box" >
							<h3 >{{$blog->title}}</h3>
							<i class="fa fa-calendar-o"> {{$blog->created_at}}</i>
						
							<img class="img-post" src="../images/blog/pizza1.jpg">
							<p class="short-desc">{{$blog->short_desc	}}</p>
							<a  href="{{asset('')}}blog/{{$blog->id}}"><p class="link-post" >{{__('store.read')}}</p></a>
						</section>
						@endforeach	
						{{$blogs['posts']->links()}}
					@endif
				</section>
				
				<section class="col">
					<h3 class="search-p" >{{__('store.search_post')}}</h3>
					<div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Search">
                </div>
					<h3 class="search-p">{{__('store.recent')}}</h3>
					@if(isset($blogs['posts']))
						@foreach($blogs['newPost'] as $blog)
						<section class="box1">
							<img class="img-post-v" src="../images/blog/image_1.jpg">
							<h6><a href="{{asset('')}}blog/{{$blog->id}}">{{$blog->title}}</a> </h6>
							 <div><a href="#" class="icon-cal"><span class="fa fa-calendar-o"></span>{{$blog->created_at}}</a></div>
						</section>
						@endforeach
					@endif

				</section>
				
				
			</section>
			
		</section>

		<section class="footer">
			<section class="ft1">
				<h4>{{__('store.logo')}}</h4>
				<ul class="nav flex-column">
				<li class="nav-item">
			      <span>{{__('store.info')}}</span>
			    </li>			
			    <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.home')}}</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.menu_blog')}}</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.menu_location')}}</a>
			    </li>
			     <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.menu_menu')}}</a>
			    </li>
			     <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.menu_contact')}}</a>
			    </li>
			  </ul>
			  <ul class="nav flex-column">
				<li class="nav-item">
			      <span>{{__('store.info')}}</span>
			    </li>			
			    <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.home')}}</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.menu_blog')}}</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.menu_location')}}</a>
			    </li>
			     <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.menu_menu')}}</a>
			    </li>
			     <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.menu_contact')}}</a>
			    </li>
			  </ul>
			  <ul class="nav flex-column">
				<li class="nav-item">
			      <span>{{__('store.info')}}</span>
			    </li>			
			    <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.home')}}</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.menu_blog')}}</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.menu_location')}}</a>
			    </li>
			     <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.menu_menu')}}</a>
			    </li>
			     <li class="nav-item">
			      <a class="nav-link" href="#" >{{__('store.menu_contact')}}</a>
			    </li>
			  </ul>
			</section>
			<section class="ft2">
				<img src="../images/blog/ft2.png" class="img-ft">
				<img src="../images/blog/ft1.png" class="img-ft2">

				<h4 class="social" >{{__('store.social')}}</h4>
				<img  class="img-icon" src="../images/blog/fb.png" >
				<img class="img-icon"  src="../images/blog/pin.png" >
				<img class="img-icon"  src="../images/blog/Google.png" >
				<img class="img-icon"  src="../images/blog/tw.png">

				<p class="title-signup">{{__('store.title_signup')}}</p>
				<a type="button" class="btn btn-danger text-white text-decoration-none" href="{{route('register')}}">{{__('store.sign_up')}}</a>
			</section>
			
	        <div class="row">
          <p class="copy">
		  {{__('store.copy')}} &copy;
		  <a >APV</a> {{__('store.allright')}} 
		  </p>
 
        </div>
		</section>
	</section>

</body>
</html>