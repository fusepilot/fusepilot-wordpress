<div class="twitter">
  <h3>Twitter</h3>
  <?php $tweets = get_tweets($settings["twitter_id"], 2); ?>
  <?php foreach($tweets as $tweet): ?>
    
    
    <a class="tweet" href="<?php echo $tweet->url; ?>">
      <p><?php echo $tweet->text; ?></p>
      <p class="details"><?php echo format_date($tweet->created_at); ?></p>
    </a>
  <?php endforeach; ?>
  
</div>