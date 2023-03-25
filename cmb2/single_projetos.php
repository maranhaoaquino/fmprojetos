<?php

add_action('cmb2_admin_init', 'cmb2_fields_single_projetos');

function cmb2_fields_single_projetos() {
  $cmb = new_cmb2_box([
    'id' => 'single_projetos_box',
    'title' => 'Projeto',
    'object_types' => ['projetos'],
  ]);

  $slide_projeto = $cmb->add_field([
    'name' => 'Fotos dos projetos',
    'id' => 'slide_projeto',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover',
    ],
  ]);

  $cmb->add_group_field($slide_projeto, [
    'name' => 'Foto',      
    'id' => 'foto_projeto',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
}

?>