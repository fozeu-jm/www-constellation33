<?php get_header(); ?>
<?php
while (have_posts()) {
    the_post();
    ?>
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(<?php the_field('page-banner'); ?>);">
        <div class="bradcumbContent">
            <h2><?php the_title() ?></h2>
        </div>
    </section>

    <?php
}
?>

<?php
if (have_rows('abouts')):
    while (have_rows('abouts')):the_row();
        ?>
        <!-- ##### About Us Area Start ##### -->
        <section class="about-us-area mt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="about-text mb-100">
                            <div class="section-heading">
                                <div class="line-"></div>
                                <h2><?php the_sub_field('abt-title'); ?></h2>
                            </div>
                            <?php the_sub_field('abt-p'); ?>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="about-thumbnail mb-100">
                            <img src="<?php the_sub_field('abt-img'); ?>" alt="Service de conciergerie premium, et de luxe">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    endwhile;
endif;
?>
<!-- ##### About Us Area End ##### -->

<!-- ##### Milestones Area Start ##### -->
<?php
while (have_posts()) {
    the_post();
}
?>
<section class="our-milestones section-padding-100-0 bg-img bg-overlay bg-fixed" style="background-image: url(<?php the_field('miles-bg'); ?>);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="section-heading text-center white">
                    <div class="line-"></div>
                    <h2><?php the_field('miles-title'); ?></h2>
                    <p style="visibility: hidden;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum.</p>
                </div>
            </div>
        </div>
        <?php ?>
        <div class="row">
            <?php
            if (have_rows('Milestones')):
                while (have_rows('Milestones')):the_row();
                    ?>
                    <!-- Single Cool Facts -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <div class="scf-text">
                                <i class="<?php the_sub_field('miles-icon'); ?>"></i>
                                <h2><span class="counter"><?php the_sub_field('miles-num'); ?></span></h2>
                                <p><?php the_sub_field('miles-caption'); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<!-- ##### Milestones Area End ##### -->

<section class="testimonial-area section-padding-100 bg-img" style="background-image: url(<?php echo get_theme_file_uri('img/core-img/pattern.png'); ?>);">
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
                        $custom = new WP_Query(array(
                            'post_type' => 'page',
                            'p' => 48,
                            'post_status' => 'publish',
                            'posts_per_page' => '-1',
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();

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
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
