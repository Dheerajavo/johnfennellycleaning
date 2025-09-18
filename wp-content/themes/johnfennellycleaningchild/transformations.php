<?php get_header();
/* Template Name: transformations */
?>

<!-- Title Bar -->
<?php $trans_bnr_img = get_field('trans_banner_image'); ?>
<div class="pbmit-title-bar-wrapper transformations-banner" style="background-image: url('<?php echo $trans_bnr_img; ?>');">
	<div class="container">
		<div class="pbmit-title-bar-content ">
			<div class="pbmit-title-bar-content-inner">
				<div class="pbmit-tbar">
					<div class="pbmit-tbar-inner container">
						<h1 class="pbmit-tbar-title"><?php the_field('trans_banner_heading'); ?></h1>
					</div>
				</div>
				<div class="pbmit-breadcrumb">
					<div class="pbmit-breadcrumb-inner">
						<span>
							<?php
							$trans_bread = get_field('trans_breadcrumb');
							?>
							<a title="" href="<?php echo $trans_bread['url']; ?>" class="home"><span><?php echo $trans_bread['title']; ?></span></a>
						</span>
						<span class="sep">
							<i class="pbmit-base-icon-angle-right"></i>
						</span>
						<span>
							<span class="post-root post post-post current-item"><?php the_title(); ?></span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Title Bar End-->

<!-- Page Content -->
<div class="page-content">

	<!-- About Start -->
	<section class="abt-sec section-lg">
		<div class="container-fluid p-0">
			<div class="row g-0">
				<div class="col-md-12 col-xl-6">
					<?php $trans_about_img = get_field('trans_about_img'); ?>
					<div class="about-one-left-bg abt-img-two" style="background-image: url('<?php echo $trans_about_img; ?>');"></div>
				</div>
				<div class="col-md-12 col-xl-6">
					<div class="about-one-content pbmit-bg-color-light">
						<div class="pbmit-heading-subheading animation-style4">
							<h2 class="pbmit-title"><?php the_field('trans_about_title'); ?></h2>
							<div class="pbmit-heading-desc"><?php the_field('trans_about_desc'); ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About End -->

	<!-- Static Box Start -->
	<section class="">
		<div class="container">
			<div class="row pbminfotech-gap-40px">
				<?php // Before - After Parent Repeater
				if (have_rows('trans_bfr_aftr_rep')):
					while (have_rows('trans_bfr_aftr_rep')) : the_row();
				?>
						<!-- Before - Meta Repeater -->
						<?php
						if (have_rows('trans_meta_before_sec')):
							while (have_rows('trans_meta_before_sec')) : the_row();
						?>
								<article class="pbmit-static-box-style-1 col-md-6">
									<div class="pbminfotech-post-item">
										<div class="pbmit-title-wrapper">
											<?php
											$trans_meta_before_img = get_sub_field('trans_meta_before_img');
											?>
											<div class="transform-img transform-img-one" style="background-image: url('<?php echo $trans_meta_before_img; ?>');">
											</div>
										</div>
										<div class="pbmit-staticbox-wraper">
											<h2 class="pbmit-staticbox-title">
												<a href="<?php the_sub_field('trans_meta_before_link'); ?>">
													<span class="pbmit-button-text"><?php the_sub_field('trans_meta_before_text'); ?></span>
													<span class="pbmit-button-icon-wrapper">
														<span class="pbmit-button-icon">
															<i class="pbmit-base-icon-black-arrow-1"></i>
														</span>
													</span>
												</a>
											</h2>
										</div>
									</div>
								</article>
						<?php
							endwhile;
						endif;
						?>

						<!-- After - Meta Repeater -->
						<?php
						if (have_rows('trans_meta_after_sec')):
							while (have_rows('trans_meta_after_sec')) : the_row();
								$sub_value = get_sub_field('sub_field');
						?>
								<article class="pbmit-static-box-style-1 col-md-6">
									<div class="pbminfotech-post-item">
										<div class="pbmit-title-wrapper">
											<?php
											$trans_meta_after_img = get_sub_field('trans_meta_after_img');
											?>
											<div class="transform-img transform-img-two" style="background-image: url('<?php echo $trans_meta_after_img; ?>');">
											</div>
										</div>
										<div class="pbmit-staticbox-wraper">
											<h2 class="pbmit-staticbox-title">
												<a href="<?php the_sub_field('trans_meta_after_link'); ?>">
													<span class="pbmit-button-text"><?php the_sub_field('trans_meta_after_text'); ?></span>
													<span class="pbmit-button-icon-wrapper">
														<span class="pbmit-button-icon">
															<i class="pbmit-base-icon-black-arrow-1"></i>
														</span>
													</span>
												</a>
											</h2>
										</div>
									</div>
								</article>
						<?php
							endwhile;
						endif;
						?>
				<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
	</section>
	<!-- Static Box end -->





	<!-- Testimonial Start -->
	<section class="section-lg testimonial-one-bg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 col-lg-7">
					<div class="pbmit-heading-subheading animation-style2">

						<h2 class="pbmit-title"><?php the_field('trans_testi_heading'); ?></h2>
					</div>
				</div>
				<div class="col-md-4 col-lg-5 text-end">
					<div class="testimonial-swiper-arrow swiper-btn-custom d-inline-flex flex-row-reverse"></div>
				</div>
			</div>
			<div class="swiper-slider" data-arrows-class="testimonial-swiper-arrow" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="true" data-columns="2" data-margin="40" data-effect="slide">
				<div class="swiper-wrapper">
					<?php
					if (have_rows('trans_client_reviews')):
						while (have_rows('trans_client_reviews')) : the_row();
					?>
							<article class="pbmit-testimonial-style-2 swiper-slide">
								<div class="pbminfotech-post-item">
									<div class="pbminfotech-box-desc">
										<blockquote class="pbminfotech-testimonial-text">
											<p><?php the_sub_field('trans_client_reviews'); ?></p>
										</blockquote>
									</div>
									<div class="pbmit-auther-content">
										<h3 class="pbminfotech-box-title"><?php the_sub_field('trans_client_name'); ?></h3>
										<div class="pbminfotech-testimonial-detail"><?php the_sub_field('trans_client_desigination'); ?></div>
									</div>
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<?php $trans_client_image = get_sub_field('trans_client_image'); ?>
											<div class="testimonial-bg-img testimonial-img-one" style="background-image: url('<?php echo $trans_client_image; ?>');">
											</div>
										</div>
									</div>
								</div>
							</article>
					<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial End -->


</div>
<!-- Page Content End -->
<?php get_footer(); ?>