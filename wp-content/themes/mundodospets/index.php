<?php get_header(); ?>

    <?php get_template_part('custom-form'); ?>

<section class="container">
    <div class="row">
        <div class="col-sm-10">
            <?php 
                if(have_posts()) :
                while (have_posts()) : the_post(); 
            ?>
            <?php get_template_part('content', get_post_format()); ?>
            <?php 
            endwhile;
            ?>

        <div class="row">

            <?php 
              else: 
            ?>
            <p>--- Não há conteúdo para mostrar! ---</p>
            <?php 
          endif;          
            ?>

        </div>
    </div>
    
        <aside class="barra-lateral-tags col-md-2">
            <div class="video-destaque">Espaço das ONGs</div>
            <?php get_sidebar('ongs') ?>
            <hr>
            <div class="publicidade-colunistas">
            <img src="https://mundodospets.com/wp-content/uploads/2019/02/banner-160-400.png" alt="Publicidade">
        </div>
            <hr>
            <div class="publicidade-colunistas">
            <img src="https://mundodospets.com/wp-content/uploads/2019/02/banner-167-624.png" alt="Publicidade">
        </div>
        </aside>
    </div>
			 <br>
<div class="page-numebers text-center">
	<?php wordpress_pagination(); ?>
	</div>
<br>
</section>
<div class="container publicidade-rodape">
      <img src="https://mundodospets.com/wp-content/uploads/2019/03/banner-padrao-rodape1140-100.png" alt="Mundo dos Pets">
    </div>
<?php get_footer(); ?>