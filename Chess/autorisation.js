$(function(){

	$("#login_btn").click(function(){	

		$.post(
			"scripts/login.php", 
			{"nickname": $("#nickname").val(), "password": $("#password").val()}, 
			function(data){
				if (data != 0) {
					window.location.href="main.html"; 
					
				}
				else {
					alert ("Неверное имя пользователя или пароль");
				}
			});				

	});


});