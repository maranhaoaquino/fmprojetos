<?php
// Template Name: Single Produtos
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="template-middle">
        <section class="produto-principal">
            <div class="img-produto">
                <img src="<?php the_field_cmb2('imagem_principal_produto') ?>">
            </div>
            <div class="descricao-produto">
                <h2 class="title-produto"><?php the_title(); ?></h2>
                <div class="description-produto"><?php the_content();  ?></div>
            </div>
        </section>
        <section class="produtos-secundarios">
            <?php $produtos_adicionais = get_field_cmb2('produtos_adicionais'); if(isset($produtos_adicionais)) { ?>
                <h3><?php the_title(); ?></h3>
                <div class="area-produtos-secundarios">
                    <?php foreach($produtos_adicionais as $produto) { ?>
                        <div class="card-produtos-secundarios">
                            <img src="<?php echo $produto['imagem_adicional'] ?>" width="222px" height="222px">
                            <p><?php echo $produto['descricao_adicional'] ?></p>
                        </div>                        
                        <?php } ?>
            
                </div>
            <?php } ?>
        </section>

    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>