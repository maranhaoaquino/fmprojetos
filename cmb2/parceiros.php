<?php
// functions.php
add_action('cmb2_admin_init', 'cmb2_fields_parceiros');
function cmb2_fields_parceiros() {
    // Adiciona um bloco
    $cmb = new_cmb2_box([
      'id' => 'parceiros_box', // id deve ser único
      'title' => 'parceiros',
      'object_types' => ['page'], // tipo de post
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-parceiros.php',
      ], // modelo de página
    ]);

    $marca_cliente = $cmb->add_field([
      'name' => 'Parceiro',
      'id' => 'marca_parceiro',
      'type' => 'group',
      'repeatable' => true,
      'options' => [
        'sortable' => true,
        'add_button' => 'Adicionar',
        'remove_button' => 'Remover',
      ],
    ]);
    $cmb->add_group_field($marca_cliente, [
      'name' => 'Logo Parceiro',      
      'id' => 'logo_parceiro',
      'type' => 'file',
      'options' => [
        'url' => false,
      ],
    ]);
    $cmb->add_group_field($marca_cliente, [
      'name' => 'Nome da empresa',
      'id' => 'nome_parceiro',
      'type' => 'text',
    ]);    
    $cmb->add_group_field($marca_cliente, [
      'name' => 'Link',
      'id' => 'link_parceiro',
      'type' => 'text_url',
    ]);
}
?>