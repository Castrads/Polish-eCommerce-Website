<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Castrads</title>
</head>

<body>

    <header class="header">

        <nav class="main-navigation">
            <div id="logo-img">
                <a href="<?php echo site_url(''); ?>">
                    <img src=" <?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
                </a>
            </div>
            <?php wp_nav_menu(); ?>
            <div class="searchbox">
                <?php get_search_form(); ?>
            </div>
            <!-- <div id="search-icon">
                    <i class="fas fa-search"></i>
               </div> -->
            <div class="menu-toggle">
                <div class="hamburger"></div>
            </div>
        </nav>
    </header>
    <main id="main">