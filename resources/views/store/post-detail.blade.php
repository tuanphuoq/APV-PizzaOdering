<!DOCTYPE html>
<html>
<head>
	<title>{{__('store.menu_blog')}}</title>
	<link rel="stylesheet" type="text/css" href="../css/post.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
	<section class="container blog" >
		<section class="header">
			<section class="hotline">
				<i class="fa fa-phone"> {{__('store.phone_number')}}</i>
			</section>
			<section class="oder">
				<p><a class="order-online" href="#" >{{__('store.order_online')}}</a></p>
			</section>
		</section>

		<section class="banner">
			<img class="img-banner" src="../images/blog/pizzabox.jpg" alt="Snow" >
			<div class="bottom-left">
				<h3 class="title-banner">{{$post->title}}</h3><br>
				<a href="#"><span class="fa fa-calendar-o" style=""> {{$post->created_at}} </span></a>
				
				
			</div>
			<div class="top-left">
				<img class="img-left" src="../images/blog/logo.png" >
			</div>
			<div class="top-right">
				<a href="#" ><i class='fas fa-shopping-cart' ></i></a>
				<a href="#" ><i class="fa fa-search" ></i></a>
			</div>
			<div class="centered">
				<ul>
					<li>
						<a  class="link-item" href="#" >{{__('store.menu_home')}}</a>
					</li>
					<li>
						<a  class="link-item" href="#" >{{__('store.menu_blog')}}</a>
					</li>
					<li>
						<a  class="link-item" href="#" >{{__('store.menu_pages')}}</a>
					</li>
					<li>
						<a  class="link-item" href="#" >{{__('store.menu_menu')}}</a>
					</li>
					<li>
						<a  class="link-item" href="#" >{{__('store.menu_location')}}</a>
					</li>
					<li>
						<a class="link-item"  href="#" >{{__('store.menu_contact')}}</a>
					</li>
				</ul>
			</div>
		</section>

		<section class="content">
			<section class="row">
				<section class="col-8">
					
					<h2 class="mb-3" >{{$post->title}}</h2>
					<p>{{$post->short_desc}}</p>
					<p>
						<img class="img-post" src="../images/blog/pizza4.jpg" alt="" >
					</p>
					<p>{{$post->long_desc}}</p>
					<div class="comment-form-wrap pt-5">
						<h3 class="mb-5 h4 font-weight-bold" >{{__('store.leave_cmt')}}
						</h3>
						<form action="#" class="p-4 p-md-5 ">
							<p>{{__('store.email_address')}}</p>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<input type="text" class="form-control" id="name" placeholder="Full Name*">
									</div></div>
									<div class="col">
										<div class="form-group">
											<input type="email" class="form-control" id="email" 
											placeholder="Email Address*">
										</div></div>
									</div>
									<div class="form-group">
										<textarea name="" id="message" cols="30" rows="10" class="form-control"  placeholder="Type your comment...."></textarea>
									</div>
									<div class="form-group">
										<input type="submit" value="Post Comment" class="btn py-3 px-4 btn-danger" >
									</div>

								</form>
							</div><br><br>	
							
						</section>	
						<section class="col-4">
							<h3 >{{__('store.search_post')}}</h3>
							<div class="form-group">
								<span class="icon icon-search"></span>
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<h3 >{{__('store.recent')}}</h3>
							@foreach($data['newPost'] as $blog)
							<section class="box1">
								<img class="img-box" src="../images/blog/image_1.jpg" >
								<h6><a href="{{asset('')}}blog/{{$blog->id}}">{{$blog->title}}</a> </h6>
								<div><a href="#" class="link-p" ><span class="fa fa-calendar-o"></span>{{$blog->created_at}}</a></div>
							</section>
							@endforeach
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
						<img src="../images/blog/ft2.png" class="img-ft" style="">
						<img src="../images/blog/ft1.png" class="img-ft2" style="">

						<h4 class="social" >{{__('store.social')}}</h4>
						<img  class="img-icon" src="../images/blog/fb.png" >
						<img class="img-icon"  src="../images/blog/pin.png" >
						<img class="img-icon"  src="../images/blog/Google.png" >
						<img class="img-icon"  src="../images/blog/tw.png">

						<p class="title-signup">{{__('store.title_signup')}}</p>
						<button type="button" class="btn btn-danger">{{__('store.sign_up')}}</button>
					</section>
					
					<div class="row">
						<p class="copy" style="">
							{{__('store.copy')}} &copy;
							<a >APV</a> {{__('store.allright')}} 
						</p>
						
					</div>
				</section>
			</section>

		</body>
		</html>