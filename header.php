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
    <title><?php echo the_title(''); ?> | <?php bloginfo('name'); ?></title>
    <script src="https://use.fontawesome.com/bf7a872587.js"></script>
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fontaesome.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
    
    <?php wp_head(); ?>
</head>
<body>
    <!-- CABEÇALHO PC-->
    <header id="header-desktop" class="d-none d-md-block">
        <div class="container">
            <div class="row pt-3 pb-3" id="header-pai">
                <div class="col-12 col-sm-3 d-flex align-items-center">
                    <!-- ESPACO PARA LOGO -->
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <?php
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                if ( has_custom_logo() ) {
                                    echo '<img src="'   . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="img-logo ">';
                                } else {
                                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                                }
                            ?>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-9 d-flex align-items-center justify-content-center">
                    <?php $home = get_page_by_title('home')->ID; ?>                 
                    <h2 class="header-h2"><?php if (!empty(get_field_cmb2('title-header',$home))) { ?><?php the_field_cmb2('title-header',$home); ?><?php }else{ ?>O Melhor em Equipamentos para o seu Negocio.<?php } ?></h2>                    
                </div>
            </div>
            <div class="container" id="header-filho">
                <div class="row justify-content-center">
                    <nav id="nav-list">
                        <?php $parceiros = get_page_by_title('Nossos Parceiros')->ID; ?>
                        <?php $marca_parceiro = get_field_cmb2('marca_parceiro', $parceiros); 
                            if(!empty($marca_parceiro)) {
                        ?>
                            <ul class="nav nav-tabs">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-togge" onclick="changeDNone()" data-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false">Parceiros</a>
                                    <div class="dropdown-menu">
                                        <?php foreach($marca_parceiro as $slide) { ?>
                                            <?php if(!empty($slide['nome_parceiro'])){?>
                                                <a class="dropdown-item" <?php if(!empty($slide['link_parceiro'])){?>href="<?php echo $slide['link_parceiro'] ?>"<?php } else { ?>href="#"<?php } ?>>
                                                    <?php if(!empty($slide['nome_parceiro'])){?><?php echo $slide['nome_parceiro'] ?><?php } ?>
                                                </a>
                                            <?php }?>
                                        <?php } ?>
                                    </div>
                                </li>
                            </ul>
                        <?php } ?>
    
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
                        <?php $parceiros = get_page_by_title('Nossos Parceiros')->ID; ?>
                        <?php $marca_parceiro = get_field_cmb2('marca_parceiro', $parceiros); 
                            if(!empty($marca_parceiro)) {
                        ?>
                            <ul class="nav nav-tabs" id="no-border">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-togge" onclick="changeDNoneResponsive()"  data-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false">Parceiros</a>
                                    <div class="dropdown-menu" id="responsive-list">
                                        <?php foreach($marca_parceiro as $slide) { ?>
                                            <?php if(!empty($slide['nome_parceiro'])){?>
                                                <a class="dropdown-item" <?php if(!empty($slide['link_parceiro'])){?>href="<?php echo $slide['link_parceiro'] ?>"<?php } else { ?>href="#"<?php } ?>>
                                                    <?php if(!empty($slide['nome_parceiro'])){?><?php echo $slide['nome_parceiro'] ?><?php } ?>
                                                </a>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </li>
                            </ul>
                        <?php } ?>                
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
    <script type="text/javascript">
        let dropdownMenu = document.querySelector(".dropdown-menu");
        let dropdownMenuResponsive = document.querySelector("#responsive-list");        
        function changeDNone() {            
            dropdownMenu.style.display == "" ? dropdownMenu.style.display = "block" : dropdownMenu.style.display = "";            
        }   
        function changeDNoneResponsive() {            
            dropdownMenuResponsive.style.display == "" ? dropdownMenuResponsive.style.display = "block" : dropdownMenuResponsive.style.display = "";
            if (dropdownMenuResponsive.style.display == "block") {
                dropdownMenuResponsive.style.backgroundColor = "#051561";
                dropdownMenuResponsive.style.position = "relative";
                dropdownMenuResponsive.style.left = "39px";                
            }
        }     
    </script>

    