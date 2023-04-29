<?php
// Template Name: Clientes
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main>
        <section class="container mt-5">
            <div class="row text-center">
                <h2><?php echo the_title(''); ?></h2>
            </div>
        </section>        
        <section class="container mt-3">
            <div class="row">
                <?php $marca_cliente = get_field_cmb2('marca_cliente'); if(!empty($marca_cliente)) { ?>
                        <?php foreach($marca_cliente as $cliente) { ?>
                            <?php if(!empty($cliente['logo_cliente'])) { ?>
                                <div class="col-6 col-sm-3">
                                    <a href="<?php if(!empty($cliente['link_cliente'])) { ?><?php echo $cliente['link_cliente'] ?><?php } ?>">
                                        <img src="<?php echo $cliente['logo_cliente'] ?>" alt="<?php if(!empty($cliente['nome_cliente'])) { ?><?php echo $cliente['nome_cliente'] ?><?php } ?>">
                                    </a>
                                </div>
                            <?php } ?>
                        <?php } ?>
                <?php } ?>
            </div>
        </section>
        <section class="container mt-3">
            <div class="row justify-content-center">
                <?php the_content(); ?>
            </div>
        </section>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>