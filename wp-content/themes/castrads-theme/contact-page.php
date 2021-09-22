<?php
/*
Template Name: Contact
*/

get_header(); ?>


<div class="container contact-page">

    <!-- <section class="hero contact-page">
        <h2 class="section-heading"><?php _e('Contact Us', 'Castrads'); ?></h2>
    </section> -->

    <?php
    the_content(sprintf(
        wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'Castrads'),
            array(
                'span' => array(
                    'class' => array(),
                ),
            )
        ),
        get_the_title()
    ));

    wp_link_pages(array(
        'before' => '<div class="page-links">' . esc_html__('Pages:', 'Castrads'),
        'after'  => '</div>',
    ));
    ?>

</div>

<?php get_footer(); ?>