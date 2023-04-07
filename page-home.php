<?php
// Template Name: Home
?>
<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <main>
            <!-- Slide Principal -->
            <?php $slide_principal = get_field_cmb2('slide_principal'); 
                if(!empty($slide_principal)) {
            ?>
            <div id="slide-principal" class="owl-carousel owl-theme">
                <?php foreach($slide_principal as $slide) { ?>
                    <?php if(!empty($slide['img_slide'])) { ?>
                        <div class="item">
                            <a href="<?php if(!empty($slide['link_slide'])) { ?><?php echo $slide['link_slide'] ?><?php } ?>">
                                <img src="<?php echo $slide['img_slide'] ?>">
                                <div id="grid-slider">
                                    <?php if(!empty($slide['title_slide'])) { ?><h2><?php echo $slide['title_slide'] ?></h2><?php } ?>
                                    <?php if(!empty($slide['subtitle_slide'])) { ?><p><?php echo $slide['subtitle_slide'] ?></p><?php } ?>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <?php } ?>
            <script>
                $('#slide-principal').owlCarousel({
                    loop:false,
                    nav:true,
                    items: 1,
                    dots: true,
                    navText: [
                        "<i class='fa fa-chevron-left'></i>",
                        "<i class='fa fa-chevron-right'></i>"
                    ],
                });
            </script>
            <!-- PRODUTOS -->
            <div class="container mt-5">
                <div class="row text-center">
                    <h2 class="titulo-home">Nossos <span class="bold-titulo">Produtos</span></h2>
                </div>
                <!-- ESPAÇO PARA OS CARD DOS PRODUTOS -->
                <div class="row mt-3 gy-4">
                    <?php
                        $args = array (
                            'post_type' => 'produtos',
                            'orderby' => 'ID',
                            'order'   => 'DESC',
                            'nopaging' => false,
                            'posts_per_page' => '6',
                            'post_status' => 'publish'
                        );
                        $the_query = new WP_Query ( $args );
                    ?>

                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php include(TEMPLATEPATH . "/inc/card-produtos.php"); ?>
                    <?php endwhile; else: endif; ?>
                    <?php wp_reset_query(); wp_reset_postdata(); ?>
                </div>

                <div class="row mt-3 justify-content-center">
                    <div class="col-8 col-sm-4">
                        <a class="btn btn-primary btn-black-home">
                            Veja nossos Produtos
                        </a>
                    </div>
                </div>
            </div>
            <!-- Qualidade -->
            <?php $vantagens = get_field_cmb2('vantagens'); 
                    if(!empty($vantagens)) {
            ?>
                <div class="container mt-5">
                    <div class="row text-center">
                        <h2 class="titulo-home">Qualidade <span class="bold-titulo">Garantida</span></h2>
                    </div>
                    <div class="row mt-4">
                        <?php foreach($vantagens as $vantagem) { ?>
                            <div class="col-4 col-sm-3">
                                <div class="card-qualidades">
                                    <?php if(!empty($vantagem['img_vantagens'])){ ?><img src="<?php echo $vantagem['img_vantagens']; ?>"><?php } ?>
                                    <?php if(!empty($vantagem['title_vantagens'])){ ?><h4 class="text-center"><?php echo $vantagem['title_vantagens']; ?></h4><?php } ?>
                                    <?php if(!empty($vantagem['subtitle_vantagens'])){ ?><p class="text-center"><?php echo $vantagem['subtitle_vantagens']; ?></p><?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <!-- Realizar Orçamento -->
            <div class="container-fluid mt-5 px-0" >
                <div id="fale-conosco-white" class="row text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-bg-fale-conosco-white.png" class="p-0" alt="">
                </div>
                
                <div id="fale-conosco-black" class="d-flex flex-column align-items-center text-center justify-content-center pt-5 pb-5" id="fale-conosco-img-black" style="background: url('<?php echo get_template_directory_uri(); ?>/img/img-fale-conosco-black.png')">                    
                    <div class="text-center">
                        <h2 class="titulo-fale-conosco ">Faça seu projeto conosco</h2>                    
                    </div>   
                    <div class="col-8 col-sm-4 mt-3">
                        <a class="btn btn-primary btn-black-home">
                            Fale com a gente
                        </a>
                    </div>
                </div>
            </div>
            <!-- PROJETOS -->
            <div class="container mt-5">
                <div class="row text-center">
                    <h2 class="titulo-home">Projetos <span class="bold-titulo">Realizados</span></h2> 
                </div>               
                <div class="row mt-3 gy-4">
                    <?php
                        $args = array (
                            'post_type' => 'projetos',
                            'orderby' => 'ID',
                            'order'   => 'DESC',
                            'nopaging' => false,
                            'posts_per_page' => '6',
                            'post_status' => 'publish'
                        );
                        $the_query = new WP_Query ( $args );
                    ?>
                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" rel="bookmark" class="col-6 col-md-4">
                            <div id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>
                                <?php $slide_projeto = get_field_cmb2('slide_projeto'); 
                                    if(!empty($slide_projeto)) {
                                ?>
                                    <img src="<?php echo $slide_projeto[0]['foto_projeto'] ?>" class="img-projetos">
                                <?php } ?>
                            </div>
                        </a>
                    <?php endwhile; else: endif; ?>
                    <?php wp_reset_query(); wp_reset_postdata(); ?>
                </div>
                <div class="row mt-3 justify-content-center">
                    <div class="col-8 col-sm-4">
                        <a class="btn btn-primary btn-black-home">
                            Veja nossos Projetos
                        </a>
                    </div>
                </div>
            </div>
            <!-- PARCEIROS -->
            <?php $parceiros = get_page_by_title('Nossos Parceiros')->ID; ?>
            <?php $marca_parceiro = get_field_cmb2('marca_parceiro', $parceiros); 
                if(!empty($marca_parceiro)) {
            ?>
                <div class="container mt-5">
                    <div class="row text-center">
                        <h2 class="titulo-home">Nossos <span class="bold-titulo">Parceiros</span></h2>
                    </div>
                    <div class="row mt-3">
                        <div id="slide-parceiros" class="owl-carousel owl-theme carrossel--home">
                            <?php foreach($marca_parceiro as $slide) { ?>
                                <?php if(!empty($slide['logo_parceiro'])){?>
                                    <div class="item">
                                        <a <?php if(!empty($slide['link_parceiro'])){?>href="<?php echo $slide['link_parceiro'] ?>"<?php } else { ?>href="#"<?php } ?>>
                                            <img src="<?php echo $slide['logo_parceiro'] ?>">
                                            <?php if(!empty($slide['nome_parceiro'])){?><h3><?php echo $slide['nome_parceiro'] ?></h3><?php } ?>
                                        </a>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- Clientes -->
            <?php $clientes = get_page_by_title('Nossos Clientes')->ID; ?>
            <?php $marca_cliente = get_field_cmb2('marca_cliente', $clientes); 
                if(!empty($marca_cliente)) {
            ?>
                <div class="container mt-5">
                    <div class="row text-center">
                        <h2 class="titulo-home">Nossos <span class="bold-titulo">Clientes</span></h2>
                    </div>
                    <div class="row mt-3">
                        <div id="slide-clientes" class="owl-carousel owl-theme carrossel--home">
                            <?php foreach($marca_cliente as $slide) { ?>
                                <?php if(!empty($slide['logo_cliente'])){?>
                                    <div class="item">
                                        <a <?php if(!empty($slide['link_cliente'])){?>href="<?php echo $slide['link_cliente'] ?>"<?php } else { ?>href="#"<?php } ?>>
                                            <img src="<?php echo $slide['logo_cliente'] ?>">
                                            <?php if(!empty($slide['nome_cliente'])){?><h3><?php echo $slide['nome_cliente'] ?></h3><?php } ?>
                                        </a>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>       
        </main>
    <?php endwhile; endif; ?>
    <script>
        $('.carrossel--home').owlCarousel({
            loop:false,
            nav:true,
            dots: true,
            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
            responsive:{
                0:{
                    items: 3,
                    margin: 10
                },
                711:{
                    items: 4,
                    margin: 20
                },
                1023:{
                    items: 6,
                    margin: 30
                }
            }
        });
    </script>
<?php get_footer(); ?>