<?php
/*
 * Template Name: Single Tjenester
 */

get_header() ?>


<div class="section wf-section">
  <div class="content w-container pages">
    <h1 class="title">
      <?php while (have_posts()) : the_post();
        the_title();
      endwhile; ?>
    </h1>
    <p class="content">
      <?php while (have_posts()) : the_post();
        the_content();
      endwhile; ?>
    </p>
  </div>
</div>


<?php get_footer(); ?>