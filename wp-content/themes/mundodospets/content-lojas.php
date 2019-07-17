 <section class="container">
	 
	 
     <div class="row">
         <?php 
              $lojas = new WP_Query( array( 
                'post_type' => 'lojas',
                'orderby'   =>  'title',
                'order'   =>  'ASC'
             ));
              if($lojas->have_posts()):
                while($lojas->have_posts()):
                  $lojas->the_post();
                  ?>


  <?php get_template_part('content', 'search') ?>
         <?php 
              endwhile;
		 
                wp_reset_postdata();
              endif;
		 
               ?>
		 
     </div>

 </section>