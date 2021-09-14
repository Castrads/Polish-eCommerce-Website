<?php

//adding the css and js files

function gt_setup()
{
    // wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script("jquery", get_theme_file_uri('/js/jquery.js'), NULL, microtime(), true);
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
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
    <div class=" searchbardiv" id="formsearch">
    <form class="search"  method="get"  action="' . home_url('/') . '" id="searchform"  >
            <div class="input-group">
                <input type="text" id="searchbox" class="form-control" name="s" value="' . get_search_query() . '">
                <div class="input-group-btn">
                    <button class="btn btn-default"  id="searchsubmit"  type="submit">
                        <strong>Search</strong>
                    </button>
                    
                </div>
            </div>
        </form>
        </div>';

    return $form;
}



add_filter('get_search_form', 'my_search_form');


// remove from footer

add_action('get_header', 'my_filter_head');

function my_filter_head()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}




