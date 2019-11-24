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

<!-- ##### Contact Area Start ##### -->
<section class="contact-area d-flex flex-wrap align-items-center">
    <div class="home-map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10491.755912442972!2d2.3102812!3d48.8975001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10ab3186871cd16b!2sMorning%20Coworking%20-%20Clichy!5e0!3m2!1sen!2sfr!4v1574621070288!5m2!1sen!2sfr" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!-- Contact Info -->
    <div class="contact-info">
        <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
            <div class="line-"></div>
            <h2>Contact Info</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
        </div>
        <h4 class="wow fadeInUp" data-wow-delay="300ms">21 place des Nations Unies, 92110 Clichy</h4>
        <h5 class="wow fadeInUp" data-wow-delay="400ms">+33 7 52 15 06 25</h5>
        <h5 class="wow fadeInUp" data-wow-delay="500ms">info@constellation33.com</h5>
        <!-- Social Info -->
        <div class="social-info mt-50 wow fadeInUp" data-wow-delay="600ms">
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->
<!-- ##### Contact Form Area Start ##### -->
<section class="contact-form-area mb-100 mt-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <div class="line-"></div>
                    <h2>Get in touch</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Contact Form -->
                <form action="#" method="post">
                    <?php 
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Form Area End ##### -->
<?php get_footer(); ?>