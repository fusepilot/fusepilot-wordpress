<section id="sidebar">
    <header id="header">
        <h1 id="logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    </header>
    
    <?php include (TEMPLATEPATH . '/partials/menu.php' ); ?>
    
    <?php include (TEMPLATEPATH . '/partials/search_form.php' ); ?>
    
    <?php include (TEMPLATEPATH . '/partials/recent.php' ); ?>
    
    <?php include (TEMPLATEPATH . '/partials/categories.php' ); ?>
    
    <?php include (TEMPLATEPATH . '/partials/rss.php' ); ?>
    
</section>