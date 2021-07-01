<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Friendly
 */

get_header();
?>
<div id="block1" class="block1">
			<h4>Our approach to reach your business goals</h4>
			<div class="block__col">
			<div class="block1__col block1__col--first">
				<div class="block1__title"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Icon Group1.png" alt=""></div>	
				<ul class="detals">
					<li>
						Ideate
					</li>
					<li>
						Turn your idea from concept to MVP
					</li>
				</ul>
			</div>
			<div class="block1__col block1__col--second">
				<div class="block1__title"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Icon Group2.png" alt=""></div>	
				<ul class="detals">
					<li>
						Design
					</li>
					<li>
						Sketch out the product to align the user needs			
					</li>
				</ul>
			</div>
			<div class="block1__col block1__col--thirt">
				<div class="block1__title"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Icon Group3.png" alt=""></div>	
				<ul class="detals">
					<li>
						Develop
					</li>
					<li>
						Convert the designs into a live application
					</li>
				</ul>
			</div>
			<div class="block1__col block1__col--quarter">
				<div class="block1__title"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Feature Icon with circle.png" alt=""></div>	
				<ul class="detals">
					<li>
						Deploy
					</li>
					<li>
						Launching the application to the market
					</li>
				</ul>
			</div>
		</div>
		</div>

		<div id="block2" class="block2"> <h4>All app screens</h4>

      <div  class="regular slider">
            <div><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Mobile-iPhone X.png" alt=""></div>
            <div><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Mockup-2.png" alt=""></div>
            <div><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Mockup-3.png" alt=""></div>
            <div><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Mobile-iPhone X.png" alt=""></div>
            
        </div>
	
       </div>
  


       <div class="Contact" id="Contact">
       	<div class="contimg"> <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Creative.svg" alt="Contact Form" class="contimg"></div>
       	<div class="form"><h4>Contact Form</h4>
       		<form class="subskray" action="/" method="post">
       			<div class="inpN"><input class="subskray__input" type="text" name="Name" placeholder="Name"></div>
       			<div class="inpF"><input class="subskray__input" type="fon" name="Number" placeholder="Number"></div>
       			<div class="inpe"><input class="subskray__input" type="email" name="@email" placeholder="@email"></div>
       			<div><button type="subskray__btn">Sand</button></div>
       		</form>
       	</div>
       </div>
	

<?php

get_footer();
