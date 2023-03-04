<?php
// Template Name: Contato
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="template-middle">
        <h2><?php echo the_title('' )?></h2>
        <div class="page-contato-area">
            <div class="map">
                <iframe src="<?php the_field_cmb2('link_mapa');?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contatos">     
                <div class="input-effect">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>
                        <?php the_field_cmb2('telefone'); ?>
                    </p>
                </div>
                <div class="input-effect">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <p>
                        <?php the_field_cmb2('email'); ?>
                    </p>
                </div>
                <div class="input-effect">
                    <i class="fa fa-street-view" aria-hidden="true"></i>
                    <p>
                        <?php the_field_cmb2('endereco'); ?>
                    </p>
                </div>
                <div class="input-effect">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    <p>
                        <?php the_field_cmb2('whatsapp'); ?>
                    </p>
                </div>
                <div class="input-effect">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <p>
                        <?php the_field_cmb2('instagram'); ?>
                    </p>
                </div>
                <div class="input-effect">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    <p>
                        <?php the_field_cmb2('facebook'); ?>
                    </p>
                </div>
                                                                                                                                       
            </div>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>