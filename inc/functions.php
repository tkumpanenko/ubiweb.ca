<?php


function __( $key ) {
  global $locale;
  global $lang;

  if( empty($key) ) return NULL;

  if( isset($locale[$lang][$key]) )
    return $locale[$lang][$key];
  else
    return $key;
}

function _e( $key ) {
  echo __($key);
}

function switch_language() {
  global $lang;
  global $page;
  $html = '<a href="';
  $html .= $page . '.php';
  if( $lang == "en" )
    $html .= "?lang=fr";
  $html .= '">';
  if( $lang == "en" )
    $html .= "Fr";
  elseif( $lang == "fr" )
      $html .= "En";
  $html .= '</a>';
  echo $html;
}
