$(document).ready(function(){

	var requestData = {
		user: 1,
		session: 1
	}
	$.ajax({
		url: "/monopoly-monitor/api/api.php",
		data: {
			callback: 'get_current_balance',
			request: JSON.stringify(requestData)
		},
		dataType: 'json',
		type: 'POST', 
		success: function(result){
   		$('.amount-money').html(result.balance);
   	}
   });

});