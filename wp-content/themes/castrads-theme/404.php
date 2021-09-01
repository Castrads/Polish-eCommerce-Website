<?php get_header(); ?>


<div class="container-404">
   <h2 class="page-heading">Page Not Found</h2>
   <img src="">

   <h3>Sorry, I think you're lost. Please try following links.</h3>

   <ul>
      <li><a href="<?php echo site_url('/product') ?>">Product</a></li>
      <li><a href="<?php echo site_url('/resources') ?>">Resources</a></li>
      <li><a href="<?php echo site_url('/samples') ?>">Samples</a></li>
      <li><a href="<?php echo site_url('/inspiration') ?>">Inspiration</a></li>
   </ul>
</div>


<?php get_footer(); ?>