$(function(){

	$.post("scripts/getFriend.php", {}, function(data){
		if (data != 0) {
            console.log(data);
			data = JSON.parse(data);
			console.log(data);
			for (var i = 0; i < data.length; i++){
				var users = data[i];
				var list = $("#structure .list").clone(true);
                $(".table").append(list);
                list.find(".friends").text(users.nickname);
			}
		}
	});
});






