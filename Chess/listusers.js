$(function(){

	$.post("scripts/allusers.php", {}, function(data){
		data = JSON.parse(data);
		for (var i = 0; i < data.length; i++){
			var users = data[i];
			$(".users").text(users.nickname);
		};

	});	


});