<?php
/**
 * Locations taxonomy archive
 */
get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

  <main>
    <div id="slide-principal" class="owl-carousel owl-theme">
      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
        <?php $fotos_equipamentos = get_field_cmb2('fotos_equipamentos'); if(!empty($fotos_equipamentos)) { ?>
          <?php foreach($fotos_equipamentos as $slide) { ?>
            <?php if(!empty($slide['foto_equipamento'])) { ?>
              <div class="item">
                <a href="<?php the_permalink(); ?>">
                  <img class="img-slides" src="<?php echo $slide['foto_equipamento'] ?>">
                    <div id="grid-slider">
                      <h2><?php the_title();?></h2>
                    </div>
                </a>
              </div>
            <?php } ?>
          <?php } ?>
        <?php } ?>
      <?php endwhile; ?>
    </div>
    <script>
      $('#slide-principal').owlCarousel({
        loop:false,
        nav:true,
        items: 1,
        dots: true,
        navText: [
          "<i class='fa fa-chevron-left'></i>",
          "<i class='fa fa-chevron-right'></i>"
        ],
      });
    </script>
    <?php endif; ?>
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