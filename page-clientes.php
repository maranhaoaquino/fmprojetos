<?php
// Template Name: Clientes
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="template-middle">
        <h2><?php echo the_title(''); ?></h2>        
        <section  class="section-logos">
            <div class="four-logos">
                <?php $marca_cliente = get_field_cmb2('marca_cliente'); if(isset($marca_cliente)) { ?>
                        <?php foreach($marca_cliente as $cliente) { ?>
                            <a href="<?php echo $cliente['link_cliente'] ?>">
                                <img src="<?php echo $cliente['logo_cliente'] ?>" alt="<?php echo $cliente['nome_cliente'] ?>">
                            </a>
                        <?php } ?>
                <?php } ?>
            </div>
        </section>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>