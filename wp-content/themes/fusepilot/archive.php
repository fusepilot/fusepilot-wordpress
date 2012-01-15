<?php get_header(); ?>
<?php get_sidebar(); ?>

<section id="content" class="archive">
		<?php if (have_posts()) : ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 class="header">Articles posted in "<?php single_cat_title(); ?>"</h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2 class="header">Articles tagged with "<?php single_tag_title(); ?>"</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2 class="header">Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="header">Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="header">Author Archive</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="header">Blog Archives</h2>
			
			<?php } ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<?php include (TEMPLATEPATH . '/partials/article_teaser.php' ); ?>

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/partials/pagination.php' ); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>
	<?php include (TEMPLATEPATH . '/partials/content_footer.php' );?>
</section>

<?php get_footer(); ?>
