<?php get_header(); ?>

<?php get_template_part('custom-form'); ?>

<section class="container">
	
    <div class="row">
        <div class="container">
            <?php 
        wp_reset_query();
         if(have_posts()) :
            while (have_posts()) : the_post(); 
  
                 get_template_part('content','search');
            endwhile; else: ?>
            <div class="container sorry"><br>
                <h2 class="erro">Desculpe! Não encontramos a palavra que estava procurando. Tente outra busca ou volte para a <a
                        href="index.php"> Home</a></h2>
                        
                <?php 
          endif; ?>
				
				
            </div>
         
            
        </div>
    </div>




<br>
<div class="page-numebers text-center">
	<?php wordpress_pagination(); ?>
	</div>
<br>




    
</section>

<?php get_footer(); ?>