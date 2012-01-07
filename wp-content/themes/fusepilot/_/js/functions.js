/* trigger when page is ready */

$(document).ready(function (){
  
  $('input[type="submit"]', '#sidebar, #content').each(function(){
    $(this).after(unescape('<a class="submit_button"></a>'));
    $(this).hide();
    $(this).next('a.submit_button').text($(this).val()).click(function(){
        $(this).prev('input[type="submit"]').click();
    });
  });

	Cufon.replace('h1, h2, h3, h4, nav, #content .links, .pagination a, #menu, .submit_button', {
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
    $(".nivo-directionNav, .nivo-controlNav", $slider).each(function() {
      $controls.append($(this));
    });
  });
  
  placeFooter();
});

$(window).load(function() {
  placeFooter();
});

$(window).resize(function() {
  placeFooter();
});

function placeFooter() {
  footer_height = $('#content_footer').outerHeight();
  $('.fill').height(footer_height);
}