<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FreshKicks
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

<<<<<<< HEAD
	<header class="site-header">
		<div class="site-branding">
			<div class="header-padding"></div>
			<div class="site-logo">
				<h2>FRESH KICKS LOGO</h2>
			</div>
			<div class="header-padding">
				<a href="https://www.facebook.com/">Facebook</a>
				<a href="https://www.instagram.com/">Instagram</a>
				<a href="https://twitter.com/">Twitter</a>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
		<div class="links">
			<a href="/">Home</a>
			<a href="/products.php">Products</a>
			<a href="/about.php">About</a>
			<a href="/contact.php">Contact</a>
			<a href="/blog.php">Blog</a>
=======

<header class="grid-container fluid site-header">
  <div class="grid-x grid-margin-x header-container site-branding">
    <div class="cell small-1 large-4 header-padding"></div>
    <div class="cell small-7 large-4 header-logo"><h2>FRESHKICKS</h2></div>
    <div class="cell small-1 large-4 header-padding socials">
			<a href="https://www.facebook.com/">Facebook</a>
			<a href="https://www.instagram.com/">Instagram</a>
			<a href="https://twitter.com/">Twitter</a>
		</div>
	</div>
	<nav id="site-navigation" class="grid-x grid-margin-x main-navigation">
	<div class="cell large-4 header-padding"></div>

		<div class="cell large-4">
			<div class="links">
				<a href="/">Home</a>
				<a href="/products">Products</a>
				<a href="/about">About</a>
				<a href="/contact">Contact</a>
				<a href="/blog">Blog</a>
			</div>
>>>>>>> master
		</div>
    <div class="cell large-4 header-padding"></div>

	</nav>
	
</header>

	<!-- #masthead -->

	<div id="content" class="site-content">
