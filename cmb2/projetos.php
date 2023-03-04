<?php

add_action('cmb2_admin_init', 'cmb2_fields_projetos');

function cmb2_fields_projetos() {
  $cmb = new_cmb2_box([
    'id' => 'projetos_box',
    'title' => 'projetos',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => ['page-produto.php'],
    ],
  ]);

  $cmb->add_field([
    'name' => 'Itens Orçamento',
    'id' => 'itens_orcamento',
    'type' => 'wysiwyg',
  ]);
}

?>