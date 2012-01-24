<?php get_header(); ?>
<?php get_sidebar(); ?>

<section id="content" class="page">

  <h2 class="header"><?php the_title(); ?></h2>
  
  <div class="entry-content">
  	<?php the_content(); ?>
  </div>

  <?php include (TEMPLATEPATH . '/partials/content_footer.php' );?>
</section>

<?php get_footer(); ?>
