<?php

  function CmdCli () {
    if (php_sapi_name()==="cli") { return true; } 
    if (defined("STDIN")) { return true; }
    if (array_key_exists("SHELL", $_ENV)) { return true; }
    if (!array_key_exists("REQUEST_METHOD", $_SERVER)) { return true; }
    if (empty($_SERVER["REMOTE_ADDR"]) && !isset($_SERVER["HTTP_USER_AGENT"]) && count($_SERVER["argv"])>0) { return true; }
    return false;
  }

  if (!CmdCli()) { exit("Please run this in the command line."); }