<?php
// Template Name: Sobre
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="container p-5">
        <section class="row text-center mt-3">
            <h2><?php the_title(); ?><h2>
        </section>
        <section class="row justify-content-center mt-3">            
            <?php the_content(); ?>
        </section>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>