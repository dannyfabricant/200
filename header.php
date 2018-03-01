<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package michiko
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<a id='logo' href='/'>200RC</a>
	<div id='links'>
		<a class='link' href="#info">About</a>
		<a class='link' href="#facility">Facility</a>
		<a class='link' href="#pricing">Pricing</a>
		<a class='link' href="#contact">Contact</a>
	</div>
</header>
