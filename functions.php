<?php

add_theme_support('menus');

function get_field_cmb2($key, $page_id = 0){
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($id, $key, true);
}

function the_field_cmb2($key, $page_id = 0){
  echo get_field_cmb2($key, $page_id);
}

// functions.php
add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home() {
}

?>