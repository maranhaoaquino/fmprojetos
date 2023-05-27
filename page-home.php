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
                    <?php if(!empty($slide['img_slide']) || !empty($slide['video_link'])) { ?>
                        <div class="item">
                            <?php if (!empty($slide['video_link'])) { ?>
                                <iframe class="img-slides" width="100%" height="100%" src="<?php echo $slide['video_link']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <?php } else { ?>
                                <a href="<?php if(!empty($slide['link_slide'])) { ?><?php echo $slide['link_slide'] ?><?php } ?>">
                                    <img class="img-slides" src="<?php echo $slide['img_slide'] ?>">
                                    <div id="grid-slider">
                                        <?php if(!empty($slide['title_slide'])) { ?><h2><?php echo $slide['title_slide'] ?></h2><?php } ?>
                                        <?php if(!empty($slide['subtitle_slide'])) { ?><p><?php echo $slide['subtitle_slide'] ?></p><?php } ?>
                                    </div>
                                </a>
                            <?php } ?>
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
                    video: true,
                    merge:true,
                    navText: [
                        "<i class='fa fa-chevron-left'></i>",
                        "<i class='fa fa-chevron-right'></i>"
                    ],
                });
            </script>
            <!-- PARCEIROS -->
            <?php $parceiros = get_page_by_title('Nossos Parceiros')->ID; ?>
            <?php $marca_parceiro = get_field_cmb2('marca_parceiro', $parceiros); 
                if(!empty($marca_parceiro)) {
            ?>
                <div class="container mt-5">
                    <div class="row text-center">
                        <h2 class="titulo-home"><?php if (!empty(get_field_cmb2('title-parceiros'))) { ?><?php the_field_cmb2('title-parceiros'); ?><?php }else{ ?>Nossos <span class="bold-titulo">Parceiros</span><?php } ?></h2>
                        <?php if (!empty(get_field_cmb2('subtitle-parceiros'))) { ?><p><?php the_field_cmb2('subtitle-parceiros'); ?></p><?php } ?>
                    </div>
                    <div class="row mt-3">
                        <div  class="owl-carousel owl-theme carrossel--home">
                            <?php foreach($marca_parceiro as $slide) { ?>
                                <?php if(!empty($slide['logo_parceiro'])){?>
                                    <div class="item" id="parceiros-hover">
                                        <a <?php if(!empty($slide['link_parceiro'])){?>href="<?php echo $slide['link_parceiro'] ?>"<?php } else { ?>href="#"<?php } ?> >
                                            <img src="<?php echo $slide['logo_parceiro'] ?>" >
                                            <?php if(!empty($slide['nome_parceiro'])){?><h3 class="text-center"><?php echo $slide['nome_parceiro'] ?></h3><?php } ?>
                                        </a>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- PRODUTOS -->
            <div class="container mt-5">
                <div class="row text-center">
                    <h2 class="titulo-home"><?php if (!empty(get_field_cmb2('title-produtos'))) { ?><?php the_field_cmb2('title-produtos'); ?><?php }else{ ?>OFERECEMOS O QUE HA DE MELHOR EM EQUIPAMENTOS. TECNOLOGIA, DESIGN, DURABILIDADE E PREÇO.<?php } ?></h2>
                    <p><?php if (!empty(get_field_cmb2('subtitle-produtos'))) { ?><?php the_field_cmb2('subtitle-produtos'); ?><?php }else{ ?>A FM Projetos, é uma empresa que atua na area de projetos e representação, e tem como a finalidade, levar o que ha de melhor em equipamentos e instalações para os seus clientes, para isso, reunimos os melhores fabricantes de Equipamentos para o setor de Varejo.<?php } ?></p>
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
                        <a href="/?tipo_de_produto=todos-produtos" class="btn btn-primary btn-black-home">
                            Veja nossos Produtos
                        </a>
                    </div>
                </div>                
            </div>     
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