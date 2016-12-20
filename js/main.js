$(document).ready(function(){

	var requestData = {
		user : 1,
		session: 1
	};

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

	//DISABLE THIS WHEN NOT DEBUGGGING
	var debug = true;
	if(!debug){
		var requestData = {
			from: 2,
			to: 1,
			amount: 5000,
			session: 1
		};
		$.ajax({
			url: "/monopoly-monitor/api/api.php",
			data: {
				callback: 'transfer_balance_player',
				request: JSON.stringify(requestData)
			},
			dataType: 'json',
			type: 'POST', 
			success: function(result){
				console.log('Transferred');
			}
		});
	}
});