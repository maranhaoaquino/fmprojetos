<?php
// Template Name: Single Projetos
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="template-middle">
        <h2><?php the_title(); ?><h2>
        <?php $slide_projeto = get_field_cmb2('slide_projeto'); 
            if(isset($slide_projeto)) {
        ?>
                <div id="slide-projeto" class="owl-carousel owl-theme">
                    <?php foreach($slide_projeto as $slide) { ?>
                        <div class="item">
                            <img src="<?php echo $slide['foto_projeto'] ?>">
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <script>
                    $('#slide-projeto').owlCarousel({
                        loop:false,
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
        <div class="page-sobre-area">            
                <?php the_content(); ?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>