
    <footer class="mt-5">
        <!-- FORMULARIO DE CONTATO -->
            <section class="container">
                <div class="row">
                    <div class="col-12 col-sm-12- col-md-4">
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
                                <h3><?php echo get_bloginfo('name'); ?></h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12- col-md-4">
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
                    <div class="col-12 col-sm-12- col-md-4">
                        <div class="row mt-3 mb-3 text-center">
                            <h4>FALE COM UM ESPECIALISTA</h4>
                        </div>
                        <form id="contato-email" action="<?php echo get_template_directory_uri(); ?>/enviar.php" class="d-flex flex-column align-items-center" method="POST">
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
                                <button type="submit"  class="btn-enviar w-100">Enviar</button>
                            </div>                    
                        </form>                       
                    </div>
                </div>
            </section>            
            <section class="container">
                <div class="row mt-3">
                    <div class="col-6 d-flex justify-content-start">
                        &copy;Todos os direitos Reservados
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <ul class="lista-icones">
                            <?php $contatos = get_page_by_title('contatos')->ID; ?>
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
</body>
</html>