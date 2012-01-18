<?php get_header(); ?>
<?php get_sidebar(); ?>

<section id="content" class="index">
	<?php if (have_posts()) : ?>

		<h2 class="header">Search Results For: <?php the_search_query(); ?></h2>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php include (TEMPLATEPATH . '/partials/article_teaser.php' ); ?>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>
		  <h2 class="header">No posts found.</h2>
	<?php endif; ?>
	
	<?php include (TEMPLATEPATH . '/partials/content_footer.php' ); ?>
<section>

<?php get_footer(); ?>
