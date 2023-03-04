<?php
//status
// functions.php
add_action('cmb2_admin_init', 'cmb2_fields_contatos');
function cmb2_fields_contatos() {
    // Adiciona um bloco
    $cmb = new_cmb2_box([
      'id' => 'contatos_box', // id deve ser único
      'title' => 'contatos',
      'object_types' => ['page'], // tipo de post
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-contatos.php',
      ], // modelo de página
    ]);

    $contatos = $cmb->add_field([
      'name' => 'contatos',
      'id' => 'contatos',
      'type' => 'group',
      'repeatable' => true,
      'options' => [
        'sortable' => true,
        'add_button' => 'Adicionar',
        'remove_button' => 'Remover',
      ],
    ]);
    $cmb->add_group_field($contatos, [
      'name' => 'Logo Cliente',      
      'id' => 'logo_cliente',
      'type' => 'file',
    ]);
    $cmb->add_group_field($contatos, [
      'name' => 'Nome da empresa',
      'id' => 'nome_cliente',
      'type' => 'text',
    ]);    
    $cmb->add_group_field($contatos, [
      'name' => 'Link',
      'id' => 'link_cliente',
      'type' => 'text_url',
    ]);
}
?>