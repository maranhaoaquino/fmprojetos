    <footer>
        <!-- FORMULARIO DE CONTATO -->
        <section class="contato-email">
            <form action="https://formsubmit.co/will.santos97@hotmail.com" id="formulario-email"  method="POST">
                <div class="form-div-a">
                    <div class="input-div">
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome" class="input-type-a" required>
                    </div>

                    <div class="input-div">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" class="input-type-a" required>
                    </div>

                    <div class="input-div">
                        <label for="celular">Celular: </label>
                        <input type="celular" name="celular" id="celular" class="input-type-a">
                    </div>
                </div>
                <div class="form-div-b">
                    <div class="input-div">
                        <label for="">Mensagem:</label>
                        <textarea name="mensagem" id="" cols="105" rows="30" required></textarea>
                    </div>     
                </div>
                <div class="form-div-a">
                    <div class="input-div">
                        <button type="submit" class="btn-enviar">Enviar</button>
                    </div>
                </div>
            </form>
        </section>
        <section class="footer-div">
            <div class="copyright">
                &copy;Todos os direitos Reservados
            </div>
            <div class="redes-sociais">
                <ul class="lista-icones">
                    <li>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </li>
                    <li>
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    </li>
                </ul>
            </div>
        </section>
    </footer>
    <div class="whatsapp">
        <a href="https://wa.me/5571993295049" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp-icone-1.png" alt="botão whatsapp"></a>
    </div>
    <?php wp_footer(); ?>
</body>
</html>