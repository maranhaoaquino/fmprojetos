
    <footer>
        <!-- FORMULARIO DE CONTATO -->
            <section class="contato-email">
                <div class="svg-footer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100px" viewBox="0 0 1280 140" preserveAspectRatio="none"><g fill="#ffffff"><path d="M640 140L1280 0H0z" fill-opacity=".5"/><path d="M640 98l640-98H0z"/></g></svg>
                </div>
                <div class="container mt-5">
                    <form action="https://formsubmit.co/will.santos97@hotmail.com" class="d-flex flex-column align-items-center" method="POST">
                            <div class="row mb-3">
                                <div class="col-10 col-sm-4 d-flex flex-column ">
                                    <label class="label-form" for="nome">Nome: </label>                        
                                    <input type="text" name="nome" id="nome" placeholder="Seu Nome" class="input-type-a" required>
                                </div>
            
                                <div class="col-10 col-sm-4 d-flex flex-column ">
                                    <label class="label-form" for="email">Email: </label>
                                    <input type="email" name="email" id="email" class="input-type-a" placeholder="seuemail@email.com" required>
                                </div>
            
                                <div class="col-10 col-sm-4 d-flex flex-column ">
                                    <label class="label-form" for="celular">Celular: </label>
                                    <input type="celular" name="celular" id="celular" placeholder="(99) 99999-9999" class="input-type-a">
                                </div>
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="col-10 d-flex flex-column ">
                                    <label class="label-form" for="">Mensagem:</label>
                                    <textarea name="mensagem" id="textAreaCustom" class="w-100"  required></textarea>
                                </div>      
                            </div>
                            <div class="row mt-3">
                                <div class="col-10 col-sm-6 d-flex justify-content-center">
                                    <button type="submit"  class="btn-enviar w-100">Enviar</button>
                                </div>
                            </div>                    
                    </form>
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
                            <li>
                                <a href="<?php the_field_cmb2('instagram', $contatos); ?>" target="_blank">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>        
    </footer>
    <div class="whatsapp">
        <a href="https://wa.me/5571993295049" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/zapquadrado.png" alt="botão whatsapp"></a>
    </div>
    <?php wp_footer(); ?>
</body>
</html>