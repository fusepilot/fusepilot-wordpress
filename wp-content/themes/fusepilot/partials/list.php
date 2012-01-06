<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php include (TEMPLATEPATH . '/partials/article_teaser.php' ); ?>
<?php endwhile; ?>

<?php include (TEMPLATEPATH . '/partials/pagination.php' ); ?>

<?php else : ?>

	<h2>Not Found</h2>

<?php endif; ?>