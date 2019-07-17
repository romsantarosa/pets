<?php 
/*Template Name: Páginas Gerais */

 ?>

<?php get_header(); ?>

<section class="container">
    <div class="row">
        <!--<div class="ultimas-noticias col-md-2">Flash News</div> 
        <div class="scrolling col-md-10"> 
            <?php 
              if(is_active_sidebar('horizontal-scrolling')){
                  dynamic_sidebar('horizontal-scrolling');
                }
            ?>
        </div>    
    </div>-->
</section>

<!--Espaço Publicidade-->


<?php get_template_part('custom-form'); ?>
<!--Formulario de Serviços-->
<?php get_template_part('content-servicos'); ?>

<article class="container post-format-padrao">
    <div class="row">
        <div class="barr col-md-3"><br>
            <a
                href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'img-search'));?></a>
        </div>

        <div class="col-md-9">

            <h5 class="titulo-destaque"><a class="titulo-destaque"
                    href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h5>

            <p><?php the_excerpt(); ?></p>

        </div>
    </div>
    <hr>
</article>

<div class="conteudo-wrapper">
    <main>

        <div class="conteudo container">
            <?php 
          if(have_posts()) :
            while (have_posts()) : the_post(); 
      ?>

            <p><?php the_content(); ?></p>
            <?php 
      endwhile;
        else: 
          ?>
            <p>Não há conteúdo para mostrar!</p>
            <?php 
        endif;          
           ?>
        </div>
    </main>
</div>
	
	
<?php get_footer(); ?>