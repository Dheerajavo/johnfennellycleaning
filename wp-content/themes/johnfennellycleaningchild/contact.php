<?php  /*Template name:Contact */
get_header();   ?>
<div class="contact-top">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-12 col-xl-12">
                <div class="pbmit-heading-subheading animation-style2">
                    <h2 class="pbmit-title"><?php the_title();  ?></h2>
                    <div class="pbmit-heading-desc">
                        <?php the_field('main_description');  ?>

                    </div>
                    <div class="pbmit-heading-desc">
                        <?php the_field('question_detail_content');  ?>
                    </div>
                    <div class="pbmit-heading-desc">
                        <?php the_field('question_detail_information');  ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- Contact Us Content -->
<div class="page-content">
    <!-- Contact Form -->
    <section class="section-lgb contact-us-bg" style="background-image: url(<?php the_field('contact_background_image'); ?>);
background-position: -45px 120px;background-repeat: no-repeat;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-12 col-xl-5">
                    <article class="pbmit-miconheading-style-10">
                        <div class="pbmit-ihbox-style-10">
                            <div class="pbmit-ihbox-headingicon">
                                <div class="pbmit-ihbox-wrap">
                                    <div class="pbmit-ihbox-contents">
                                        <div class="contact-text-wrap">
                                            <?php
                                            if (have_rows('contact_info')):
                                                while (have_rows('contact_info')): the_row();
                                                    $title = get_sub_field('info_title');
                                                    $info = get_sub_field('info_description');
                                            ?>
                                                    <h4>
                                                        <?php if ($title): ?>
                                                            <?php echo $title; ?>
                                                        <?php endif; ?>
                                                        <?php
                                                        $link = get_sub_field('info_content');
                                                        if ($link):
                                                            $link_url = $link['url'];
                                                            $link_title = $link['title'];
                                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                                        ?>
                                                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                                        <?php endif; ?>

                                                        <?php if ($info): ?>
                                                            <span><?php echo $info; ?></span>
                                                        <?php endif; ?>
                                                    </h4>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>

                                            <p>
                                                <?php the_field('contact_info_description');  ?>
                                            </p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </article>

                </div>
                <div class="col-md-12 col-xl-7">
                    <div class="contact-form-rightbox">
                        <?php echo do_shortcode('[contact-form-7 id="c68771f" title="Contact form"]');  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->





</div>



<?php get_footer(); ?>