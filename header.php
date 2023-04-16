<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <title><?php bloginfo('name'); ?></title>
    <script src="https://use.fontawesome.com/bf7a872587.js"></script>
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fontaesome.js"></script>
    
    <?php wp_head(); ?>
</head>
<body>
    <!-- CABEÇALHO PC-->
    <header class="d-none d-md-block">
        <div class="container">
            <div class="row pt-3 pb-3">
                <div class="col-12 col-sm-3 d-flex align-items-center">
                    <!-- ESPACO PARA LOGO -->
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>" target="_blank" >
                            <?php
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                if ( has_custom_logo() ) {
                                    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                } else {
                                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                                }
                            ?>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-9 d-flex align-items-center">
                    <!-- NAVEGAÇÃO -->
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
        </div>
    </header>
    
    <!-- CABECALHO RESPONSIVE -->
    <header class="d-block d-md-none">
    <div class="container">
            <div class="row pt-3 pb-3">
                <div class="col-6 d-flex align-items-center">
                    <!-- ESPACO PARA LOGO -->
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>" target="_blank" >
                            <?php
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                if ( has_custom_logo() ) {
                                    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                } else {
                                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                                }
                            ?>
                        </a>
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <!-- NAVEGAÇÃO -->
                    <nav  class="navbar navbar-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler ms-auto" type="button" onclick="removeCollapse()" data-mdb-toggle="collapse"
                        data-mdb-target="#navbarToggleExternalContent3" aria-controls="navbarToggleExternalContent3"
                        aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars" id="icon-menu"></i>
                        </button>
                    </div>
                        
                    </nav>
                    
                </div>
                <div class="col-12 collapse" id="navbarToggleExternalContent3">                
                        <?php
                            $args = array(
                                'menu' => 'principal',
                                'theme_location' => 'menu-principal',
                                'container' => false
                            );
                            wp_nav_menu( $args );
                        ?>                   
                </div>
            </div>
        </div>
    </header>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

    