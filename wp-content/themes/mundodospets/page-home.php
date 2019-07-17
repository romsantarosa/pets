<?php get_header(); ?>
<main>
    
      <section class="slide"><?php motoPressSlider("demo-slider-1") ?></section>
 
	<?php get_template_part('custom-form'); ?>

    <div class="container publicidade-topo">
      <img src="https://mundodospets.com/wp-content/uploads/2019/03/banner-padrao-topo1140-100.png" alt="Mundo dos Pets"/>
    </div>

    <div class="container publicidade-topo-mobile">
      <img src="https://mundodospets.com/wp-content/uploads/2019/03/mobile-banner-topo.jpg" alt="Mundo dos Pets"/>
    </div>

  <section>
    <?php $destaque = new WP_Query('post_type=post&posts_per_page=1&cat_id');
      if($destaque->have_posts()):
        while($destaque->have_posts()):
          $destaque->the_post();
    ?>
        
    <?php get_template_part('content', 'destaque') ?>
        <?php 
          endwhile;
        wp_reset_postdata();
          endif;
        ?>
  </section>

  <section class="container noticia-secundaria ">
    <div class="n-s row text-center">
      <?php 
        $args = array(
          'post_type'   => 'post',
          'posts_per_page' => 8,
          'offset'       => 1,
          );
        $secundarias = new WP_Query($args);
          if($secundarias->have_posts()):
            while($secundarias->have_posts()):
            $secundarias->the_post();
      ?>

            <?php get_template_part('content', 'secundaria') ?>
            <?php 
              endwhile;
                wp_reset_postdata();
              endif;
            ?>
  </section>

    <div class="container publicidade-rodape">
      <img src="https://mundodospets.com/wp-content/uploads/2019/03/banner-padrao-rodape1140-100.png" alt="Mundo dos Pets">
    </div>

    <div class="container publicidade-topo-mobile">
        <img src="https://mundodospets.com/wp-content/uploads/2019/03/mobile-banner-rodape.jpg" alt="Mundo dos Pets">
    </div>
</main>
<?php get_footer(); ?>