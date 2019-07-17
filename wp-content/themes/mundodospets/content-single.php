<div class="content-single-geral">
    <article>
        <div class="label-categoria-destaque"><?php the_category( ' '); ?></div><br>
        <h1><?php the_title(); ?></h1>


            <div class="hora-postagem">
                <p><?php echo get_the_date(); ?></p>
            </div>

            <div class="postagem-autor">
                <p>Por: <?php the_author_posts_link(); ?></p>
            </div>

            <div class="tag-postagem">
                <p><?php the_tags('Tags: ', ' , '); ?></p>
            </div>
        <hr>

		<div class="postagem-excerpt">
		    <h4><?php the_excerpt(); ?></h4>
		</div>
		
        <hr>
        <div class="content"><?php the_content(); ?></div>
        <hr>
    </article>
	
	
	
</div>