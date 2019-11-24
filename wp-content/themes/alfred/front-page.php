<?php get_header(); ?>
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <?php
        if (have_rows('Slides')):
            while (have_rows('Slides')):the_row();
                ?>

                <!-- Single Hero Slide -->
                <div class="single-hero-slide d-flex align-items-center justify-content-center">
                    <!-- Slide Img -->
                    <div class="slide-img bg-img" style="background-image: url(<?php the_sub_field('slider-image'); ?>);"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-9">
                                <!-- Slide Content -->
                                <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                    <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                    <h2 data-animation="fadeInUp" data-delay="500ms"><?php the_sub_field('slider-title'); ?></h2>
                                    <p data-animation="fadeInUp" data-delay="700ms"><?php the_sub_field('slider-caption'); ?></p>
                                    <a href="<?php the_sub_field('slider-link'); ?>" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms"><?php the_sub_field('slider-link-text'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            endwhile;
        else:
            echo 'No fields found <br>';
        endif;
        ?>
    </div>
</section>
<!-- ##### Hero Area End ##### -->


<!--::team part end::-->
<?php
if (have_rows('home-abt')):
    while (have_rows('home-abt')):the_row();
        ?>
        <section class="disp-none mt-30">
            <div class="container disp-none">
                <div class="row disp-none">
                    <div class="col-12 disp-none">
                        <img src="<?php the_sub_field('home-abt-img'); ?>" alt="Service de Conciergerie de luxe, premium en France">
                    </div>
                </div>
            </div>
        </section>
        <style>
            .team_part:before {background-image: url(<?php the_sub_field('home-abt-img'); ?>);}
        </style>
        <section style="" class="team_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team_img"></div>
                    </div>

                    <div class="offset-lg-1 col-lg-5">
                        <div class="team_member_text">
                            <h2><?php the_sub_field('home-abt-title'); ?></h2>
                            <p><?php the_sub_field('home-abt-desc'); ?></p>

                            <a href="<?php echo site_url('/a-propos'); ?>" class="btn_1">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_theme_file_uri('img/section_overlay.png'); ?>" alt="Conciergerie de luxe, assiatant personnel">
        </section>
        <?php
    endwhile;
endif;
?>
<!--::team part end::-->

<!--##### passion_part end ######-->
<?php
if (have_rows('home-qlt')):
    while (have_rows('home-qlt')):the_row();
        ?>
        <div style="background-image: url(<?php the_sub_field('home-qlt-img'); ?>);" class="passion_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section_tittle">
                            <h1><?php the_sub_field('home-qlt-title'); ?></h1>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        ?>

        <div class="row">
            <?php
            if (have_rows('qualites')):
                while (have_rows('qualites')):the_row();
                    ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="single_passion">
                            <div class="single_passion_item">
                                <a href="#" class="passion_icon"> <i class="<?php the_sub_field('qlt-icon'); ?>"></i> </a>
                                <h4><?php the_sub_field('qlt-title'); ?></h4>
                                <p><?php the_sub_field('qlt-desc'); ?></p>
                                <a href="<?php echo site_url('/service'); ?>" class="btn_2">En savoir plus<span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<!--::passion_part end::-->

<!-- ##### Haute Conciergerie / philosophie ##### -->
<?php
if (have_rows('features')):
    while (have_rows('features')):the_row();
        ?>
        <section class="property-overview-section spad pb-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <img src="<?php the_sub_field('feature-img1'); ?>" alt="Service de conciergerie premium personnel pour star et clientèles exigeants">
                    </div>
                    <div class="col-lg-6 p-0 d-flex align-items-center justify-content-center">
                        <div class="property-text-warp">
                            <div class="property-overview-text">
                                <h4><?php the_sub_field('feature-title1'); ?></h4>
                                <p><?php the_sub_field('feature-desc1'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 d-flex align-items-center justify-content-center order-2 order-lg-1">
                        <div class="property-text-warp">
                            <div class="property-overview-text">
                                <h4><?php the_sub_field('feature-title2'); ?></h4>
                                <p><?php the_sub_field('feature-desc2'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-1 order-lg-2">
                        <img src="<?php the_sub_field('feature-img2'); ?>" alt="Service de conciergerie premium personnel pour star et clientèles exigeants, assistant personnel,">
                    </div>
                </div>
            </div>
        </section> 
        <?php
    endwhile;
endif;
?>
<!-- ##### Haute Conciergerie / philosophie ##### -->

<!-- ##### Service Area Start ##### -->
<section class="rooms-area section-padding-100-0">
    <div class="container">
        <?php
        if (have_rows('home-service')):
            while (have_rows('home-service')):the_row();
                ?>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="section-heading text-center">
                            <div class="line-"></div>
                            <h2 class="section-title"><?php the_sub_field('home-service-title'); ?></h2>
                            <p><?php the_sub_field('home-service-desc'); ?></p>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        ?>


        <div class="row justify-content-center">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'service',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url(<?php the_field('service-img'); ?>);"></div>
                        <!-- Price -->
                        <p class="price-from">Service</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_field('service-desc'); ?></p>
                        </div>
                        <!-- Book Room -->
                        <a href="<?php echo site_url('/contact'); ?>" class="book-room-btn btn palatin-btn">Contact</a>
                    </div>
                </div>
            <?php } wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- ##### Service Area End ##### -->

<!-- #### Pourquous ? #### -->
<?php
if (have_rows('reasons')):
    while (have_rows('reasons')):the_row();
        ?>
        <section class="ftco-section ftco-degree-bg services-section img mx-md-5" style="background-image: url(<?php the_sub_field('reason-img'); ?>);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-start mb-5">
                    <div class="col-md-6 text-center heading-section heading-section-white ftco-animate fadeInUp ftco-animated">
                        <span class="subheading">Work flow</span>
                        <h2 class="mb-3">Pourquoi nous ?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                                <div class="media block-6 services services-2">
                                    <div class="media-body py-md-4 text-center">
                                        <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>01</span></div>
                                        <h3><?php the_sub_field('reason1-title'); ?></h3>
                                        <p><?php the_sub_field('reason1-desc'); ?></p>
                                    </div>
                                </div>      
                            </div>
                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                                <div class="media block-6 services services-2">
                                    <div class="media-body py-md-4 text-center">
                                        <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>02</span></div>
                                        <h3><?php the_sub_field('reason2-title'); ?></h3>
                                        <p><?php the_sub_field('reason2-desc'); ?></p>
                                    </div>
                                </div>      
                            </div>
                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                                <div class="media block-6 services services-2">
                                    <div class="media-body py-md-4 text-center">
                                        <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>03</span></div>
                                        <h3><?php the_sub_field('reason3-title'); ?></h3>
                                        <p><?php the_sub_field('reason3-desc'); ?></p>
                                    </div>
                                </div>      
                            </div>
                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated">
                                <div class="media block-6 services services-2">
                                    <div class="media-body py-md-4 text-center">
                                        <div class="icon mb-3 d-flex align-items-center justify-content-center"><span>04</span></div>
                                        <h3><?php the_sub_field('reason4-title'); ?></h3>
                                        <p><?php the_sub_field('reason4-desc'); ?></p>
                                    </div>
                                </div>      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    endwhile;
endif;
?>
<!-- ##### Pourquoi mous ###### -->


<!-- ##### Testimonial Area Start ##### -->
<section class="testimonial-area section-padding-100 bg-img mt-50" style="background-image: url(<?php echo get_theme_file_uri('img/core-img/pattern.png'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-content">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Ce Que Disent Nos Clients</h2>
                    </div>

                    <!-- Testimonial Slides -->
                    <div class="testimonial-slides owl-carousel">
                        <?php
                        if (have_rows('testimonials')):
                            while (have_rows('testimonials')):the_row();
                                ?>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial">
                                    <p><?php the_sub_field('testi-txt'); ?></p>
                                    <h6><?php the_sub_field('testi-name'); ?></h6>
                                    <img src="<?php the_sub_field('testi-icon'); ?>" alt="">
                                </div>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Testimonial Area End ##### -->

<?php get_footer(); ?>