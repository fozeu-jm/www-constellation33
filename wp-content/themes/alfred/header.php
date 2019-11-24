<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name = "author" content = "KAIZER WEB DESIGN" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php wp_head(); ?>
        

    </head>

    <body>
        <!-- Preloader -->
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="cssload-container">
                <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>

        <!-- ##### Header Area Start ##### -->
        <header class="header-area">
            <!-- Navbar Area -->
            <div class="palatin-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">
                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="palatinNav">

                            <!-- Nav brand -->
                            <a href="index.html" class="nav-brand">
                                <img id="logo1" src="<?php echo get_theme_file_uri('img/core-img/logo.png'); ?>" alt="Constellation33 Logo, conciergerie de lux premium en France">
                                <img id="logo2" src="<?php echo get_theme_file_uri('img/core-img/logo2.png'); ?>" alt="Constellation33 Logo, conciergerie de lux premium en France">
                            </a>

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        <li class="<?php if(is_front_page()): echo 'active'; endif;?>"><a href="<?php echo site_url(''); ?>">Accueil</a></li>
                                        <li class="<?php if(is_page('a-propos')): echo 'active'; endif;?>"><a href="<?php echo site_url('a-propos'); ?>">A propos</a></li>
                                        <li class="<?php if(is_page('nos-services')): echo 'active'; endif;?>"><a href="<?php echo site_url('nos-services'); ?>">Services</a></li>
                                        <li class="<?php if(is_page('contact')): echo 'active'; endif;?>"><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
                                    </ul>

                                    <!-- Button -->
                                    <div class="menu-btn">
                                        <a href="tel://+33" class="btn palatin-btn">07 52 12 35 26</a>
                                    </div>

                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->

