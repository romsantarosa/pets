<article>
    <div class="list-group col-md-">


        <div class="d-flex w-100 justify-content-between">
            <a
                href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-curiosidade'));?></a>

        </div>

        <div class="d-flex w-100 justify-content-between">
            <a class="ti-curi" href="<?php the_permalink(); ?>">
                <h5 class="ti-curi"><?php the_title(); ?></h5>
            </a>

        </div>
        <p class="mb-1"><?php the_excerpt(); ?></p>
        <small><?php echo get_the_date(); ?></small>



    </div>

</article>