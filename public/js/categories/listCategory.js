$(document).ready(function () {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	//button delete categoory
	$('.btn-del').click(function(e) {
		e.preventDefault();
		var id = $(this).attr('id');
		swal({
			title: messageConfirm,
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					url : "category/delete/"+id,
					type : 'post',
					success:function(){
						setTimeout(function() {
							window.location.href = "/category";
						},300);
					}
				});
				swal(deleteSucces, {
					icon: success,
				});
			} else {
				swal(cancelDelete);
			}
		});
	});
})