<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * *
 * @package Friendly
 */

?>
	<div class="container">
		<div class="BFooter">
			<div class="footer__col footer__col--first">
				<div class="footer__title">Company</div>
				<ul class="footer__menu">
					<li>
						<a href="#">
							About Us
						</a>
					</li>
					<li>
						<a href="#">
							Blog
						</a>
					</li>
					<li>
						<a href="#">
							Careers
						</a>
					</li>
					<li>
						<a href="#">
							Contact Us
						</a>
					</li>
					<li>
						<a href="#">
							Jobs
						</a>
					</li>
				</ul>
			</div>
			<div class="footer__col footer__col--second"> 
				<div class="footer__title">Support</div>
				<ul class="footer__menu">
					<li>
						<a href="#">
							Help Center
						</a>
					</li>
					<li>
						<a href="#">
							Safety Center
						</a>
					</li>
					<li>
						<a href="#">
							Community Guidelines
						</a>
					</li>
					</ul>
			</div>
			<div class="footer__col footer__col--third">
				<div class="footer__title">Legal</div>
				<ul class="footer__menu">
					<li>
						<a href="#">
							Cookies Policy
						</a>
					</li>
					<li>
						<a href="#">
							Privacy Policy
						</a>
					</li>
					<li>
						<a href="#">
							Terms of Service
						</a>
					</li>
					<li>
						<a href="#">
							Law Enforcement
						</a>
					</li>
				</ul>
			</div>
			<div class="footer__col footer__col--quarter"> 
				<div class="footer__title">Install App</div>
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/App Store Badge.svg" alt="App Store Badge" class="apps"></a>
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Google Play Badge.svg" alt="Google Play Badge.svg" class="apps"></a>
			</div>
				
		</div>
		<div class="footer__doun">
			<div class="reserved">© 2020 Friendly All rights reserved</div>
			<div class="footer__img"> 
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Instagram.png" alt="Instagram" class="icons"></a>
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Dribbble.png" alt="Dribbble" class="icons"></a>
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Twitter.png" alt="Twitter" class="icons"></a>
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Youtube.png" alt="Youtube" class="icons"></a>
			</div>
		</div>
		</div>
	 <script type="text/javascript">
    $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
      });
  </script>
</body>
</html>

<?php wp_footer(); ?>

</body>
</html>
