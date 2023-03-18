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

  $clientes_projetos = $cmb->add_field([
    'name' => 'Clientes',      
    'id' => 'clientes_projetos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover'
    ],
  ]);

  $cmb->add_field([
    'name' => 'Nome do Cliente',
    'id' => 'nome_cliente',
    'type' => 'text',
  ]);

  $cmb->add_group_field($clientes_projetos, [
    'name' => 'imagem',
    'id' => 'imagem_cliente',
    'type' => 'file',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover'
    ],
  ]);

  $cmb->add_field([
    'name' => 'Categoria',
    'id' => 'categoria_cliente',
    'type' => 'text',
  ]);
}
?>