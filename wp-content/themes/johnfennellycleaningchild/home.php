 <?php /* Template Name: Home */ ?>

 <?php get_header(); ?>

 <?php

	while (have_posts()) : the_post();
	?>

 	<!-- desktop view start -->
 	<div class="desktop-view">
 		<!-- page content -->
 		<div class="page-content">
 			<!-- Marquee Start -->
 			<div class="domian-slide">
 				<div class="container-fluid p-0">
 					<div class="swiper-slider marquee">
 						<?php if (have_rows('marquee-effect')): ?>
 							<div class="swiper-wrapper">
 								<?php while (have_rows('marquee-effect')): the_row();
										$titlemarque = get_sub_field('marquee-effect-word');
									?>
 									<article class="pbmit-marquee-effect-style-1 swiper-slide">
 										<div class="pbmit-tag-wrapper">
 											<h2 class="pbmit-element-title" data-text=" <?php echo	$titlemarque; ?>">
 												<?php echo	$titlemarque; ?>
 											</h2>
 										</div>
 									</article>
 								<?php endwhile; ?>

 							</div>
 						<?php endif; ?>
 					</div>
 				</div>
 			</div>
 			<!-- Marquee End -->

 			<!-- About Start -->
 			<section class="abt-sec">
 				<div class="container p-0">
 					<div class="row g-0">
 						<div class="col-md-12 col-xl-6">
 							<?php
								$cleaning_image = get_field('cleaning_image');
								?>
 							<div class="about-one-left-bg home-abt-img" style="background-image: url('<?php echo $cleaning_image; ?>');"></div>
 						</div>
 						<div class="col-md-12 col-xl-6">
 							<div class="about-one-content pbmit-bg-color-light">
 								<div class="pbmit-heading-subheading animation-style4">

 									<h2 class="pbmit-title"><?php echo get_field("cleaning_title"); ?></h2>
 									<div class="pbmit-heading-desc"><?php echo get_field("cleaning_content"); ?></div>
 								</div>


 							</div>
 						</div>
 					</div>
 				</div>
 			</section>
 			<!-- About End -->


 			<!-- Testimonial Start -->
 			<section class="section-lg testimonial-one-bg">
 				<div class="container">
 					<div class="row align-items-center">
 						<div class="col-md-8 col-lg-7">
 							<div class="pbmit-heading-subheading animation-style2">

 								<h2 class="pbmit-title"><?php echo get_field("reviews_title"); ?></h2>
 							</div>
 						</div>
 						<div class="col-md-4 col-lg-5 text-end">
 							<div class="testimonial-swiper-arrow swiper-btn-custom d-inline-flex flex-row-reverse"></div>
 						</div>
 					</div>
 					<div class="swiper-slider" data-arrows-class="testimonial-swiper-arrow" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="true" data-columns="2" data-margin="40" data-effect="slide">
 						<?php if (have_rows('reviews')): ?>
 							<div class="swiper-wrapper">
 								<!-- Slide1 -->
 								<?php while (have_rows('reviews')): the_row();
										$reviews_content = get_sub_field('reviews_content');
										$review_head = get_sub_field('review_head');
										$review_name = get_sub_field('review_name');
										$review_class = get_sub_field('review_class');
									?>
 									<article class="pbmit-testimonial-style-2 swiper-slide">
 										<div class="pbminfotech-post-item">
 											<div class="pbminfotech-box-desc">
 												<blockquote class="pbminfotech-testimonial-text">
 													<p><?php echo acf_esc_html(get_sub_field('reviews_content')); ?></p>
 												</blockquote>
 											</div>
 											<div class="pbmit-auther-content">
 												<h3 class="pbminfotech-box-title"><?php echo (get_sub_field('review_head')); ?></h3>
 												<div class="pbminfotech-testimonial-detail"><?php echo acf_esc_html(get_sub_field('review_name')); ?></div>
 											</div>
 											<div class="pbmit-featured-img-wrapper">
 												<div class="pbmit-featured-wrapper ">
 													<div class="testimonial-bg-img <?php echo acf_esc_html(get_sub_field('review_class')); ?>">

 													</div>

 												</div>
 											</div>
 										</div>
 									</article>

 								<?php endwhile; ?>
 							</div><?php endif; ?>
 					</div>
 				</div>
 			</section>
 			<!-- Testimonial End -->

 		</div>
 		<!-- page content End -->

 	</div>
 	<!-- desktop view end -->

 <?php endwhile;
	get_footer(); ?>