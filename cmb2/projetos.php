<?php
add_action('cmb2_admin_init', 'cmb2_fields_projetos');

function cmb2_fields_projetos() {
  $cmb = new_cmb2_box([
    'id' => 'projetos_box',
    'title' => 'projetos',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-projetos.php',
    ],
  ]);

  $categorias = $cmb->add_field([
    'name' => 'Categorias',
    'id' => 'categorias_projeto',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover'
    ]
  ]);
  $clientes = $cmb->add_field($categorias,[
    'name' => 'Clientes',
    'id' => 'categorias_projeto',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover'
    ]
  ]);
}
?>