<?php

if( isset($_GET['lang']) )
  $lang = $_GET['lang'];
else
  $lang = "en";

require_once "functions.php";
require_once "locale.php";
