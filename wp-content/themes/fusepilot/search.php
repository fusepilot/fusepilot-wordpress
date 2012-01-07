<?php get_header(); ?>
<?php get_sidebar(); ?>

<section id="content" class="single">
	<?php if (have_posts()) : ?>

		<h3>Search Results For: <?php the_search_query(); ?></h3>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php include (TEMPLATEPATH . '/partials/article_teaser.php' ); ?>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h3>No posts found.</h3>

	<?php endif; ?>
	
	<?php include (TEMPLATEPATH . '/partials/content_footer.php' ); ?>
<section>



<?php get_footer(); ?>
