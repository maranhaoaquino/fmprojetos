<?php

add_action('cmb2_admin_init', 'cmb2_fields_single_produtos');

function cmb2_fields_single_produtos() {
  $cmb = new_cmb2_box([
    'id' => 'single_produtos_box',
    'title' => 'Single Produtos',
    'object_types' => ['produtos'],
  ]);

  $cmb->add_field([
    'name' => 'Imagem Principal do Produto',
    'id' => 'imagem_principal_produto',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $produtos_adicionais = $cmb->add_field([
    'name' => 'Produtos Adicionais',
    'id' => 'produtos_adicionais',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'sortable' => true,
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover',
    ],
  ]);

  $cmb->add_group_field($produtos_adicionais, [
    'name' => 'Imagem Adicional',      
    'id' => 'imagem_adicional',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
  $cmb->add_group_field($produtos_adicionais, [
    'name' => 'Descrição Adicional',      
    'id' => 'descricao_adicional',
    'type' => 'text_medium',
  ]);
}

?>