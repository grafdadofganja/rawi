;(function(){

	console.log("Init idex.js");
	var pers = $(".perslink");

	var panel = document.createElement('img');
	panel.className = "daru-panel";
	panel.src = "./img/daru-img.png"


	pers.on('mouseover', function(event) {
		var target = event.target;

		//console.log(target.tagName);
		
		if (target.tagName === 'IMG') {
			console.log("target");
			//target.appendChild(panel);
			$(target).after(panel);
		}

	});

	pers.on('', function(event) {

	});


}())