<div class="details expanded">
  <section>
    <p>
      <span>Posted: </span><time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('M jS Y \a\t h:ia') ?></time>
    </p>
    <p>
      <?php if(count(get_the_category()) > 0): ?>
        <span>Categories: </span><?php foreach(get_the_category() as $index=>$category): ?>
        <?php if($category->cat_name != 'Uncategorized'): ?>
          <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
        <?php endif;?>
        <?php endforeach; ?>
      <?php endif; ?>
    </p>
    <p>
      <?php if(count(get_the_tags()) > 0): ?>
        <span>Tags: </span><?php foreach(get_the_tags() as $index=>$tag): ?>
        <a href="<?php echo get_tag_link( $tag->term_id ); ?>"><?php echo $tag->name; ?></a>
        <?php endforeach; ?>
      <?php endif; ?>
    </p>
    <p>
      <?php if(get_field('client')): ?>
        <span>Client: </span><?php the_field('client'); ?>
      <?php endif; ?>
    </p>
  </section>
  <section>
    <div class="twitter social_share">
      <a href="http://twitter.com/share?url=<?php echo urlencode($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>&amp;via=YourName&amp;count=vertical" class="twitter-share-button" rel="nofollow">Tweet</a>
      <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    </div>
    
    <div class="facebook social_share">
      <iframe src="//www.facebook.com/plugins/like.php?href&amp;send=false&amp;layout=box_count&amp;width=49px&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=verdana&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:49px; height:62px;" allowTransparency="true"></iframe>
    </div>
    
      <div class="g-plusone social_share" data-size="tall" data-href="<?php echo urlencode($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>"></div>
      <script type="text/javascript">
        (function() {
          var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
          po.src = 'https://apis.google.com/js/plusone.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
      </script>
  </section>
</div>