<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Friendly
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
	<?php wp_body_open(); ?>
	<header id="header" class="header">
		<div class="container">
			<div class="nav">
				<img src="img/Logo.png" alt="Friendly" class="logo">
				<ul class="menu">
					<li>
						<a href="#">
							About
						</a>
					</li>
					<li>
						<a href="#">
							Product
						</a>
					</li>
					<li>
						<a href="#">
							Pricing
						</a>
					</li>
					<li>
						<a href="#">
							Resources
						</a>
					</li>
					<li>
						<a href="#">
							Jobs
						</a>
					</li>
				</ul>
				<a href="#" class="btn">Login</a>
				<a href="#" class="btn">Sign_up</a>
            </div>
            <div class="Hero">
				<div class="Group">
					<h1>Friendly App</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
					odio in et, lectus sit lorem id integer.
					</p>
					<a href="#" class="btn3">Get Started</a>
				</div>	
				<div class="ill">

					<img src="img/ill.svg" alt="Friendly" class="ill">
				</div>
			</div>	
		</div>

		

	</header>




