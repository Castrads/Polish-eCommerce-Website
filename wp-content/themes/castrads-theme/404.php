<?php get_header(); ?>


<div class="container-404">
   <h2 class="page-heading"><?php _e('Page Not Found'); ?></h2>
   <img src="">

   <h3><?php _e('Sorry, we couldn not find the page you are looking for, Please try following links.'); ?></h3>

   <ul>
      <li><a href="<?php echo site_url('/product') ?>"><?php _e('Product'); ?></a></li>
      <li><a href="<?php echo site_url('/resources') ?>"><?php _e('Resources'); ?></a></li>
      <li><a href="<?php echo site_url('/samples') ?>"><?php _e('Color Samples'); ?></a></li>
      <li><a href="<?php echo site_url('/inspiration') ?>"><?php _e('Inspiration'); ?></a></li>
      <li><a href="<?php echo site_url('/inspiration') ?>"><?php _e('Our Story'); ?></a></li>
      <li><a href="<?php echo site_url('/inspiration') ?>"><?php _e('Contact'); ?></a></li>
   </ul>
</div>


<?php get_footer(); ?>