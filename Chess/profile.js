$(function(){

	$.post("scripts/getprofile.php", {}, function(data){
		if (data != 0) {
			data = JSON.parse(data);
			for (var i = 0; i < data.length; i++){
				var users = data[i];
				$(".imya").text(users.nickname);
				if(users.last_online) {
					var last_online = new Date(users.last_online);
					if(Date.now() - 1000 * 10 * 60 < last_online.getTime())
						$(".online").text('online')
					else
						$(".online").text('был в сети: ' + users.last_online)
				}
				$(".score").text(users.rating);
				$(".osebe").text(users.osebe);
				$(".country").text(users.country);
				$(".count").text(users.count);
				$(".wons").text(users.wons);
				$(".loss").text(users.count - users.wons);
				$(".procent").text(Math.round(users.wons / users.count * 100) + "%");
			}
		}
	});
});






