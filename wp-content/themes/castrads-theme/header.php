<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WE MAKE CAST IRON RADIATORS.">
    <meta property="og:title" content="Castrads...">
    <meta property="og:description" content="Castrads...">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://Castrads.com/pl">
    <link rel="shortcut icon" href="favicon.ico" />
    <?php wp_head(); ?>
    <title><?php _e('Castrads - Designed for the modern home'); ?></title>
</head>

<body>

    <header class="header">

        <nav class="main-navigation">
            <?php wp_nav_menu(array('theme_location' => 'left-menu')); ?>
            <div id="logo-img">
                <a href="<?php echo site_url(''); ?>">
                    <img src=" <?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
                </a>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'right-menu')); ?>
        </nav>
        <div class="extra-link">

            <a href="#"><i class="fa fa-shopping-cart"></i></a>
            <a href="#"><i class="fas fa-user-alt"></i></a>
            <button type="button" class="buttonsearch" id="buttonsearch">
                <i class="fa fa-search openclosesearch"></i>
                <i class="fa fa-times openclosesearch" style="display:none"></i>
            </button>
            <?php get_search_form(); ?>
        </div>

    <!-- <div class="social-media-header">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/castrads" target="_blank" rel="noopener">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/castrads" target="_blank" rel="noopener">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/castrads/" target="_blank" rel="noopener">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/castrads/" target="_blank" rel="noopener">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.co.uk/castrads/" target="_blank" rel="noopener">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </li>
                </ul> -->
            </div>
            </header>

    <main id="main" class="main">