<?php get_header(); ?>

<main>

    <div class="container content-single">
        <?php 
            if(have_posts()) :
            while (have_posts()) : the_post(); 
            ?>
        <p><?php the_content(); ?></p>
        <?php 
            endwhile;
              endif;          
                 ?>
    </div>
    <?php get_template_part('content','lojas') ?>

	
</main>



<?php get_footer(); ?>

