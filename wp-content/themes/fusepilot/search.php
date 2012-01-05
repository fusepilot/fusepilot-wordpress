<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content" class="single">
	<?php if (have_posts()) : ?>

		<h2>Search Results For: <?php the_search_query(); ?></h2>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php include (TEMPLATEPATH . '/partials/article_teaser.php' ); ?>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>
<div>



<?php get_footer(); ?>
