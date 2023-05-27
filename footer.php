<?php $parceiros = get_page_by_title('Nossos Parceiros')->ID; ?>
            <?php $marca_parceiro = get_field_cmb2('marca_parceiro', $parceiros); 
                if(!empty($marca_parceiro)) {
            ?>
                <div class="container mt-5">
                    <div class="row text-center">
                        <h2 class="titulo-home"><?php if (!empty(get_field_cmb2('title-parceiros'))) { ?><?php the_field_cmb2('title-parceiros'); ?><?php }else{ ?>Nossos <span class="bold-titulo">Parceiros</span><?php } ?></h2>
                        <?php if (!empty(get_field_cmb2('subtitle-parceiros'))) { ?><p><?php the_field_cmb2('subtitle-parceiros'); ?></p><?php } ?>
                    </div>
                    <div class="row mt-3">
                        <div class="owl-carousel owl-theme carrossel--footer">
                            <?php foreach($marca_parceiro as $slide) { ?>
                                <?php if(!empty($slide['logo_parceiro'])){?>
                                    <div class="item" id="parceiros-hover">
                                        <a <?php if(!empty($slide['link_parceiro'])){?>href="<?php echo $slide['link_parceiro'] ?>"<?php } else { ?>href="#"<?php } ?> >
                                            <img src="<?php echo $slide['logo_parceiro'] ?>" >
                                            <?php if(!empty($slide['nome_parceiro'])){?><h3 class="text-center"><?php echo $slide['nome_parceiro'] ?></h3><?php } ?>
                                        </a>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
    <footer class="mt-5">
        <!-- FORMULARIO DE CONTATO -->
            <section class="container">
                
                <div class="row">
                    <div class="col-12 col-sm-12- col-md-4 d-flex justify-content-center align-items-center flex-wrap">
                        <div class="logo">
                            <a href="<?php echo get_home_url(); ?>">
                                <?php
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    if ( has_custom_logo() ) {
                                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                    } else {
                                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                                    }
                                ?>
                                <h3 class="text-center"><?php echo get_bloginfo('name'); ?></h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12- col-md-4 d-flex justify-content-center align-items-center flex-wrap">
                        <div>

                            <?php $contatos = get_page_by_title('contatos')->ID; ?>
                            <?php if(!empty(get_field_cmb2('email', $contatos))){ ?>
                                <h4><?php the_field_cmb2('email', $contatos); ?></h4>
                            <?php } ?>
                            <?php if(!empty(get_field_cmb2('telefone', $contatos))){ ?>
                                <h4><?php the_field_cmb2('telefone', $contatos); ?></h4>
                            <?php } ?>                      
                            <ul class="lista-icones">
                                <?php if(!empty(get_field_cmb2('instagram', $contatos))){ ?>
                                <li>
                                    <a href="<?php the_field_cmb2('instagram', $contatos); ?>" target="_blank">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php if(!empty(get_field_cmb2('instagram', $contatos))){ ?>
                                <li>
                                    <a href="<?php the_field_cmb2('facebook', $contatos); ?>" target="_blank">
                                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12- col-md-4">
                        <div class="row mt-3 mb-3 text-center">
                            <h4>FALE COM UM ESPECIALISTA</h4>
                        </div>
                        <form id="contato-email" action="<?php echo get_template_directory_uri(); ?>/enviar.php" class="d-flex flex-column align-items-center form-footer mb-5" method="POST">
                            <div class="w-100 d-flex flex-column">
                                <label class="label-form" for="nome">Nome: </label>                        
                                <input type="text" name="nome" id="nome" placeholder="Seu Nome" class="input-type-a" required>
                            </div>
                            <div class="w-100 d-flex flex-column mt-2">
                                <label class="label-form" for="email">Email: </label>
                                <input type="email" name="email" id="email" class="input-type-a" placeholder="seuemail@email.com" required>
                            </div>
                            <div class="w-100 d-flex flex-column mt-2">
                                <label class="label-form" for="telefone">Celular: </label>
                                <input type="celular" name="telefone" id="telefone" placeholder="(99) 99999-9999" class="input-type-a">
                            </div>
                            <div class="w-100 d-flex flex-column mt-2">
                                <label class="label-form" for="">Mensagem:</label>
                                <textarea name="mensagem" id="textAreaCustom" class="w-100"  required></textarea>      
                            </div> 
                            <div class="w-100 mt-2">
                                <button type="submit"  class="btn btn-secondary w-100">Enviar</button>
                            </div>                    
                        </form>                       
                    </div>
                </div>
            </section>                  
    </footer>
    <?php
		$whatsapp = str_replace('(', '', get_field_cmb2('whatsapp', $contatos));
		$whatsapp1 = str_replace(')', '', $whatsapp);
		$whatsapp2 = str_replace('-', '', $whatsapp1);
		$whatsapp3 = str_replace(' ', '', $whatsapp2);
	?>
    <?php if(!empty($whatsapp3)){ ?>
    <div class="whatsapp">
        <a id="apiWpp" href="https://api.whatsapp.com/send?phone=55<?php echo $whatsapp3;?>&text=Testando%20api" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/zapquadrado.png" alt="botão whatsapp"></a>
    </div>
    <?php } ?>
    
    <?php wp_footer(); ?>
    <script>
        $('.carrossel--footer').owlCarousel({
            loop:false,
            nav:true,
            dots: true,
            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
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
</body>
</html>