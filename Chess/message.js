var end=0;
$(function(){
	setInterval(function(){
		$.post("scripts/messages.php", {end}, function(data){
			data = JSON.parse(data);
			for(var i=0;i<data.length;i++){
				var food=data[i];
				if(food!=end){
					console.log(food.message);
				console.log(foodBlock);
				var foodBlock = $(".messag-box .scroll #0").clone(true);
				foodBlock.attr("id", food.Id)
				$(".messag-box .scroll").append(foodBlock);
				foodBlock.text(food.message).append(foodBlock);
				end=food.Id;
				}
							
			}
		})
	},2000)
})