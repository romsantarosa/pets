<?php get_header(); ?>

<main class="container">
    <div class="sobrenostopo">
        <img src="https://mundodospets.com/wp-content/uploads/2019/03/aboutus1170.png" alt="Sobre nós">
    </div>

    <div class="sobrenostopo-mobile">
        <img src="https://mundodospets.com/wp-content/uploads/2019/03/cachorro-oculos-missao-e-visao.jpg" alt="Sobre nós">
    </div>
    
    <div class="content-single-sobre">
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
</main>
<?php get_footer(); ?>