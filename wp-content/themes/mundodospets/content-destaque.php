<div class="container">
    <div class="row">
        <article class="col-md-6 col-sm-12 dest-princ">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-destaque'));?></a>
            <div class="label-categoria-destaque"><?php the_category(' '); ?></div>
            <a class="ti-dest" href="<?php the_permalink(); ?>">
                <h4 class="ti-dest"><?php the_title(); ?></h4></a>
            <div class="description">
                <div class="author col-md-12">
                    <i class="edit outline icon"></i><?php the_author();?>
                </div>
            </div>
            <div class="resumo-dest"><?php the_excerpt(); ?></div>
        </article>



        <aside class="col-md-4 col-sm-12 dest-vid">
            <div class="video-destaque">Vídeos</div>
            <div class="video"><?php get_sidebar('video') ?></div>
            <hr>
            <div class="video"><?php get_sidebar('video2') ?></div>
            <hr>
            <div class="publicidade-videos">
                <img src="https://mundodospets.com/wp-content/uploads/2019/02/banner-350-95.png" alt="Publicidade">
            </div>
        </aside>

        <aside class="col-md-2 col-sm-12 dest-colunistas">
        <div class="publicidade-colunistas">
            <img src="https://mundodospets.com/wp-content/uploads/2019/02/banner-167-624.png" alt="Publicidade">
        </div>
            <!--<div class="video-destaque">Colunistas</div>-->
            <!--<?php get_template_part('content','colunista') ?>
        </aside>
    </div>
        </section>
       

    </div>