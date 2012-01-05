<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content" class="index">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

      <header>
        <h1 class="entry-title"><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <?php include (TEMPLATEPATH . '/partials/meta.php' ); ?>
        <?php the_tags('Tags: ', ', ', '<br />'); ?>
        <?php the_category(', ') ?>
        <?php the_field('client'); ?>
      </header>

			<div class="entry">
				<?php the_content(); ?>
			</div>

		</article>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/partials/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
  
  <div class="filler"></div>
  
</div>

<?php get_footer(); ?>
