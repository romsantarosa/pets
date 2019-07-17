<?php get_header(); ?>
<div id="primary">
    <main id="main">
        <?php get_template_part('custom-form'); ?>
                   
          
            <div class="container noticias">
                <?php
					while(have_posts()): the_post();
						get_template_part('content', 'single');
				?>

                <?php 

					endwhile;
    			?>
				<br>
<div class="page-numebers text-center">
	<?php wordpress_pagination(); ?>
	</div>
<br>
            </div>


    </main>

</div>


<?php get_footer(); ?>