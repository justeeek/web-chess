$(function(){

	$("#outload").click(function(){	

		$.post(
			"scripts/outload.php", {}, 
			function(data){
				if (data == 0){
					window.location.href="autorisation.html";
				}
			});				

	});
});