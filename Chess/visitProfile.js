$(function Visit(){

    $(".name").click(function(){	
    
    var myid = $(this).attr("myid");
    $(".log2").css("display", "none");
    $(".games").css("display", "block");
    $(".avatar").css("display", "block");
    $(".log").css("display", "block");
    $(".back").css("display", "block");
        console.log(myid);
        $.post("scripts/visitProfile.php", {"myid": myid}, function(data){

            console.log(data);
            data = JSON.parse(data);
            console.log(data);
            for (var i = 0; i < data.length; i++){
                var users = data[i];
                console.log(users);
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
                $(".foto").css("background-image", 'url("images/' + users.avatar + '.jpg")');
            }
	    });
    });
});

$(function(){

    $(".name").click(function(){	
        var myid = $(this).attr("myid");
        $.post("scripts/visitFriend.php", {"myid": myid}, function(data){
            if (data != 0) {

                data = JSON.parse(data);
                for (var i = 0; i < data.length; i++){
                    var users = data[i];
                    var list = $("#structure .list").clone(true);
                    $(".table").append(list);
                    list.find(".friends").text(users.nickname);
                    if(users.last_online) {
						var last_online = new Date(users.last_online);
						if(Date.now() - 1000 * 10 * 60 < last_online.getTime())
							last_online = 'online';
						else
							last_online = users.last_online;
						list.find(".friends").text(users.nickname + '(' + last_online + ')');
					}
                }
            }
        });
    });
});











