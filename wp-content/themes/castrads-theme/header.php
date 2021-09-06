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
            <?php wp_nav_menu(array('theme_location' => 'left-menu')); ?>
            <div id="logo-img">
                <a href="<?php echo site_url(''); ?>">
                    <img src=" <?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
                </a>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'right-menu')); ?>

            <form class="search">
                <input type="checkbox" id="toggleSearch" class="search__toggle" hidden />
                <div class="search__field">
                    <label for="toggleSearch" class="search__label">
                        <span class="search__close"></span>
                    </label>
                    <input type="text" class="search__input" placeholder="What are you looking for?" />
                    <label for="toggleSearch" class="search__label">
                        <div class="search__button">
                            <div class="search__icon search__button--toggle"></div>
                        </div>
                        <button class="search__button search__button--submit">
                            <div class="search__icon"></div>
                        </button>
                    </label>
                </div>
            </form>

            <!-- <div class="searchbox">
                <?php get_search_form(); ?>
            </div> -->
            <!-- <div id="search-icon">
            <i class="fas fa-search"></i>
       </div> -->
            <div class="menu-toggle">
                <div class="hamburger"></div>
            </div>
        </nav>
    </header>
    <main id="main">