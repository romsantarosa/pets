   <div class="acf-map">
       <?php $location = get_field('mapa');
		if( !empty($location) ):?>
       <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
       </div>
       <?php endif; ?>
   </div>

   <div class="list-group-item text-center">
       <div><?php the_post_thumbnail('medium', array('class' => 'img'));?></div>

       <div class="title-pet text-center">
           <h2><?php the_title(); ?></h2>
           <h5><?php the_excerpt(); ?></h5>
       </div>
   </div>

      <div class="img-size">
   <?php the_field( 'servicos' ); ?>
   </div>

   <div class="content"><?php the_content(); ?></div>
   <hr>

