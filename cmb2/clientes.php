<?php
// functions.php
add_action('cmb2_admin_init', 'cmb2_fields_clientes');
function cmb2_fields_clientes() {
    // Adiciona um bloco
    $cmb = new_cmb2_box([
      'id' => 'clientes_box', // id deve ser único
      'title' => 'clientes',
      'object_types' => ['page'], // tipo de post
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-clientes.php',
      ], // modelo de página
    ]);

    $marca_cliente = $cmb->add_field([
      'name' => 'clientes',
      'id' => 'marca_cliente',
      'type' => 'group',
      'repeatable' => true,
      'options' => [
        'sortable' => true,
        'add_button' => 'Adicionar',
        'remove_button' => 'Remover',
      ],
    ]);
    $cmb->add_group_field($marca_cliente, [
      'name' => 'Logo Cliente',      
      'id' => 'logo_cliente',
      'type' => 'file',
      'options' => [
        'url' => false,
      ],
    ]);
    $cmb->add_group_field($marca_cliente, [
      'name' => 'Nome da empresa',
      'id' => 'nome_cliente',
      'type' => 'text',
    ]);    
    $cmb->add_group_field($marca_cliente, [
      'name' => 'Link',
      'id' => 'link_cliente',
      'type' => 'text_url',
    ]);
}
?>