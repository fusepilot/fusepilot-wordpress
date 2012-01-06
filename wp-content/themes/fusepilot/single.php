<?php get_header(); ?>	
<?php get_sidebar(); ?>

<div id="content" class="single">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php include (TEMPLATEPATH . '/partials/article.php' ); ?>
  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>