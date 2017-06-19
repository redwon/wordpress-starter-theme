<?php get_header(); ?>

	<main id="main" class="page-main" role="main">

		<section class="error-404 not-found">

			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'theme' ); ?></h1>
			</header>

			<div class="page-content">
				<?php get_search_form(); ?>
			</div>

		</section>

	</main>

<?php get_footer(); ?>
