<?php
// Template Name: Contato
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main>
        <?php the_field_cmb2('telefone'); ?>
        <?php the_field_cmb2('email'); ?>
        <?php the_field_cmb2('endereco'); ?>
        <?php the_field_cmb2('whatsapp'); ?>
        <?php the_field_cmb2('instagram'); ?>
        <?php the_field_cmb2('facebook'); ?>
        <?php the_field_cmb2('link_mapa'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>