$(document).ready(function () {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	//button delete product
	$('.btn-del').click(function(e) {
		e.preventDefault();
		var id = $(this).attr('data-id');
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this product record!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					url : "product/delete/"+id,
					type : 'post',
					success:function(){
						setTimeout(function() {
							window.location.href = "/product";
						},300);
					}
				});
				swal("Poof! Your imaginary file has been deleted!", {
					icon: "success",
				});
			} else {
				swal("Your product record is safe!");
			}
		});
	});
})