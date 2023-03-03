$(function(){

	$.post("scripts/auth.php", {}, function(data){
		if (data != 0) {
			data = JSON.parse(data);
			window.location.href="main.html";
		}
	});
});