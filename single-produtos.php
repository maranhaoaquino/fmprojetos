<?php
// Template Name: Single Produtos
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main>
        <section class="container mt-5">
            <div class="row justify-content-center text-center ">
                <div class="col-12 col-sm-6">
                    <div class="border-img">
                        <img  src="<?php the_field_cmb2('imagem_principal_produto') ?>" width="100%" >
                    </div>
                </div>
                <div class="col-12 col-sm-6  d-flex flex-wrap align-items-start mt-5 p-5">
                        <div>
                            <h2 ><?php the_title(); ?></h2>
                            <?php the_content();  ?>
                        </div>
                    
                </div>            
            </div>
        </section>
        <?php $produtos_adicionais = get_field_cmb2('produtos_adicionais'); if(!empty($produtos_adicionais)) { ?>
            <section class="container mt-5">
                <div class="row justify-content-center text-center mt-3">
                        <h3><?php the_title(); ?></h3>
                </div>
            </section>
            <section class="container mt-5">
            <div class="row">
                <?php foreach($produtos_adicionais as $produto) { ?>
                    <div class="col-12 col-md-6">
                        <div class="card-produtos-secundarios border-img m-2">
                            <img src="<?php echo $produto['imagem_adicional'] ?>" width="222px" height="222px">
                            <p><?php echo $produto['descricao_adicional'] ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
        <?php } ?>
        <?php $fotos_equipamentos = get_field_cmb2('fotos_equipamentos'); if(!empty($fotos_equipamentos)) { ?>
            <section class="container mt-5">
                <div class="row justify-content-center text-center mt-3">
                        <h3>Fotos dos Equipamentos</h3>
                </div>
            </section>
            <section class="container mt-5">
                <div class="row">
                    <div id="slide-fotos" class="owl-carousel owl-theme carrossel--home">
                        <?php foreach($fotos_equipamentos as $slide) { ?>
                            <?php if(!empty($slide['foto_equipamento'])){?>
                                <div class="item">
                                    <img src="<?php echo $slide['foto_equipamento'] ?>">
                                    
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>          
            </section>
        <?php } ?>
    </main>
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
<?php endwhile; endif; ?>
<?php get_footer(); ?>