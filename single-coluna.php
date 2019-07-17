<?php $css = array('single-coluna'); ?>
<?php #$js = array(''); ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="content-page" id="<?php echo get_category(get_query_var('cat'))->slug; ?>">
	<div class="middle-view">
		<div class="editoria">
			<div class="autor">
				<a href="<?php echo get_author_posts_url( get_the_author_meta("ID") ); ?>" class="thumb-colunista-top"><?php echo user_avatar_get_avatar(get_the_author_meta("ID"), 155); ?></a>
				<h1>
					<span><?php echo get_the_author_meta("assunto"); ?></span> <br />
				<?php the_author(); ?></h1>
			</div>
			<div class="sobre">
				<p><?php the_author_meta('description'); ?></p>
			</div>
		</div>
		<section class="content-left">
			
				<article class="post">

					<header id="post-header">
						<h1><?php the_title(); ?></h1>
						<div class="resumo">
							<?php echo get_post_meta( $post->ID, 'resumo_da_coluna', true ); ?>

						</div>
						<div class="data">
							<p class="date"><?php the_date('d \d\e\ F \d\e\ Y \- H:i'); ?></p>	
							
						</div>

						<?php get_template_part('elements/single-bar'); ?>
					</header>

					<div class="the-content">
						
						<?php
					$thumbnail_ID = get_post_thumbnail_id($post->ID);

					$has_gallery = get_post_meta( $post->ID, 'has_gallery', true );
					$args = array(
						'post_type' => 'attachment',
						'numberposts' => -1,
						'post_status' => null,
						'post_parent' => $id
						);
					$shots = get_posts($args);

					foreach ($shots as $key => $value) {
						if ($value->ID == $thumbnail_ID) {
							unset($shots[$key]);
						}
					}

					if ( ($shots && (count($shots) > 1)) && $has_gallery == 'Sim') {
						?>
						<div class="slide-noticias">

							<div id="carousel-noticias">
								<?php
								foreach ( $shots as $attachment ) { ?>
								<div class="image-noticia">
									<?php echo wp_get_attachment_image( $attachment->ID, 'post-gr' ); ?>
									<span class="label-photo"><?php echo $attachment->post_excerpt; ?></span>
								</div>
								<?php } ?>
							</div>

							<div class="setas">
								<span class="icones-not-prev"></span>
								<span class="icones-not-right"></span>
							</div>

							<div class="thumbs-slide-noticias">
								<div id="carousel-thumbs-noticias">
									<?php
									foreach ( $shots as $attachment ) {
										echo wp_get_attachment_image( $attachment->ID, 'post-slide-pq' );
									}
									?>
								</div>
							</div>
						</div>
						<?php
					}
					if((count($shots) == 1)){
						the_post_thumbnail('post-pq');
					}
					the_content(); ?>
					
					</div>
					<div id="comments">
						<?php comments_template(); ?>
					</div>
				</article>
			<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>
		</section><!-- / -->
		<div class="content-right">
			<?php get_sidebar(); ?>
		</div>	
	</div>
</section>
<?php get_footer(); ?>
