$(function(){

	$("#add_btn").click(function(){	
		$.post("scripts/AddMessage.php", 
		{"mes": $("#mes").val()}, 
		function(data){
			if (data){
				alert ("Сообщение отправленно");
			}
			else if (data == 'failed'){
				alert ("Ошибка");
			}
		});				

	});


});
