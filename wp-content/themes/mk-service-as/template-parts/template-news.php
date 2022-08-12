<?php

/**
 * Template Name: News page
 *
 */
?>

<?php get_header() ?>

<div class="section-3 wf-section">
  <div class="content w-container">
    <div class="blog-posts w-dyn-list">
      <div role="list" class="collection-list w-dyn-items">
        <?php while (have_posts()) : the_post();
          the_content();
        endwhile; ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>