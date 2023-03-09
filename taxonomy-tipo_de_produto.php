<?php
/**
 * Locations taxonomy archive
 */
get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>
<div class="wrapper">
  <div class="primary-content">
    <h1 class="archive-title"><?php echo apply_filters( 'the_title', $term->name ); ?></h1>

    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

    <div id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>
      <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      <div class="content clearfix">
        <img src="<?php the_field_cmb2('imagem_principal_produto'); ?>">
        <div class="entry">
          <?php the_content( __('Full story…') ); ?>
        </div>
      </div>
    </div><!--// end #post-XX -->

    <?php endwhile; ?>

    <div class="navigation clearfix">
      <div class="alignleft"><?php next_posts_link('« Previous Entries') ?></div>
      <div class="alignright"><?php previous_posts_link('Next Entries »') ?></div>
    </div>

    <?php else: ?>

    <h2 class="post-title">No News in <?php echo apply_filters( 'the_title', $term->name ); ?></h2>
    <div class="content clearfix">
      <div class="entry">
        <p>It seems there isn't anything happening in <strong><?php echo apply_filters( 'the_title', $term->name ); ?></strong> right now. Check back later, something is bound to happen soon.</p>
      </div>
    </div>

    <?php endif; ?>
  </div><!--// end .primary-content -->

<?php get_footer(); ?>