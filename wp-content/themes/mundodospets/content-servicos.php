  <!--<section class="serv-color col-12">
      <div class="container">
          <div class="row">
              <?php query_posts('post_type=servicos'); ?>

              <?php if(have_posts()): ?>
              <?php while(have_posts()): the_post(); ?>

              <div class="col-md-3">
                  <a href="<?php the_field('site'); ?>" target="_blank">
                      <i class="<?php the_field('icone'); ?>"></i>
                      <h3 class="my-2"><?php the_field('tipo_de_servico');?></h3>
                  </a>
                  <p class="m-3"><?php the_field('desc_serv');?></p>

              </div>
              <?php endwhile; ?>
              <?php else: ?>
              <p>Não há serviços cadastrados...</p>
              <?php endif; ?>
          </div>
      </div>
  </section>-->