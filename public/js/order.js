$(document).on('click', '.btn-change', function(e){
	var id = $(this).attr('order-id');
	$('#id-order').text(id);
});
		
//button change state order record
$('.btn-state').click(function(e) {
	e.preventDefault();
	var state = $(this).attr('state');
	swal({
		title: sure,
		text: changeContent,
		icon: warning,
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				url : "order/state",
				type : 'get',
				data : {
					id : $('#id-order').text(),
					state : state
				},
				success:function(response){
					if (response.message == "true"){
						swal(changeSuccess, {
							icon: success,
						});
						setTimeout(function() {
							window.location.href = "/order";
						},500);
					}else{
						swal(changeError);
					}
				}
			});
		} else {
			swal(changeError);
		}
	});
});