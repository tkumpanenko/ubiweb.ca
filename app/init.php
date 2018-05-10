<?php

function asset( $path ) {
  $assetsFile = __DIR__ . '/../dist/mix-manifest.json';
  $root = '/dist/';
  if( !file_exists($assetsFile) )
    return $root . $path;

  $assets = json_decode(file_get_contents($assetsFile), TRUE);

  if( !isset($assets[$path]) )
    return $root . $path;

  return $root . $assets[$path];
}

$admin_email =  "support@ubiweb.ca";
$site_key = "6Lfg3jcUAAAAAKb9xDen0TRRmUejPFU34y2verI9";
$data_callback = "ubiRecaptchaFormSubmission";

