var startDay;
var endDay;
var today = new Date();
var todayString = today.getFullYear()+"-"+(today.getMonth()+1)+"-"+today.getDate();
var tomorrowString = today.getFullYear()+"-"+(today.getMonth()+1)+"-"+(today.getDate()+1);
$(function() {
$('input[name="daterange"]').daterangepicker({
    opens: 'top-right',
    "showDropdowns": true,
    format : 'YYYY/mm/dd'
    }, function(start, end, label) {
        startDay = start.format('YYYY-MM-DD');
        endDay = end.format('YYYY-MM-DD');               
    });
});

$('#show-statistic').click(function() {
	if(startDay == null && endDay == null) {
		startDay = todayString;
		endDay = tomorrowString;
	}
	$.ajax({
		url: '/statistic/order',
		type: 'GET',
		data: {
			start: startDay,
			end: endDay
		},
		success : function(response) {
			$('#statistic-body').empty();
			var data = response.orders;
			if (data == null) {
				var html = "<tr><td colspan="+"10"+" align="+"center"+">No data !</td></tr>";
				$('#statistic-body').append(html);
			}
			$.each(data, function(index) {
				var html = '<tr height="40px">'+
								'<th scope="row">'+ data[index]['id'] +'</th>'+
								'<td>'+ data[index]['name_user'] +'</td>'+
								'<td>'+ data[index]['phone'] +'</td>'+
								'<td>'+ data[index]['address'] +'</td>'+
								'<td>'+ data[index]['name_product'] +'</td>'+
								'<td>'+ data[index]['name_size'] + '</td>'+
								'<td>'+ data[index]['topping'] +'</td>'+
								'<td class="text-center">'+ data[index]['quantity'] +'</td>'+
								'<td>'+ data[index]['total'] +'$</td>'+
								'<td>'+ data[index]['state'] +'</td>'+
							'</tr>';
				$('#statistic-body').append(html);
			});
		}
	})	
})