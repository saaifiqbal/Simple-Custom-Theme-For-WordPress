<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="<?php language_attributes( ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php
    wp_head();
    //    include_once(get_template_directory() . '/functions.php');
    ?>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout" <?php body_class(); ?>>
<!-- loader  -->
<!--<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#"/></div>
</div>-->
<!-- end loader -->
<!-- header -->
<div class="header">
    <div class="top_header">
        <div class="container-width">
            <div class="row d_flex">
                <div class=" col-md-3 col-sm-4">

                    <?php
                        if(function_exists('the_custom_logo')){
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id);
                            the_custom_logo();
                        }
                        else{
                            echo "<a href=".home_url().">".get_bloginfo('name')."</a>";
                        }
                    ?>

                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="select_main">
                        <ul class="top_infomation">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                Address : <?php echo esc_html(get_theme_mod('market_theme_address')); ?>
                            </li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>
                                CALL : <?php echo esc_html(get_theme_mod('market_theme_phone_number')); ?>
                            </li> 
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:<?php echo esc_attr(get_theme_mod('market_theme_email_address')); ?>">
                                    EMAIL: <?php echo esc_html(get_theme_mod('market_theme_email_address')); ?>
                                </a>
                            </li>
                        </ul>
                        <a class="read_more" href="<?php echo esc_url(get_permalink(get_theme_mod('market_theme_button_link'))); ?>">
                            <?php echo esc_html(get_theme_mod('market_theme_button', 'Get A Quote')); ?>
                        </a>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_midil">
        <div class="container-width">
            <div class="row d_flex">
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <!--<ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="wedo.html">what we do </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.html">Blog </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="portfolio.html">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                </li>
                            </ul>-->
                            <?php
                                wp_nav_menu(
                                    array(
                                        'menu' => 'primary',
                                        'container' => '',
                                       'theme_location' => 'primary',
                                        'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>'
                                    )
                                )
                            ?>

                        </div>
                    </nav>
                </div>
                <div class="col-md-3  d_none">
                    <ul class="email text_align_right">
                        <li><a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i>Log In</a></li>
                        <li><a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i>Sign Up</a></li>
                        <li><a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
