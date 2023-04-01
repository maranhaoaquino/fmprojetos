<div class="col-6 col-md-4">
    <a href="<?php the_permalink(); ?>" rel="bookmark">
        <div class="card card-produto" id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>
            <div class="card-header">
                <img src="<?php the_field_cmb2('imagem_principal_produto'); ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="card-body">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><h5><?php the_title(); ?></h5></a>
                <a href="<?php the_permalink(); ?>" rel="bookmark" class="btn-preco">
                    Preço Sob Consulta
                </a>
                <?php the_excerpt(); ?>
            </div>
        </div>
    </a>
</div>