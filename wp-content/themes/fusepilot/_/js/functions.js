/* trigger when page is ready */

$(document).ready(function (){
  
  
  
  
  
  // replace fonts
  
	Cufon.replace('h1, h2, h3, h4, #content .links, .pagination a, #sidebar #menu, .submit_button, blockquote, .message, a.back', {
    hover: true,
    fontStyle: "italic",
  });
  
  
  
  
  
  // replace form button with styleble sumbit button
  
  $('input[type="submit"]', '#sidebar, #content').each(function(){
     $(this).after(unescape('<a class="submit_button"></a>'));
     $(this).hide();
     $(this).next('a.submit_button').text($(this).val()).click(function(){
         $(this).prev('input[type="submit"]').click();
     });
   });
   
   
   
   
   
  // hide flash after delay
  
  $(".message.flash").delay(6000).slideUp();
  
  
  
  
  
  // add overlay to masonry
  
  $("#masonry .masonry_col").hover(function() {
    var $col, $overlay, title;
    $col = $(this);
    title = $col.data("title");
    $overlay = $(".masonry_col_overlay", $col);
    $overlay.css('width', $col.width());
    $overlay.css('height', $col.height() - 1);
    $overlay.toggle();
  });
  
  
  
  
  
  // sets the width of the category meters
  
  $category_list = $("#sidebar .category_list");
  max_count = $category_list.data("max-count");
  widest_link = 0;
  max_width = 0;
  category_list_width = $(".category_list").width()
  
  $(".category_link", $category_list).each(function() {
    widest_link = Math.max(widest_link, $(this).width());
  });
  
  max_width = category_list_width - widest_link - 20;
  
  $(".category", $category_list).each(function() {
    $category = $(this);
    $meter = $(".category_meter", $category);
    count = $category.data("count");
    percent = count / max_count;
    $meter.width(percent * max_width);
  })
  
  
  
  // nivo galleries
  
  $("#gallery").nivoSlider({
    effect: "boxRainGrow",
    directionNavHide: false,
    boxCols: 6,
    boxRows: 3,
    captionOpacity: 0.0
  });
  
  
  
  
  
  
  // collect nivo controls into a div to be styled
  
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
  
  
  
  
  
  // validate comment form before submission
  
  $("#commentform").validate({
    invalidHandler: function(form, validator) {
      $error = $("<div class=\"message error\"></div>")
      $form = $(".comment_form");
      var errors = validator.numberOfInvalids();
      $error.html("Please fill out the fields marked in red.");
      $form.not(".invalid").prepend($error);
      $form.addClass("invalid");
      Cufon.replace($error, {fontStyle: "italic"});
      if(errors) {
        
      }
    }, errorPlacement:function(error, element) {
      return;
    }
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