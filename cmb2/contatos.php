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
        'value' => 'page-contato.php',
      ], // modelo de página
    ]);

    $cmb->add_field([
      'name' => 'Telefone',
      'id' => 'telefone',
      'type' => 'text',
    ]);
    
    $cmb->add_field([
      'name' => 'Email',
      'id' => 'email',
      'type' => 'text_email',
    ]);

    $cmb->add_field([
      'name' => 'Endereço',
      'id' => 'endereco',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Whatsapp',
      'id' => 'whatsapp',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Instagram',
      'id' => 'instagram',
      'type' => 'text_url',
    ]);

    $cmb->add_field([
      'name' => 'Facebook',
      'id' => 'facebook',
      'type' => 'text_url',
    ]);
    $cmb->add_field([
      'name' => 'Link do Mapa',
      'id' => 'link_mapa',
      'type' => 'text_url',
    ]);
  
}
?>