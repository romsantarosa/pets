<?php get_header(); ?>
<div id="primary">
    <main id="main">
        <div class="container">
       
            <div class="container noticias m-1">
                <?php
						while(have_posts()): the_post();
							get_template_part('content', 'petshops');

					?>
                <?php 
						endwhile;
				wp_reset_postdata();
						  ?>

            </div>
            <!--<aside class="barra-lateral-tags col-md-3">barra lateral</aside>-->
        </div>
    </main>
</div>

<?php get_footer(); ?>