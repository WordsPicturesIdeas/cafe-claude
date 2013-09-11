$(document).ready(function() {
	if(!Modernizr.svg) {
		//TODO: look for a polyfill to solve in a general way. 9/11/13 Brian V.
		var socialIcons = base + '/wp-content/themes/thebaylights/img/social-icons.png';
		var imgBase = base + '/wp-content/themes/thebaylights/img/';
		      
		$("#fb-footer").css("background", "url("+ socialIcons + ") no-repeat 0 0");
		$("#twitter-footer").css("background", "url("+ socialIcons +") no-repeat -40px 0");
		$("#yelp-footer").css("background", "url("+ socialIcons +") no-repeat -80px 0");
		              
		$("#floral-object").css("background", "url("+ socialIcons + 'floral-object.png' + ") no-repeat -80px 0");
	}
});