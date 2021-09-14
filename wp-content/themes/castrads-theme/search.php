<?php get_header(); ?>

<h2 class="page-heading"><?php _e('Search Results for'); ?><?php echo get_search_query(); ?></h2>

<?php if (have_posts()) {
?>
    <section>

        <?php

        while (have_posts()) {
            the_post();
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

<?php } else { ?>
    <div class="no-results">
        <h2><?php _e('Could not find anything, Did you just mistype something?'); ?></h2>
        <h3><?php _e('Do not worry'); ?></h3>
        <h3><?php _e('Check out the following links:'); ?></h3>
        <ul>
            <li><a href="<?php echo site_url('/product') ?>"><?php _e('Product'); ?></a></li>
            <li><a href="<?php echo site_url('/resources') ?>"><?php _e('Resources'); ?></a></li>
            <li><a href="<?php echo site_url('/samples') ?>"><?php _e('Color Samples'); ?></a></li>
            <li><a href="<?php echo site_url('/inspiration') ?>"><?php _e('Inspiration'); ?></a></li>
            <li><a href="<?php echo site_url('/inspiration') ?>"><?php _e('Our Story'); ?></a></li>
            <li><a href="<?php echo site_url('/inspiration') ?>"><?php _e('Contact'); ?></a></li>
        </ul>
    </div>

<?php } ?>

<div class="pagination">
    <?php echo paginate_links(); ?>
</div>


<?php get_footer(); ?>