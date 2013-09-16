$(document).ready(function() {
 if (!Modernizr.svg) {
    $('img[src$=svg]').each(function(index, item) {
        imagePath = $(item).attr('src');
        $(item).attr('src',imagePath.slice(0,-3)+'png');
    });
  }
	if(!Modernizr.svg) {
		//TODO: look for a polyfill to solve in a general way. 9/11/13 Brian V.
		// 9/13, see above...
		// var socialIcons = base + '/wp-content/themes/thebaylights/img/social-icons.png';
		// var imgBase = base + '/wp-content/themes/thebaylights/img/';
		      
		// $("#fb-footer").css("background", "url("+ socialIcons + ") no-repeat 0 0");
		// $("#twitter-footer").css("background", "url("+ socialIcons +") no-repeat -40px 0");
		// $("#yelp-footer").css("background", "url("+ socialIcons +") no-repeat -80px 0");
		              
		// $("#floral-object").css("background", "url("+ socialIcons + 'floral-object.png' + ") no-repeat -80px 0");
	}
  	$('.OT_feedTitle').text('Make a Reservation');
});
