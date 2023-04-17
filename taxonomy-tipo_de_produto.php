<?php
/**
 * Locations taxonomy archive
 */
get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

  <main class="template-middle">
    <h2 class="archive-title"><?php echo apply_filters( 'the_title', $term->name ); ?></h2>
    <div class="lista-produtos">
      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <a href="<?php the_permalink(); ?>" rel="bookmark">
        <div class="card" id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>
            <div class="card-header">
                <img src="<?php the_field_cmb2('imagem_principal_produto'); ?>" alt="<?php the_title(); ?>" height="100%">
            </div>
            <div class="card-body">
                <h5><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h5>
                <a href="<?php the_permalink(); ?>" rel="bookmark" class="btn-preco">
                    Preço Sob Consulta
                </a>
                <p>
                  <?php the_content( __('Full story…') ); ?>
                </p>
            </div>
        </div>
      </a>
      <?php endwhile; ?>

      <div class="navigation clearfix">
        <div class="alignleft"><?php next_posts_link('« Previous Entries') ?></div>
        <div class="alignright"><?php previous_posts_link('Next Entries »') ?></div>
      </div>

      <?php else: ?>

      <h2 class="post-title">Sem produtos <?php echo apply_filters( 'the_title', $term->name ); ?></h2>
      <div class="content clearfix">
        <div class="entry">
          <p>Produto em <strong><?php echo apply_filters( 'the_title', $term->name ); ?></strong> não encontrados</p>
        </div>
      </div>

      <?php endif; ?>
    </div>
  </main>

<?php get_footer(); ?>