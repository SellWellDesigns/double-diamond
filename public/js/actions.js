$(function(){

	/**
	 * Google Map
	 */
	var map;
	var location = new google.maps.LatLng(39.644083,-106.386881);
	var MY_MAPTYPE_ID = 'custom_style';
	var color = '#cccccc';

	function initialize() {

	  var featureOpts = [
	    {
	      stylers: [
	        { "hue": "#ff0000" },
			{ "visibility": "simplified" },
			{ "weight": 0.5 },
			{ "saturation": -100 }
	      ]
	    },
	    {
	      elementType: 'labels',
	      stylers: [
	        { visibility: 'on' }
	      ]
	    },
	    {
	      featureType: 'water',
	      stylers: [
	        { color: color }
	      ]
	    }
	  ];

	  var mapOptions = {
	    zoom: 17,
	    center: location,
	    mapTypeControlOptions: {
	      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
	    },
	    mapTypeId: MY_MAPTYPE_ID
	  };

	  map = new google.maps.Map(document.getElementById('map-canvas'),
	      mapOptions);

	  var styledMapOptions = {
	    name: 'Custom Style'
	  };

	  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

	  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

	  var image = 'img/map_star.png';
	  
	  var beachMarker = new google.maps.Marker({
	      position: location,
	      map: map,
	      icon: image
	  });
	}

	google.maps.event.addDomListener(window, 'load', initialize);
	
});