<?php
$posts = getLastCollums(2);
query_posts( 
	array( 
		'post_type'	=> 'colunas',
		'post__in'	=> $posts
		)
	); 
?>

<div class="colunas">
	<h1>Colunas</h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="colunista">
		<a href="<?php the_permalink(); ?>"><?php echo user_avatar_get_avatar(get_the_author_meta("ID"), 140); ?></a>
		<div class="ttl">
			<p><a href="<?php the_permalink(); ?>"><?php the_author(); ?><span><?php the_title(); ?></span></a></p>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>