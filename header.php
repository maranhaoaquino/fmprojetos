<!DOCTYPE html>
<script src="https://use.fontawesome.com/bf7a872587.js"></script>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bulma.min.css">
    <title><?php bloginfo('name'); ?></title>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>

    <?php wp_head(); ?>
</head>
<body>
    <!-- CABEÇALHO -->
    <header>
        <div class="header-class">
            <!-- ESPACO PARA LOGO -->
            <div class="logo">
                <h1><?php bloginfo('name'); ?></h1>
            </div>
            <!-- NAVEGAÇÃO -->
            <div class="navmap">
                <nav id="nav-list">
                    <?php
						$args = array(
							'menu' => 'principal',
							'theme_location' => 'menu-principal',
							'container' => false
						);
						wp_nav_menu( $args );
					?>
                </nav>
            </div>
        </div>
    </header>