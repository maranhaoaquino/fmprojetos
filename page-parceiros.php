<?php
// Template Name: Parceiros
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="margin-top-custom">
        <section class="container mt-5">
            <div class="row text-center">
                <h2><?php echo the_title(''); ?></h2>
            </div>
        </section>     
        <section  class="container mt-3">
            <div class="row">
                <?php $marca_parceiro = get_field_cmb2('marca_parceiro'); if(!empty($marca_parceiro)) { ?>
                        <?php foreach($marca_parceiro as $parceiro) { ?>
                            <?php if(!empty($parceiro['logo_parceiro'])) { ?>
                            <div class="col-6 col-sm-3">
                                <a  class="remove-text-decoration" href="<?php if(!empty($parceiro['link_parceiro'])) { ?><?php echo $parceiro['link_parceiro'] ?><?php } ?>">
                                    <img class="img-parceiro" src="<?php echo $parceiro['logo_parceiro'] ?>" alt="<?php if(!empty($parceiro['nome_parceiro'])) { ?><?php echo $parceiro['nome_parceiro'] ?><?php } ?>">
                                    <?php if(!empty($parceiro['nome_parceiro'])){?><h3 class="text-center"><?php echo $parceiro['nome_parceiro'] ?></h3><?php } ?>
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