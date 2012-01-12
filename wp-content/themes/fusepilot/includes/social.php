<?php

function get_tweets($username, $count = 1) {
  $format = "json";
  $tweets = json_decode(file_get_contents("http://api.twitter.com/1/statuses/user_timeline/{$username}.{$format}?count={$count}"));
  
  foreach($tweets as $tweet) {
    $id = $tweet->id;
    $tweet->url = "http://twitter.com/{$username}/status/{$id}";
  }
  
  return $tweets;
}

?>