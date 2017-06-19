<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

	<div class="page-content">
		<?php the_content(); ?>
	</div>

</article>
