<?php
// functions.php
add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home() {
    // Adiciona um bloco
    $cmb = new_cmb2_box([
      'id' => 'home_box', // id deve ser único
      'title' => 'Home',
      'object_types' => ['page'], // tipo de post
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-home.php',
      ], // modelo de página
    ]);

    $cmb->add_field([
      'name' => 'Titulo Acima do Menu',
      'id' => 'title-header',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Titulo Sessão Parceiros',
      'id' => 'title-parceiros',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Subtitulo Sessão Parceiros',
      'id' => 'subtitle-parceiros',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Titulo Sessão Produtos',
      'id' => 'title-produtos',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Subtitulo Sessão Produtos',
      'id' => 'subtitle-produtos',
      'type' => 'text',
    ]);

    $slide_principal = $cmb->add_field([
      'name' => 'Slide',
      'id' => 'slide_principal',
      'type' => 'group',
      'repeatable' => true,
      'options' => [
        'sortable' => true,
        'add_button' => 'Adicionar',
        'remove_button' => 'Remover',
      ],
    ]);
    $cmb->add_group_field($slide_principal, [
      'name' => 'Image',
      'id' => 'img_slide',
      'type' => 'file',
    ]);
    $cmb->add_group_field($slide_principal, [
      'name' => 'Link do video',
      'id' => 'video_link',
      'type' => 'text_url',
    ]);
    $cmb->add_group_field($slide_principal, [
      'name' => 'Titulo',
      'id' => 'title_slide',
      'type' => 'text',
    ]);
    $cmb->add_group_field($slide_principal, [
      'name' => 'Subtitulo',
      'id' => 'subtitle_slide',
      'type' => 'text',
    ]);
    $cmb->add_group_field($slide_principal, [
      'name' => 'Link',
      'id' => 'link_slide',
      'type' => 'text_url',
    ]);
}
?>