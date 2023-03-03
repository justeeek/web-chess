$(function(){

	$("#save").click(function(){	

		$.post(
			"scripts/createprofile.php", 
			{"osebe": $("#osebe").val(), "country": $("#country").val()}, 
			function(data){
				
			});				

	});


});
