<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <style>
        header {
            position: relative;
        }
        .banner {
            position: relative; 
            height: 500px;
            overflow: hidden; 
        }
        .page-banner__bg-image {
            position: absolute; 
            top: 0;
            left: 0;
            width: 100%; 
            height: 100%; 
            background-size: cover; 
            background-position: center; 
            z-index: -1;
        }
        .logo-container {
            position: absolute; 
            top: 20px; 
            left: 20px; 
            z-index: 1;
            display: flex;
        }

        .logo-container img {
            width: 75px;
            height: auto; 
            border-radius: 50%;
        }

        .logo-container a {
            color: white; 
            text-decoration: none; 
            font-size: 1.0rem; 
            font-weight: bold; 
            margin-left: 15px;
            margin-top: 25px;

        }
        .header-nav {
            position: absolute; 
            top: 20px; 
            right: 20px; 
            z-index: 1; 
            display: flex;
        }
        .header-nav a {
            margin-left: 20px;
            color: white; 
            text-decoration: none; 
            font-size: 1.0rem; 
            font-weight: bold; 
            margin-top: 25px;


        }
    </style>
</head>
    <header>
        <div class="banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/banner.jpg') ?>);"></div>
        </div>
        <div class="logo-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Heratech Logo">
            <a class='title' href="<?php echo site_url(); ?>">Heratech</a>
        </div>
        <nav class="header-nav">
            <a href="<?php echo site_url('/about-us'); ?>">About</a>
            <a href="<?php echo site_url('/services'); ?>">Services</a>
            <a href="<?php echo site_url('/contact-us'); ?>">Contact</a>
        </nav>
    </header>