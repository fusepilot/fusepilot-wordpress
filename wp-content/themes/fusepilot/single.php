<?php get_header(); ?>
	
<?php get_sidebar(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<?php while(the_repeater_field('gallery')): 
				$thumbnails_id = get_sub_field('image'); 
				echo wp_get_attachment_image($thumbnails_id, 'gallery');	 
			endwhile; ?>

			<h1 class="entry-title"><?php the_title(); ?></h1>

			<?php the_field('client'); ?>

			<div class="entry-content">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>
			
				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</article>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>