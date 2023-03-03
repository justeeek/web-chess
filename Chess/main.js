$(function(){

	$.post("scripts/auth.php", {}, function(data){
		console.log(data);
		if (data != 0) {
			data = JSON.parse(data);
			console.log(data);
			$(".imya").text(data.user_nickname);
            $(".score").text(data.user_rating);
		}
	});
});






