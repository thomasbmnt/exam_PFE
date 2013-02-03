
( function ( $ ) {
	"use strict";
	var 	coords,
			gMap,
			gGeocoder,
			gMarker,
			gPosition;	
	

	var generateMap = function( n ) {
		gMap = new google.maps.Map( document.getElementById( 'gmap' ), {
			zoom: 12,
			center: new google.maps.LatLng( 50.6091325, 5.5503911 ),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		} );

		return gMap;
	}; // generateMap
	
	
	var addMarker = function(){

	  	/* Vu qu'on récupère une chaine de caractère, on doit la splitter et la convertire en float pour pouvoir l'utiliser */
		var myLatlng = new google.maps.LatLng(50.6091325, 5.5503911);


		gMarker = new google.maps.Marker({
	      position: myLatlng,
	      map: gMap,
	      title: "Château de Sclessin",
	      animation: google.maps.Animation.DROP
	     });
	};
	

	$( function () {
		
		var sliderImg, slider;
		
		if( document.getElementById( 'gmap' ) ){
			gMap = generateMap();
			addMarker();
		}
		
		/* Supression de la balise img du slider et insertion de cette image en tant que background */
		slider = $("#slider");
		sliderImg = $("#sliderPresentation").find('img');
		sliderImg.hide();
		
		
		slider.css('background', 'url("' + sliderImg.attr("src") + '") no-repeat center');
		
			
	} );

}( jQuery ) );
