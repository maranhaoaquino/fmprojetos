<?php
// Template Name: Contato
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main>
        <section class="container mt-5 text-center">
            <h2><?php echo the_title('' )?></h2>
        </section>
        <section class="container mt-3">
            <div class="page-contato-area">                
                <div class="contatos">     
                    <?php if (!empty(get_field_cmb2('telefone'))) { ?>
                        <div class="input-effect">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                <?php the_field_cmb2('telefone'); ?>
                            </span>
                        </div>
                    <?php } ?>

                    <?php if (!empty(get_field_cmb2('email'))) { ?>
                        <div class="input-effect">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                <?php the_field_cmb2('email'); ?>
                            </span>
                        </div>
                    <?php } ?>

                    <?php if (!empty(get_field_cmb2('endereco'))) { ?>
                        <div class="input-effect">
                            <i class="fa fa-street-view" aria-hidden="true"></i>
                            <span>
                                <?php the_field_cmb2('endereco'); ?>
                            </span>
                        </div>
                    <?php } ?>

                    <?php if (!empty(get_field_cmb2('whatsapp'))) { ?>
                        <div class="input-effect">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            <span>
                                <?php the_field_cmb2('whatsapp'); ?>
                            </span>
                        </div>
                    <?php } ?>

                    <?php if (!empty(get_field_cmb2('instagram'))) { ?>
                        <div class="input-effect">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <a href="<?php the_field_cmb2('instagram'); ?>">
                                <?php the_field_cmb2('instagram'); ?>
                            </a>
                        </div>
                    <?php } ?>

                    <?php if (!empty(get_field_cmb2('instagram'))) { ?>
                        <div class="input-effect">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            <span>
                                <?php the_field_cmb2('facebook'); ?>
                            </span>
                        </div>
                    <?php } ?>                   
                </div>
            </div>
        </section>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>