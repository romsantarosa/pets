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