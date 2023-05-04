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
    
    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <section class="container mt-3">
        <div class="row">
          <a href="<?php the_permalink(); ?>" rel="bookmark">
            <div id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>
              <div class="text-align-start mt-3">
                <h3><a class="remove-text-decoration" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
              </div>
              <?php $slide_projeto = get_field_cmb2('slide_projeto'); 
                  if(!empty($slide_projeto)) {
              ?>
                <div class="slide-projeto owl-carousel owl-theme mt-3">
                  <?php foreach($slide_projeto as $slide) { ?>
                    <div class="item img-project">
                      <img src="<?php echo $slide['foto_projeto'] ?>">
                    </div>
                  <?php } ?>
                </div>
              <?php } ?>
            </div>
          </a>
        </div>
      </section>
    <?php endwhile; ?>
    
    <section class="container">
      <div class="navigation clearfix">
        <div class="alignleft"><?php next_posts_link('« Previous Entries') ?></div>
        <div class="alignright"><?php previous_posts_link('Next Entries »') ?></div>
      </div>
    </section>

    <?php else: ?>

      <section class="container mt-5">
        <h2 class="post-title">Nenhum projeto encontrado</h2>
        <div class="content clearfix">
          <div class="entry">
            <p>Nenhum projeto encontrado</p>
          </div>
        </div>
      </section>
    <?php endif; ?>
  </main>
  <script>
    $('.slide-projeto').owlCarousel({
      loop:false,
      nav:true,
      dots: true,
      navText: [
        "<i class='fa fa-chevron-left'></i>",
        "<i class='fa fa-chevron-right'></i>"
      ],
      responsive:{
        0:{
          items: 2,
          margin: 10
        },
        711:{
          items: 4,
          margin: 20
        }
      }
    });
  </script>

<?php get_footer(); ?>