<ul class="grid">
    <?php $loop = new WP_Query(array('post_type' => 'visit_a_showroom')) ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <li class="item">
            <div class="item_inner">
                <a href="<?php the_permalink() ?>">
                    <?php if (has_post_thumbnail($post->ID)) : ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                        <img class="item_image" src="<?php echo $image[0]; ?>" />
                    <?php endif;
                    ?>
                </a>
                <h3 class="item_title">
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
            </div>
        </li>
    <?php endwhile; ?>
</ul>