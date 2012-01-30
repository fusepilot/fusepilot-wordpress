<?php

function set_flash($hash, $content) {
  $_SESSION["flash"][$hash] = $content;
}

function has_flash() {
  global $flash;
  return count($flash) > 0;
}

function get_flash($hash) {
  global $flash;
  
  if(isset($flash[$hash])) {
    return $flash[$hash];
  } else {
    return "";
  }
}

function flash_init() {
  if (!session_id())
    session_start();
    
  global $flash;
  $flash = array();
    
  $flash = $_SESSION["flash"];
  $_SESSION["flash"] = array();
}

add_action("init", "flash_init");

?>