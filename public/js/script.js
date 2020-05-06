$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});
$(".qty span").click(function(){
	let qty = $(this).closest('.qty').find('input');
	let qtyVal = parseInt(qty.val());
	if($(this).hasClass('qty-add')){
		qty.val(qtyVal + 1);
	}else{
		return qtyVal > 1 ? qty.val(qtyVal - 1) : 0;
	}
});

let priceProduct = parseFloat($('.price-hidden').val());
let priceSize = parseFloat($('.priceSize-hidden').val());;
let priceTopping = 0;


$('.size-value').click( function(){
	$('.topping-check').removeAttr("disabled");
	let priceSize = parseFloat($(this).val());
	$('.priceSize-hidden').val(priceSize);
	let price = parseFloat(priceSize+priceProduct+priceTopping);
	$('.product-price-detail').text(price+init); //@todo
	$('.total-price').val(price);
});

$('.topping-check').click( function(){
	priceSize = parseFloat($('.priceSize-hidden').val());
	let $check = $('.topping-check').change(function () {
		priceTopping = 0;
		$check.filter(':checked').each(function () {
			priceTopping += parseFloat($(this).val());
		})
		let price = parseFloat(priceSize+priceProduct+priceTopping);
		$('.product-price-detail').text(price+init); //@todo
		$('.total-price').val(price);
	});
});
$('.btn-cart').click(function(e){
	
	e.preventDefault();
	var total = $('.total-price').val();
	var qty = $('.product-qty').val();
	var sizePrice = $('.priceSize-hidden').val();
	var product_id = $('.product-id-hidden').val();
	$.ajax({
		url:'/cart/add',
		type:'POST',
		data:{
			product_id: product_id,
			quantity: qty,
			product_price: priceProduct,
			size_price: sizePrice,
			total: total,
			toppings: $('.topping-check:checked').serializeArray(),
			_token: $('#token').val()
		},
		success:function(response){
			swal(messageAdd, titleAdd, success);
		},
		error:function(jqXHR,textStatus,errorThrown){
			swal(errorAdd, "", warning);
		} 

	});
	
});

$('.remove-items').click(function(e){
	
	var id=$(this).attr('rowId');
	alert
	swal({
		title: titleRemove,
		text: textRemove,
		icon: warning,
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type: 'get',
				url: "/cart/"+id,
				success: function(response){
					$('#div_'+id).remove();
					window.location.href = '/cart';
				}
			}); 
			swal(deleteRemove, {
				icon: success,
			});
		} else {
			swal(cancelRemove);
		}
	});

});
$('.btn-order').click(function(e){
	e.preventDefault();
	$.ajax({
		type:'POST',
		url:'/order/add',
		data:{
			firstName:$('.firstName').val(),
			lastName:$('.lastName').val(), 
			company_name: $('.companyName').val(),
			street_address: $('.streetAddress').val(),
			city: $('.city').val(),
			email: $('.emailAddress').val(),
			phone:$('.phoneNumber').val(),
			_token: $('#token').val(),
		},
		success:function(data){
			toastr.success(orderSuccess);
			setTimeout(function(){
				window.location.href = "/cart";
			},100);

		},
		error: function(xhr, status, error) {
			var res = JSON.parse(xhr.responseText)
			if(res.errors.firstName!==undefined){
				toastr.error(res.errors.firstName[0]);
			}
			if(res.errors.lastName!==undefined){
				toastr.error(res.errors.lastName[0]);
			}
			if(res.errors.company_name!==undefined){
				toastr.error(res.errors.company_name[0]);
			}
			if(res.errors.street_address!==undefined){
				toastr.error(res.errors.street_address[0]);
			}
			if(res.errors.city!==undefined){
				toastr.error(res.errors.city[0]);
			}
			if(res.errors.email!==undefined){
				toastr.error(res.errors.email[0]);
			}
			if(res.errors.phone!==undefined){
				toastr.error(res.errors.phone[0]);
			}
		}

	});
});


