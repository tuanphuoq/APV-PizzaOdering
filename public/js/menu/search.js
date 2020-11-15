$('#search').click(function() {
	var tag = $('#search-input').val();

	jQuery.ajax({
		url: '/menu/search',
		type: 'GET',
		data: {
		 	tag: tag
		},
		    success: function(response) {
		    console.log(response.data);
		    displaySearch(response.data);
		}
	});
	
	// $('#group-product').empty();
});

function displaySearch(arr) {
	$('#group-product').empty();
	if(arr == null) {
		var html = '<h3 class=text-danger>No Data</h3>';
		$('#group-product').append(html);
	} else {
		$.each(arr, function(index) {
			// var html = '<div class="col-md-12 col-lg-6 d-flex align-self-stretch">'+
			// 				'<div class="menus d-sm-flex ftco-animate align-items-stretch">'+
			// 					// '<div class="menu-img img order-md-last" style="background-image: url({{ asset(\\Storage::url('+arr[index]['image']+')) }});"></div>'+
			// 					// '<div class="menu-img img order-md-last" style="background-image: url("../storage/app/public/'+arr[index]['image']+'");"></div>'+
			// 					'<div class="text d-flex align-items-center">'+
			// 						'<div>'+
			// 							'<div class="d-flex">'+
			// 								'<div class="one-half">'+
			// 									// '<h3><a href="{{asset("")}}product-detail/'+arr[index]['id']+'">'+arr[index]['name']+'</a></h3>'+
			// 									'<h3><a>'+arr[index]['name']+'</a></h3>'+
			// 								'</div>'+
			// 								'<div class="one-forth">'+
			// 									'<span class="price">'+arr[index]['price']+'</span>'+
			// 								'</div>'+
			// 							'</div>'+
			// 							'<p><span>'+arr[index]['description']+'</span></p>'+
			// 							// '<p><a href="{{asset("")}}product-detail/'+arr[index]['id']+'" class="btn btn-primary">Order</a></p>'+
			// 							'<p><a class="btn btn-primary">Order</a></p>'+
			// 						'</div>'+
			// 					'</div>'+
			// 				'</div>'+
			// 			'</div>';

			var html = '<div class="col-lg-6 d-flex my-2" style="height: 100px;">'+
							'<img src="images/pizza/1.jpg" alt="" class="img-fluid" style="width: 20%;">'+
							'<h5 class="px-4" style="width:40%;">'+arr[index]['name']+'</h5>'+
							'<h5 class="px-2 text-center" style="width:10%;">'+arr[index]['price']+'$</h5>'+
							'<button>order</button>'+
						'</div>';

			// var html = '<div class="col-lg-12">'+arr[index]['name']+'</div>';
			$('#group-product').append(html);
		});
	}
}