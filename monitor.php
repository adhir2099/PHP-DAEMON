<?php

  require "cli.php";
  
  define("CYCLE_PAUSE", 10);
  define("CHECK_URL", "url to monitor");
  define("LOG_FILE", __DIR__ . DIRECTORY_SEPARATOR . "logs.txt");

  function logger ($msg) {
    file_put_contents(LOG_FILE, sprintf("[%s] %s\r\n", date("Y-m-d H:i:s"), $msg), FILE_APPEND);
  }
  
  logger("Starting monitoring ...");

  while (true) {
    
    $curIn = curl_init();
    curl_setopt($curIn, CURLOPT_URL, CHECK_URL);
    curl_setopt($curIn, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curIn);

    if (curl_errno($curIn)) { logger(curl_error($curIn)); }
    else {
      $info = curl_getinfo($curIn);
      logger($info["http_code"]." - ".$info["total_time_us"]);
    }
  
    curl_close($curIn);
    sleep(CYCLE_PAUSE);
  }