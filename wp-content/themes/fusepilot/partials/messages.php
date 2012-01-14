<?php if(get_flash("comment_needs_moderation")): ?>
  <?php echo do_shortcode("[message type=\"flash\"]Thank you. Your comment is awaiting moderation.[/message]"); ?>
<?php elseif(get_flash("comment_accepted")): ?>
  <?php echo do_shortcode("[message type=\"flash\"]Thank you.[/message]"); ?> 
<?php endif; ?>