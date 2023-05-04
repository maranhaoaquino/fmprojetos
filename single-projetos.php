<?php
// Template Name: Single Projetos
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main>
        <section class="container mt-5">
            <div class="row text-center">
                <h2><?php the_title(); ?><h2>
            </div>
        </section>
        <section class="container mt-3 mb-3">
            <?php $slide_projeto = get_field_cmb2('slide_projeto'); ?>
            <?php if(!empty($slide_projeto)) { ?>
                <div id="slide-projeto" class="owl-carousel owl-theme">
                    <?php foreach($slide_projeto as $slide) { ?>
                        <div class="item img-project">
                            <img src="<?php echo $slide['foto_projeto']  ?> ">
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </section>
        <section class="container">
            <div class="row">
                <?php the_content(); ?>
            </div>
        </section>            
    </main>
<?php endwhile; endif; ?>
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
                items: 4,
                margin: 30
            }
        }
    });
</script>
<?php get_footer(); ?>