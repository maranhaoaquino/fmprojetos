<?php
// Template Name: Sobre
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main>
        <h2><?php the_title(); ?><h2>
        <div>
            <?php the_content(); ?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>