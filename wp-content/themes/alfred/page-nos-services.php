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

<!-- ##### Service Area Start ##### -->
<section class="rooms-area section-padding-100-0">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="section-heading text-center">
                    <div class="line-"></div>
                    <h2 class="section-title">Nos Services</h2>
                </div>
            </div>
        </div>

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

<?php get_footer(); ?>