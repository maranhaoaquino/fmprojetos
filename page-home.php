<?php
// Template Name: Home
?>
<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <main>
            <!-- Slide Principal -->
            <?php $slide_principal = get_field_cmb2('slide_principal'); 
                if(isset($slide_principal)) {
            ?>
            <div id="slide-principal" class="owl-carousel owl-theme">
                <?php foreach($slide_principal as $slide) { ?>
                    <div class="item">
                        <a href="<?php echo $slide['link_slide'] ?>">
                            <img src="<?php echo $slide['img_slide'] ?>">
                            <h2><?php echo $slide['title_slide'] ?></h2>
                            <p><?php echo $slide['subtitle_slide'] ?></p>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <?php } ?>
            <script>
                $('#slide-principal').owlCarousel({
                    loop:true,
                    nav:true,
                    items: 1,
                    dots: true
                });
            </script>
            <!-- PRODUTOS -->
            <div class="componentes-home">
                <h2>Nossos Produtos</h2>
                <!-- ESPAÇO PARA OS CARD DOS PRODUTOS -->
                <div class="lista-produtos">
                    <?php
                        $args = array (
                            'post_type' => 'produtos',
                            'order'   => 'ASC'
                        );
                        $the_query = new WP_Query ( $args );
                    ?>

                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                            <div class="card" id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>
                                <div class="card-header">
                                    <img src="<?php the_field_cmb2('imagem_principal_produto'); ?>" alt="<?php the_title(); ?>" height="100%">
                                </div>
                                <div class="card-body">
                                    <h5><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h5>
                                    <a href="<?php the_permalink(); ?>" rel="bookmark" class="btn-preco">
                                        Preço Sob Consulta
                                    </a>
                                    <p>
                                    <?php the_content( __('Full story…') ); ?>
                                    </p>
                                </div>
                            </div>
                        </a>

                    <?php endwhile; else: endif; ?>
                    <?php wp_reset_query(); wp_reset_postdata(); ?>           
                </div>

                <button class="btn-black-home">
                    Veja nossos Produtos
                </button>
            </div>
            <!-- Qualidade -->
            <div class="componentes-home">
                <h2>Qualidade Garantida</h2>
                <!-- Slide Principal -->
                <?php $vantagens = get_field_cmb2('vantagens'); 
                    if(isset($vantagens)) {
                ?>
                <div id="vantagens">
                    <?php foreach($vantagens as $vantagem) { ?>
                        <div class="vantagem">
                            <img src="<?php echo $vantagem['img_vantagens'] ?>">
                            <h3><?php echo $vantagem['title_vantagens'] ?></h3>
                            <p><?php echo $vantagem['subtitle_vantagens'] ?></p>
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <!-- Qualidade -->
            <div class="orcamento-projeto">
                <h2>Faça seu projeto conosco</h2>
                <a href="#orçamento" class="btn-primary">Fale com a gente</a>
            </div>
            <!-- PROJETOS -->
            <div class="componentes-home">
                <h2>Projetos Realizados</h2>                
                    <div class="fotos-projetos">
                        <?php
                            $args = array (
                                'post_type' => 'projetos',
                                'order'   => 'ASC'
                            );
                            $the_query = new WP_Query ( $args );
                        ?>
                        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" rel="bookmark">
                                <div id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>
                                    <?php $slide_projeto = get_field_cmb2('slide_projeto'); 
                                        if(isset($slide_projeto)) {
                                    ?>
                                    <div class="foto-projeto-home">
                                        <div class="item-css">
                                            <img src="<?php echo $slide_projeto[0]['foto_projeto'] ?>" class="img-projetos">
                                            <img src="<?php echo $slide_projeto[1]['foto_projeto'] ?>" class="img-projetos">
                                            <img src="<?php echo $slide_projeto[2]['foto_projeto'] ?>" class="img-projetos">
                                            <img src="<?php echo $slide_projeto[3]['foto_projeto'] ?>" class="img-projetos">
                                            <img src="<?php echo $slide_projeto[4]['foto_projeto'] ?>" class="img-projetos">
                                            <img src="<?php echo $slide_projeto[5]['foto_projeto'] ?>" class="img-projetos">
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </a>
                        <?php endwhile; else: endif; ?>
                        <?php wp_reset_query(); wp_reset_postdata(); ?>
                    </div>
                    <button class="btn-black-home">
                    Veja nossos Projetos
                </button> 
            </div>
            <!-- PARCEIROS -->
            <div class="componentes-home">
                <h2>Nossos Parceiros</h2>
                <?php $parceiros = get_page_by_title('Nossos Parceiros')->ID; ?>
                <?php $marca_parceiro = get_field_cmb2('marca_parceiro', $parceiros); 
                if(isset($marca_parceiro)) {
                ?>
                <div class="item-css">
                    <div id="slide-parceiros " class="owl-carousel owl-theme">
                        <?php foreach($marca_parceiro as $slide) { ?>
                            <div class="item">
                                <a href="<?php echo $slide['link_parceiro'] ?>">
                                    <img src="<?php echo $slide['logo_parceiro'] ?>">
                                    <h3><?php echo $slide['nome_parceiro'] ?></h3>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
                <script>
                    $('#slide-parceiros').owlCarousel({
                        loop:true,
                        nav:true,
                        dots: true,
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
            </div>
            <!-- Clientes -->
            <div class="componentes-home">
                <h2>Nossos Clientes</h2>
                <?php $clientes = get_page_by_title('Nossos Clientes')->ID; ?>
                <?php $marca_cliente = get_field_cmb2('marca_cliente', $clientes); 
                if(isset($marca_cliente)) {
                ?>
                <div class="item-css">
                    <div id="slide-clientes" class="owl-carousel owl-theme">
                        <?php foreach($marca_cliente as $slide) { ?>
                            <div class="item">
                                <a href="<?php echo $slide['link_cliente'] ?>">
                                    <img src="<?php echo $slide['logo_cliente'] ?>">
                                    <h3><?php echo $slide['nome_cliente'] ?></h3>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
                <script>
                    $('#slide-clientes').owlCarousel({
                        loop:true,
                        nav:true,
                        dots: true,
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
            </div>       
        </main>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>