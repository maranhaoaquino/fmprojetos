<?php

// Funções de ajuda
function get_field_cmb2($key, $page_id = 0){
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
}
  
function the_field_cmb2($key, $page_id = 0){
    echo get_field_cmb2($key, $page_id);
}

// carrega os campos personalizados do CMB2
require_once get_template_directory() . '/cmb2/home.php';
require_once get_template_directory() . '/cmb2/produtos.php';
require_once get_template_directory() . '/cmb2/clientes.php';
require_once get_template_directory() . '/cmb2/contatos.php';
require_once get_template_directory() . '/cmb2/parceiros.php';
require_once get_template_directory() . '/cmb2/single_produtos.php';

?>