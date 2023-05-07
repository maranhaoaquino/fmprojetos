<div class="col-12 col-md-4">
    <a href="<?php the_permalink(); ?>" rel="bookmark">
        <div class="card card-produto" onmouseover="setCardBody()" id="post-<?php the_ID(); ?>" <?php post_class('post clearfix'); ?>>
            <div class="card-header">
                <img src="<?php the_field_cmb2('imagem_principal_produto'); ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="card-body"  id="body-dynamic">
                <a href="<?php the_permalink(); ?>" rel="bookmark" class="card-produtos-titulo"><h5><?php the_title();?></h5></a>

                <?php the_excerpt(); ?>
            </div>
        </div>
    </a>
</div>
<script type="text/javascript">
    let bodyDynamic = document.querySelector(".card-body");
    
    function setCardBody() {
        console.log(bodyDynamic.style);
        bodyDynamic.style.display = "block"
        
    }

</script>