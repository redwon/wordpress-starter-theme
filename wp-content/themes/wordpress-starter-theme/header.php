<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>

	<header class="page-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

		<nav class="main-nav" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'main-nav__list', 'container' => false ) ); ?>
		</nav>

	</header>
