<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
<div class="cookie-popup" id="cookiePopup">
	<p>This website uses cookies to improve your browsing experience and deliver tailored
		content and ads. By continuing to browse, you agree to our use of cookies as
		outlined in our Privacy Policy. If you have any questions or concerns about our
		cookie usage, feel free to reach out to us.
	</p>
	<div class="cookie-buttons">
		<button id="acceptBtn">Accept</button>
		<button id="declineBtn">Decline</button>
	</div>
</div>
<!-- footer -->

<footer class="site-footer pbmit-bg-color-blackish">

	<div class="pbmit-footer-widget-area">
		<div class="container">
			<div class="row">
				<div class=" col-lg-3 col-md-6 col-sm-6">
					<div class="pbmit-footer-logo">
						<div class="footer-logo-img"></div>
					</div>
				</div>
				<div class=" col-lg-3 col-md-6 col-sm-6">
					<div class="widget pbmit-two-column-menu">
						<h2 class="widget-title"><?php echo get_field("useful_link_title", "option"); ?></h2>
						<div class="textwidget">
							<?php
							$menu = array(
								'menu' => 'footer link', // Specify your menu
								'items_wrap' => '<ul>%3$s</ul>', // Custom <ul> wrapper
								'container' => false,
								'menu_class' => '', // Optional to add a class to the <ul> element
							);

							// Display the menu
							wp_nav_menu($menu);
							?>
						</div>
					</div>
				</div>
				<div class=" col-lg-3 col-md-6 col-sm-6">
					<aside class="widget">
						<h2 class="widget-title">Say Hello</h2>
						<div class="pbmit-contact-widget-lines">
							<div class="pbmit-contact-widget-line pbmit-contact-widget-phone"><?php echo get_field("phone_number", "option"); ?></div>
							<div class="pbmit-contact-widget-line pbmit-contact-widget-email"><?php echo get_field("email", "option"); ?></div>
						</div>
					</aside>
				</div>
				<div class=" col-lg-3 col-md-6 col-sm-6">
					<div class="widget widget_text">
						<h2 class="widget-title">Follow Us</h2>
						<div class="pbmit-timelist-wrapper">
							<div class="fooer-links">
								<ul>
									<li>
										<a href="https://www.facebook.com/Johnfennellycleaning" target="_blank"><span><i class="pbmit-base-icon-facebook-f"></i></span></a>
									</li>
									<li>
										<a href="https://www.instagram.com/john_fennelly_cleaning/" target="_blank"><span><i class="pbmit-base-icon-instagram"></i></span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="pbmit-footer-text-area">
		<div class="container">
			<div class="pbmit-footer-text-inner">
				<div class="row">
					<div class="col-md-12">
						<div class="pbmit-footer-copyright-text-area"><?php echo get_field("copyright_text", "option"); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer End -->

<!-- Scroll To Top -->
<div class="pbmit-progress-wrap">
	<svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
	</svg>
</div>
<!-- Scroll To Top End -->

</div>
<!-- Page Wrapper End -->
<?php
// Ensure WordPress footer scripts are loaded properly
wp_footer();
?>

<!-- Scripts -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/swiper.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/aos.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/gsap.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/SplitText.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/gsap-animation.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/scripts.js"></script>

<script>
	document.addEventListener("DOMContentLoaded", () => {
		const cookiePopup = document.getElementById("cookiePopup");
		const acceptBtn = document.getElementById("acceptBtn");
		const declineBtn = document.getElementById("declineBtn");

		// Show the popup only if the user hasn't made a choice
		if (!localStorage.getItem("cookieConsent")) {
			cookiePopup.classList.remove("hidden");
		}

		// Handle the Accept button click
		acceptBtn.addEventListener("click", () => {
			localStorage.setItem("cookieConsent", "accepted");
			cookiePopup.classList.add("hidden");
		});

		// Handle the Decline button click
		declineBtn.addEventListener("click", () => {
			localStorage.setItem("cookieConsent", "declined");
			cookiePopup.classList.add("hidden");
		});
	});
</script>

</body>
</html>