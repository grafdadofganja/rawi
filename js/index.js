;(function(){

	console.log("Init idex.js");
	var pers = $(".personcategories");

	var panel = document.createElement('div');
	panel.className = "daruPanel";


	pers.on('mouseover', function(event) {
		var target = event.target;

		//console.log(target.tagName);
		
		if (target.tagName != 'A') return;

		console.log("target");
		target.appendChild(panel);


	});

	pers.on('', function(event) {

	});


}())