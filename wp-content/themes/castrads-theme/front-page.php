<?php

/**
 * Template Name : Home
 */

get_header(); ?>

<div id="banner">
    <h1 class="banner-heading"><?php _e('WE MAKE CAST IRON RADIATORS', 'Castrads'); ?></h1>
    <h2 class="banner-heading"><?php _e('Designed for the modern home'); ?></h2>
    <div class=banner-menu>
        <a  class="section-heading" href="<?php echo site_url('/products'); ?>">
        <?php _e('Shop products'); ?> 
        </a>
        <a class="section-heading" href="<?php echo site_url('/inspiration'); ?>">
        <?php _e('Order a brochure'); ?> 
        </a>
        <a class="section-heading" href="<?php echo site_url('/inspiration'); ?>">
        <?php _e('Book a consultation'); ?> 
        </a>
    </div>
</div>

<div class="container">
    <h2 class="section-heading"><?php _e('How to Heat'); ?></h2>
    <p><?php _e('Photo-filled design guides with heating advice based on real-life case studies.'); ?></p>
    <section>

        <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6

        );

        $blogposts = new WP_Query($args);

        while ($blogposts->have_posts()) {
            $blogposts->the_post();

        ?>

            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <!-- <a href="<?php the_permalink(); ?>" class="btn-readmore"><?php _e('Read more'); ?></a> -->
                </div>
            </div>

        <?php }
        wp_reset_query();
        ?>

    </section>

    <!-- showrooms -->
    <div class='showroom'>
        <h2 class="section-heading"><?php _e('Visit a showroom'); ?></h2>
        <?php get_template_part('template-parts/home-showroom'); ?>
    </div>


</div>
<?php get_footer(); ?>