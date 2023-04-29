<?php
/**
 * Locations taxonomy archive
 */
get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

  <main>
    <section class="container mt-5">
      <div class="row text-center">
        <h2 class="archive-title"><?php echo apply_filters( 'the_title', $term->name ); ?></h2>
      </div>
    </section>
    <section class="container mt-3">
      <div class="row">
        <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
          <?php include(TEMPLATEPATH . "/inc/card-produtos.php"); ?>
        <?php endwhile; ?>
      </div> 
    </section>
    
    
    <section class="container mt-3">
      <div class="navigation clearfix">
        <div class="alignleft"><?php next_posts_link('« Previous Entries') ?></div>
        <div class="alignright"><?php previous_posts_link('Next Entries »') ?></div>
      </div>

      <?php else: ?>
      <section class="container mt-5">
        <h2 class="post-title">No News in <?php echo apply_filters( 'the_title', $term->name ); ?></h2>
        <div class="content clearfix">
          <div class="entry">
            <p>It seems there isn't anything happening in <strong><?php echo apply_filters( 'the_title', $term->name ); ?></strong> right now. Check back later, something is bound to happen soon.</p>
          </div>
        </div>
      </section>

      <?php endif; ?>
    
    </section>  
  </main>

<?php get_footer(); ?>