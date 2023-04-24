<?php
// Template Name: Contato
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="template-middle">
        <h2><?php echo the_title('' )?></h2>
        <div class="page-contato-area">
            <div class="map">
                <iframe src="<?php the_field_cmb2('link_mapa');?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contatos">     
            
                <?php if (!empty(the_field_cmb2('telefone'))) { ?>
                    <div class="input-effect">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                            <?php the_field_cmb2('telefone'); ?>
                        </span>
                    </div>
                <?php } ?>

                <?php if (!empty(the_field_cmb2('email'))) { ?>
                    <div class="input-effect">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                            <?php the_field_cmb2('email'); ?>
                        </span>
                    </div>
                <?php } ?>

                <?php if (!empty(the_field_cmb2('endereco'))) { ?>
                    <div class="input-effect">
                        <i class="fa fa-street-view" aria-hidden="true"></i>
                        <span>
                            <?php the_field_cmb2('endereco'); ?>
                        </span>
                    </div>
                <?php } ?>

                <?php if (!empty(the_field_cmb2('whatsapp'))) { ?>
                    <div class="input-effect">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        <span>
                            <?php the_field_cmb2('whatsapp'); ?>
                        </span>
                    </div>
                <?php } ?>

                <?php if (!empty(the_field_cmb2('instagram'))) { ?>
                    <div class="input-effect">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <span>
                            <?php the_field_cmb2('instagram'); ?>
                        </span>
                    </div>
                <?php } ?>

                <?php if (!empty(the_field_cmb2('instagram'))) { ?>
                    <div class="input-effect">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        <span>
                            <?php the_field_cmb2('facebook'); ?>
                        </span>
                    </div>
                <?php } ?>                   
            </div>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>