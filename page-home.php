<?php
// Template Name: Home
?>
<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <main>
            <!-- CARROSSEL DE IMAGENS -->
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
            <div class="nossos-produtos">
                <h3>Nossos Produtos</h3>
                <!-- ESPAÇO PARA OS CARD DOS PRODUTOS -->
                <div class="lista-produtos">
                    <?php include(TEMPLATEPATH . "/inc/card.php"); ?>
                    <div class="card">
                        <div class="card-header">
                            <img src="./IMG/0ec170f6efd59b57b3f0961b3f8d5590.jpg" alt="" height="100%">
                        </div>
                        <div class="card-body">
                            <h5>Titulo 2</h5>
                            <button class="btn-preco">
                                Preço Sob Consulta
                            </button>
                            <p>
                                Nullam aliquam nisi eget condimentum vehicula.
                                Praesent semper imperdiet bibendum.
                                Suspendisse non ultricies augue.
                                Integer imperdiet felis quis tempus finibus.
                            </p>
                        </div>
                    </div>                
                </div>
                <button class="btn-mais-produtos">
                    Veja nossos Produtos
                </button>
            </div>
            <!-- PROJETOS -->
            <div class="projetos">
                <h3>Nossos Projetos</h3>
            </div>       
        </main>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>