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

	$.ajax({
		url: "/monopoly-monitor/api/api.php",
		data: {
			callback: 'get_user',
			request: JSON.stringify(requestData)
		},
		dataType: 'json',
		type: 'POST', 
		success: function(result){
			$('.user-name').html(result.name);
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

	$('.register-submit').off().on('click', function(){
		var requestData = {};
		requestData = {
			name: $('#register-name').val(),
			pass: $('#register-pass').val(),
		}
		$.ajax({
			url: "/monopoly-monitor/api/api.php",
			data: {
				callback: 'register_user',
				request: JSON.stringify(requestData)
			},
			dataType: 'json',
			type: 'POST', 
			success: function(result){
				window.location.href = "#login";
			}
		});
	});

	$('.login-submit').off().on('click', function(){
		var requestData = {};
		requestData = {
			name: $('#login-name').val(),
			pass: $('#login-pass').val(),
		}
		$.ajax({
			url: "/monopoly-monitor/api/api.php",
			data: {
				callback: 'login_user',
				request: JSON.stringify(requestData)
			},
			dataType: 'json',
			type: 'POST', 
			success: function(result){
				if(result == 'logged_in'){
					window.location.href = "#main-menu";
				}
			}
		});
	});
});