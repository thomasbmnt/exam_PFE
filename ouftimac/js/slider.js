window.addEventListener("load", loaded);

function loaded(e){
	/* Supression de la balise img du slider et insertion de cette image en tant que background */
/*
		slider = $("#slider");
		sliderImg = $("#sliderPresentation").find('img');
		sliderImg.hide();
		
		
		slider.css('background', 'url("' + sliderImg.attr("src") + '") no-repeat center');
*/
		
		var slider = document.getElementById('slider');
		var sliderPresentation = document.getElementById('sliderPresentation');
		
		alert(sliderPresentation.childNodes.innerHTML);
};