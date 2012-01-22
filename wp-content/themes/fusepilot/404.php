<?php get_header(); ?>
<?php get_sidebar(); ?>

<section id="content" class="error">
  
  <div class="entry_content">
    <img src="<?php bloginfo('template_directory'); ?>/images/404.png" />
  </div>
  
  <?php include (TEMPLATEPATH . '/partials/content_footer.php' );?>

</section>

<?php get_footer(); ?>