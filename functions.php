<?php
// Habilitar Menus
add_theme_support('menus');

// carrega os campos personalizados do CMB2
require_once get_template_directory() . '/cmb2/load.php';

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Custom Post Type
function custom_post_type_produtos() {
	register_post_type('produtos', array(
		'label' => 'Produtos',
		'description' => 'Produtos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'produtos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),
    'show_in_rest' => true,
		'labels' => array (
			'name' => 'Produtos',
			'singular_name' => 'Produto',
			'menu_name' => 'Produtos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Produto',
			'edit' => 'Editar',
			'edit_item' => 'Editar Produto',
			'new_item' => 'Novo Produto',
			'view' => 'Ver Produto',
			'view_item' => 'Ver Produto',
			'search_items' => 'Procurar Produtos',
			'not_found' => 'Nenhum Produto Encontrado',
			'not_found_in_trash' => 'Nenhum Produto Encontrado no Lixo',
        ),
        'taxonomies' => array('tipo_de_produtos')
	));
}
add_action('init', 'custom_post_type_produtos');

/* Action para o registro da Custom Taxonomy Tipo de Produto */
add_action( 'init', 'create_custom_tax_tipo' );

/* Método para o registro da Custom Taxonomy Tipo de Produto */ 
function create_custom_tax_tipo(){
    $custom_tax_nome = 'tipo_de_produto';
    $custom_post_type_nome = 'produtos';
    $labels = array(
        'name' => _x( 'Departamentos', 'taxonomy general name' ),
        'singular_name' => _x( 'Departamento', 'taxonomy singular name' ),
        'search_items' =>  __( 'Procurar Departamentos' ),
        'all_items' => __( 'Todos Departamentos' ),
        'edit_item' => __( 'Editar Departamento' ), 
        'update_item' => __( 'Update Departamento' ),
        'add_new_item' => __( 'Adicionar Departamento' ),
        'new_item_name' => __( 'Novo Departamento' ),
        'menu_name' => __( 'Departamentos' ),
    );  
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'tipo'),
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'produtos' ),
    );
    register_taxonomy( $custom_tax_nome, $custom_post_type_nome, $args );
}

?>