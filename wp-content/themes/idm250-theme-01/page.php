<?php
/**
 * The default template for displaying all new pages
 */?> 
<?php
get_header();?> 
<div> 
    <?php if (get_the_post_thumbnail_url()) {
      echo 
      "<div>
      <img src='" . get_the_post_thumbnail_url() . "' alt='Hero Image'>
      </div>";
  } ?>
</div> 
<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>