<?php

/**
 * Template Name : Home
 */

get_header(); ?>

<div id="banner">
    <h1 class="banner-heading">WE MAKE CAST IRON RADIATORS</h1>
    <h2 class="banner-heading">Designed for the modern home</h2>
    <div class=banner-menu>
        <a href="<?php echo site_url('/products'); ?>">
            Shop products
        </a>
        <a href="<?php echo site_url('/inspiration'); ?>">
            Order a brochure
        </a>
        <a href="<?php echo site_url('/inspiration'); ?>">
            Book a consultation
        </a>
    </div>
</div>

<div class="container">
    <h2 class="section-heading">How to Heat</h2>
    <p>Photo-filled design guides with heating advice based on real-life case studies.</p>
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
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>

        <?php }
        wp_reset_query();
        ?>

    </section>

    <h2 class="section-heading">Visit a showroom</h2>

    <section id="section-source">
        <h3> for tailored advice</h3>
        <p>
            Castrads was established in Manchester, England in 2006. In 2012 we moved to our HQ at 1 Kenwood Road where we manufacture our custom-built, custom-finished radiators. It’s also where our design and creative teams are based.
            Inspired by the past but always looking to the future, our products combine classic form and enduring functionality with the most up-to-date technology. Visit our factory showroom to see exactly what we do.
        </p>
        <a href="#" class="btn-readmore">Read more</a>
    </section>
</div>
<?php get_footer(); ?>