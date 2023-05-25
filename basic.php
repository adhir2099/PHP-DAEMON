<?php

  require "cli.php";

  define("CYCLE_PAUSE", 5);

  while (true) {
    echo "It works!" . PHP_EOL;
    sleep(CYCLE_PAUSE);
  }