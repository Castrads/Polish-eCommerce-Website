<?php
/*
Template Name: Blog
*/

get_header(); ?>
<div class="container">
    <a href="<?php echo site_url('/blog'); ?>"class="section-heading"><?php _e('How to Heat'); ?></a>
    <section>

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10

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
                    <a href="<?php the_permalink(); ?>" class="btn-readmore"><?php _e('Read more'); ?></a>
                </div>
            </div>

        <?php }
        wp_reset_query();
        ?>

    </section>

<?php get_footer(); ?>