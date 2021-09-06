<?php

//adding the css and js files

function gt_setup()
{
    // wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'gt_setup');

//menus location 

// add_theme_support('menus'); 

function register_my_menus()
{
    register_nav_menus(
        array(
            'left-menu' => __('Left Menu'),
            'right-menu' => __('Right Menu')
        )
    );
}
add_action('init', 'register_my_menus');



//adding theme support

function gt_init()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        array('comment-list', 'contact-form', 'search-form')
    );
}

add_action('after_setup_theme', 'gt_init');

//project post type

function gt_custom_post_type()
{
    register_post_type(
        'project',
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Project',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt'
            )
        )
    );
}

add_action('init', 'gt_custom_post_type');



/**
 * Take control on the search form
 *
 */

function my_search_form($form)
{
    $form = '
    <form class="search"  method="get"  action="' . home_url('/') . '" >
                <input type="checkbox" id="toggleSearch" class="search__toggle" hidden  />
              
                <div class="search__field">
                    <label for="toggleSearch" class="search__label">
                        <span class="search__close"></span>
                    </label>
                    <input class="search__input"  type="search" name="s" placeholder="Search Here ..." value="' . get_search_query() . '"/>
                    <label for="toggleSearch" class="search__label">
                        <div class="search__button">
                            <div class="search__icon search__button--toggle"></div>
                        </div>
                        <button class="search__button search__button--submit" type="submit"  id="search-btn">
                            <div class="search__icon"></div>
                        </button>
                    </label>
                </div>
            </form>';

    return $form;
}

add_filter('get_search_form', 'my_search_form');
