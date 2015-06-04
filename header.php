<?php
/**
 * Header
 *
 * @package _k
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php get_current_template(false); ?>
	
	<header id="header" role="banner" class="line ptm">
		<div class="grid-3-1">
			<nav id="navigation" role="navigation">
				<ul class="menu-left">
					<li class="inbl"><a href="/" class="<?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'active' : '';  ?> icon-ic-md"></a></li>
					<li class="inbl"><a href="/category/sculptures/" class="<?php echo (substr($_SERVER['REQUEST_URI'], 0, 4) == '/cat') ? 'active' : '';  ?> icon-ic-travaux"></a></li>
					<li class="inbl"><a href="/expos" class="<?php echo ($_SERVER['REQUEST_URI'] == '/expositions/') ? 'active' : '';  ?> icon-ic-expos"></a></li>
					<li class="inbl"><a href="/biographie" class="<?php echo ($_SERVER['REQUEST_URI'] == '/biographie/') ? 'active' : '';  ?> icon-ic-bio"></a></li>
					<li class="inbl none"><a href="/contact" class="<?php echo ($_SERVER['REQUEST_URI'] == '/contact/') ? 'active' : '';  ?> icon-ic-mail-light"></a></li>
				</ul>
			</nav>	
		</div>

	</header>
