<?php
  $r = new Redis();
  $r->connect(parse_url($_ENV['REDISTOGO_URL'], PHP_URL_HOST), parse_url($_ENV['REDISTOGO_URL'], PHP_URL_PORT));
  if (!is_array(parse_url($_ENV['REDISTOGO_URL'], PHP_URL_PASS))) {
    $r->auth(parse_url($_ENV['REDISTOGO_URL'], PHP_URL_PASS));
  }
  
  while (true) {
      $asyncReqSerialized = $r->blpop("ASYNC_QUEUE", 30);
      $asyncReq = unserialize($asyncReqSerialized[1]);
      print_r($asyncReq);
  }
?>
