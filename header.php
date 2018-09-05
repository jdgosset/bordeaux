<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bordeaux
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bordeaux' ); ?></a>

	<header id="masthead" class="site-header">

		<H1>BORDEAUX</H1>
		
		<div class="plan">
			<ul>
				<li><a href=""></a>quartiers</li>
				<li><a href=""></a>plans</li>
			</ul>
		</div>

		<div class="recherche">
			<ul>
				<li><a href=""></a>Aller au contenu</li>
				<li><a href=""></a>Accessibilité</li>
				<li><a href=""></a>Plan du site</li>
			</ul>

			<input type="text" name="" value="">
		</div>


	</header><!-- #masthead -->

	<nav>
		<img src="" alt="">
		<ul>
			<li>bordeaux et vous</li>
			<li>pratique</li>
			<li>decouvrir et sortir</li>
			<li>entreprendre</li>
			<li>bordeaux politique</li>
		</ul>
	</nav>
	<div id="content" class="site-content">
