<?php

/**
 * Template Name: Hero Image
 *
 */
?>

<?php get_header() ?>


<div class="section wf-section">
  <div class="div-block">
    <div class="hero">
      <div class="frontpage content w-container">
        <?php while (have_posts()) : the_post();
          the_content();
        endwhile; ?>
        <h1 class="hero-title">
        </h1>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>