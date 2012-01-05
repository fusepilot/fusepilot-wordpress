// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

	Cufon.replace('h1, h2, h3, h4, nav, #content .links, .pagination', {
    hover: true,
    fontStyle: "italic",
  });

});


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/