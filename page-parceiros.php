<?php
// Template Name: Parceiros
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="template-middle">
        <h2><?php echo the_title(''); ?></h2>      
        <section  class="section-logos">
            <div class="four-logos">
                <?php $marca_parceiro = get_field_cmb2('marca_parceiro'); if(isset($marca_parceiro)) { ?>
                        <?php foreach($marca_parceiro as $parceiro) { ?>
                            <a href="<?php echo $parceiro['link_parceiro'] ?>">
                                <img src="<?php echo $parceiro['logo_parceiro'] ?>" alt="<?php echo $parceiro['nome_parceiro'] ?>">
                            </a>
                        <?php } ?>
                <?php } ?>
            </div>
        </section>
        <section>
            <?php the_content(); ?>
        </section>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>