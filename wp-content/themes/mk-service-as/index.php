<?php get_header() ?>


<div class="section wf-section">
  <div class="content w-container pages">
    <?php while (have_posts()) : the_post();
      the_content();
    endwhile; ?>
  </div>
</div>


<?php get_footer(); ?>