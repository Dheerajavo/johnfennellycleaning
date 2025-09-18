<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<meta name="robots" content="index, follow" />
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="page-wrapper " id="page">

		<!-- Header Main Area -->
		<header class="site-header header-style-1">
			<div class="site-header-menu">
				<div class="pbmit-main-header-area pbmit-bg-color-white">
					<div class="container-fluid">
						<div class="pbmit-header-content d-flex justify-content-between align-items-center">
							<div class="pbmit-logo-menuarea d-flex justify-content-between align-items-center">
								<div class="site-branding">
									<h1 class="site-title">
										<a href="<?php echo home_url('/'); ?>"></a>
									</h1>
								</div>
								<div class="site-navigation">
									<nav class="main-menu navbar-expand-xl navbar-light">
										<div class="navbar-header">
											<!-- Toggle Button -->
											<button class="navbar-toggler" type="button">
												<i class="pbmit-base-icon-menu-1"></i>
											</button>
										</div>
										<div class="pbmit-mobile-menu-bg"></div>
										<div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
											<div class="pbmit-menu-wrap">
												<span class="closepanel">
													<svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
														<rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
														<rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
													</svg>
												</span>

												<?php
												$menu = array(
													'menu' => 'main-menu', // Specify your menu
													'items_wrap' => '<ul class="navigation clearfix">%3$s</ul>', // Custom <ul> wrapper
													'container' => false,
													'menu_item_class' => 'dropdown',
													'menu_class' => '', // Optional to add a class to the <ul> element
												);

												// Display the menu
												wp_nav_menu($menu);
												?>


											</div>
										</div>
									</nav>
								</div>
							</div>
							<div class="pbmit-right-box d-flex align-items-center">
								<div class="pbmit-button-box">
									<div class="pbmit-header-button">
										<?php
										// Get the link URL from the ACF field 'get_quote_btn'
										$quote_btn_url = get_field('get_quote_btn', 'option');
										?>

										<a href="<?php echo $quote_btn_url['url']; ?>">
											<span class="pbmit-header-button-text-1"><?php echo $quote_btn_url['title']; ?></span>
										</a>
									</div>
								</div>
								<div class="pbmit-header-search-btn">

								</div>
								<div class="pbmit-button-box-second">
									<?php
									// Get the link URL from the ACF field 'get_quote_btn'
									$quote_btn_urls = get_field('get_quote_arrow', 'option');
									?>
									<a class="pbmit-btn" href="<?php echo $quote_btn_urls['url']; ?>">
										<span class="pbmit-button-content-wrapper">
											<span class="pbmit-button-icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
													<title>black-arrow</title>
													<path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
													<path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
													<path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
												</svg>
											</span>
											<span class="pbmit-button-text"><?php echo $quote_btn_urls['title']; ?></span>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php if (is_front_page()) : ?>

				<div class="pbmit-slider-area pbmit-slider-one desktop-banner">
					<div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="true" data-arrows="false" data-columns="1" data-margin="0" data-effect="fade">
						<div class="swiper-wrapper">
							<?php if (have_rows('slider', 'option')): // Check if there are rows in the 'slider' repeater field 
							?>
								<?php while (have_rows('slider', 'option')): the_row();
									// Get the ACF fields for each slide
									$top_title_slider = get_sub_field('top_title_slider');
									$heading_slider = get_sub_field('heading_slider');
									$slider_button = get_sub_field('slider_button');
									$btn_text = get_sub_field('btn_text');
									$slider_image_class = get_sub_field('slider_image_class');
								?>
									<div class="swiper-slide">
										<div class="pbmit-slider-item">
											<div class="pbmit-slider-bg <?php echo esc_attr($slider_image_class); ?>"></div>
											<div class="container">
												<div class="row">
													<div class="col-md-8 col-lg-7">
														<div class="pbmit-slider-content">
															<h5 class="pbmit-sub-title transform-delay-1"><?php echo esc_html($top_title_slider); ?></h5>
															<h2 class="pbmit-title transform-left transform-delay-2"><?php echo ($heading_slider); ?></h2>
															<div class="pbmit-button transform-bottom transform-delay-4">
																<?php if ($slider_button): ?>
																	<a class="pbmit-btn pbmit-btn-global" href="<?php echo esc_url($slider_button); ?>">
																		<span class="pbmit-button-content-wrapper">
																			<span class="pbmit-button-icon">
																				<svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
																					<title>black-arrow</title>
																					<path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
																					<path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
																					<path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
																				</svg>
																			</span>
																			<span class="pbmit-button-text"><?php echo esc_html($btn_text); ?></span>
																		</span>
																	</a>
																<?php endif; ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>


			<?php endif; ?>

		</header>
		<!-- Header Main Area End Here -->