<?php
// Template Name: Projetos
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="template-middle">
        <h2><?php echo the_title('')?></h2>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>