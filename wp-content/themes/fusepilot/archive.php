<?php get_header(); ?>
<?php get_sidebar(); ?>

<section id="content" class="archive">
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h3>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h3>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h3>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h3>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h3>Archive for <?php the_time('F jS, Y'); ?></h3>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h3>Archive for <?php the_time('F, Y'); ?></h3>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h3 class="pagetitle">Archive for <?php the_time('Y'); ?></h3>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h3 class="pagetitle">Author Archive</h3>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h3 class="pagetitle">Blog Archives</h3>
			
			<?php } ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<?php include (TEMPLATEPATH . '/partials/article_teaser.php' ); ?>

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/partials/pagination.php' ); ?>
			
	<?php else : ?>

		<h3>Nothing found</h3>

	<?php endif; ?>
	<?php include (TEMPLATEPATH . '/partials/content_footer.php' );?>
</section>

<?php get_footer(); ?>
