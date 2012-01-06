


/* trigger when page is ready */
$(document).ready(function (){

	Cufon.replace('h1, h2, h3, h4, nav, #content .links, .pagination', {
    hover: true,
    fontStyle: "italic",
  });
  
  $("#masonry .masonry_col").hover(function() {
    var $col, $overlay, title;
    $col = $(this);
    title = $col.data("title");
    $overlay = $(".masonry_col_overlay", $col);
    $overlay.css('width', $col.width());
    $overlay.css('height', $col.height() - 1);
    $overlay.toggle();
  });
  
  $("#gallery").nivoSlider({
    effect: "boxRainGrow",
    directionNavHide: false,
    boxCols: 6,
    boxRows: 3,
    captionOpacity: 0.0
  });
  
  $(".nivoSlider").each(function() {
    var $controls, $slider;
    $slider = $(this);
    $controls = $('<div/>', {
      "class": 'nivo-controls'
    });
    $slider.append($controls);
    return $(".nivo-directionNav, .nivo-controlNav", $slider).each(function() {
      return $controls.append($(this));
    });
  });

});



/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/