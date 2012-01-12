<?php get_header(); ?>
<?php get_sidebar(); ?>

<section id="content" class="page">

  <header>
    <h3><?php the_title(); ?></h3>
  </header>
  
  <div class="entry-content">

  	<?php the_content(); ?>

  </div>

  <?php include (TEMPLATEPATH . '/partials/content_footer.php' );?>
</section>

<?php get_footer(); ?>
