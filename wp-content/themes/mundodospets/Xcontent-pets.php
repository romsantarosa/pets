<?php get_template_part('custom-form'); ?>
<div class="container ui raised segment stackable grid">
    <div class="four wide column">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'img-search'));?></a>
    </div>

    <div class="twelve wide column">
        <h3><a class="titulo-destaque"
                href="<?php the_permalink(); ?> "><?php the_title(); ?></a>
        </h3>

            <div class="ui green right ribbon label">Serviços Disponíveis</div>

            <div class="end-pet">
                <h6><?php the_excerpt(); ?></h6>
            </div>
    </div>
</div>