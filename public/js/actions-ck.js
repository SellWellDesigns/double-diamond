$(function(){function i(){var i=[{stylers:[{hue:"#ff0000"},{visibility:"simplified"},{weight:.5},{saturation:-100}]},{elementType:"labels",stylers:[{visibility:"on"}]},{featureType:"water",stylers:[{color:r}]}],s={zoom:17,center:t,mapTypeControlOptions:{mapTypeIds:[google.maps.MapTypeId.ROADMAP,n]},mapTypeId:n};e=new google.maps.Map(document.getElementById("map-canvas"),s);var o={name:"Custom Style"},u=new google.maps.StyledMapType(i,o);e.mapTypes.set(n,u);var a="img/map_star.png",f=new google.maps.Marker({position:t,map:e,icon:a})}$(".datepicker").datepicker();var e,t=new google.maps.LatLng(39.6433,-106.3883),n="custom_style",r="#cccccc";google.maps.event.addDomListener(window,"load",i)});