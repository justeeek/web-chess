$(function(){

	$.post("scripts/getAvatar.php", {}, function(data){
		if (data != 0) {
			data = JSON.parse(data);
			for (var i = 0; i < data.length; i++){
				var users = data[i];
				$(".foto").css("background-image", 'url("images/' + users.avatar + '.jpg")');
			}
		}
	});
});






