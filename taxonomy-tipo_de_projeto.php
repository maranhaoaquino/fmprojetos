<?php
/**
 * Locations taxonomy archive
 */
get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

  <main class="template-middle">
    <h2 class="archive-title"><?php echo apply_filters( 'the_title', $term->name ); ?></h2>
    <div class="carrosseis-projetos">
      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <a href="<?php the_permalink(); ?>" rel="bookmark">
        <div id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>
          <div>
            <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
          </div>
          <?php $slide_projeto = get_field_cmb2('slide_projeto'); 
              if(isset($slide_projeto)) {
          ?>
            <div class="slide-projeto owl-carousel owl-theme">
              <?php foreach($slide_projeto as $slide) { ?>
                <div class="item">
                  <img src="<?php echo $slide['foto_projeto'] ?>">
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </a>
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
    </div>
  </main>
  <script>
    $('.slide-projeto').owlCarousel({
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

<?php get_footer(); ?>