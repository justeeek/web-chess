$(function(){

	$("#reg_btn").click(function(){	

		$.post("scripts/reg.php", 
		{"nickname": $("#nickname").val(), "password1": $("#password1").val(), "password2": $("#password2").val()}, 
		function(data){
			
			if (data == 'success'){
				alert ("Пользователь зарегистрирован");
			}
			else if (data == 'failed') {
				alert ("Регистрация прошла неуспешно");
			}
			
			else if (data == 'login') {
				alert ("Данный логин уже занят");
			}
			
			});				

	});


});