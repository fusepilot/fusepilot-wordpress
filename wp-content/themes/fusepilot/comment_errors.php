<?php global $title; $title = "Error"; ?>

<?php get_header(); ?>	
<?php get_sidebar(); ?>

<section id="content" class="single">
  
  <div class="entry-content">
    <?php echo do_shortcode("[message type=error]{$message}[/message]"); ?>
    
    <p><a class="back" href='javascript:history.back()'>Go Back</a></p>
  </div>
  
  
  <?php include (TEMPLATEPATH . '/partials/content_footer.php' );?>
  
</section>
<?php get_footer(); ?>