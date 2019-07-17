
    <div class="sec">
        <img><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', 
                array('class' => 'img'));?></a>
        <div class="sec-info">
            <a class="ti-desta" href="<?php the_permalink(); ?>">
                <h5><?php the_title(); ?></h5>
            </a>

        </div>
        <div class="author">
            <i class="edit outline icon"></i><?php the_author();?>
        </div>

    </div>



