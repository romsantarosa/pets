<?php get_header(); ?>

<div id="primary">
    <main id="main">
        <div class="container">
            <!--Espaço Publicidade-->
            <section class="publicidade-topo-tags"><br><br>Espaço Publicidade 1138x100</section>

            <div class="container noticias">
                <?php
						while(have_posts()): the_post();
							get_template_part('content', 'colunistas');

 



						?>
                <?php 
						endwhile;
						  ?>

            </div>
            <!--<aside class="barra-lateral-tags col-md-3">barra lateral</aside>-->
        </div>
    </main>
</div>

<?php get_footer(); ?>