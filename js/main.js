$(document).ready(function(){

   $.ajax({
   	url: "/monopoly-monitor/api/api.php",
   	data: {
   		callback: 'get_current_balance',
   		request: {
   			user:'Test'
   		}
   	},
   	dataType: 'json',
   	type: 'POST', 
   	success: function(result){
   		$('.amount-money').html(result)
    }
   });

});