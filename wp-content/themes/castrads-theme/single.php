<?php get_header();
while (have_posts()) {
    the_post();
?>

    <h2 class="page-heading"><?php the_title(); ?></h2>
    <div id="post-container">
        <section id="blogpost">
            <div class="card">
                <div class="card-meta-blogpost">
                </div>
                <div class="card-image">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                </div>
                <div class="card-description">
                    <?php the_content(); ?>
                </div>

            </div>
        </section>
    <?php } ?>
    </div>


    <?php get_footer(); ?>