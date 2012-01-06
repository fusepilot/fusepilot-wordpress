<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content" class="index">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php include (TEMPLATEPATH . '/partials/article_teaser.php' ); ?>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/partials/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
  
  <div class="filler"></div>
  
</div>

<?php get_footer(); ?>
