<?php
// Template Name: Produtos
?>
<?php get_header(); ?>
        <?php
			$args = array (
				'post_type' => 'produtos',
				'order'   => 'ASC'
			);
			$the_query = new WP_Query ( $args );
		?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; endif; ?>
<?php wp_reset_query(); wp_reset_postdata(); ?>
<?php get_footer(); ?>