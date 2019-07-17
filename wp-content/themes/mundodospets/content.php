<section class="conteudos">

    <div class="list-group-item list-group-item-action">
        <div class="content-single-search">
            <div class="ui four wide column">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'img-search'));?></a>
            </div>

            <div class="ui twelve wide column">
                <h5><a class="titulo-destaque" href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h5>

                    <p><?php the_excerpt(); ?></p>

            </div>
        </div>
    </div>
    
</section>