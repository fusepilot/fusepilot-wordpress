$content = $("#content");
$filler = $("<div class='filler'></div>");

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
  
});

// $(window).load(function() {
//   placeFiller();
// });
// 
$(window).resize(function() {
  //$('.filler').height( $(window).height() - ($('body').innerHeight() - $('.filler').outerHeight()) );
  //$('.filler').text($(window).height() - $('body').innerHeight() - 27);
  //$('.filler').height(($(window).height() - $('body').innerHeight() - 27) + ($(window).height() - $('.filler').offset().top - $('.filler').outerHeight(true)));
  //$('.filler').text($(window).height() - $('.filler').offset().top + $('.filler').outerHeight(true));
  //$('.filler').height(($(window).height() - $('.filler').height()) - $('.filler').offset().top - $('.filler').outerHeight(true));
  
  // if($(window).height() > $('body').innerHeight()) {
  //   $('.filler').text('over');
  // } else {
  //   $('.filler').text('under');
  //   delta = $(window).height() - $(".filler").offset().top
  //   $('.filler').height(delta);
  // }
  
  placeFiller();
  
});

$(window).scroll(function() {
  placeFiller();
});

function placeFiller() {
  $('.filler').each(function() {
    $filler = $(this);
    padding = parseInt($filler.css('padding-top'));
    margin = parseInt($filler.css('margin-bottom'));
    $filler.height($(window).height() - $filler.offset().top + $(window).scrollTop() - ((padding * 2) + margin));
  })
}
// 
// function placeFiller() {
//   delta = $(window).height() - $('.filler').position().top;
//   $('.filler').css('height', delta);
// }


/* optional triggers





*/