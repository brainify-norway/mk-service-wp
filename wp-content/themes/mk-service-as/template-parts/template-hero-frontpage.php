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

        <h1 class="hero-title">
          <?php while (have_posts()) : the_post();
            the_title();
          endwhile; ?>
        </h1>
        <p class="hero-content">
          <?php while (have_posts()) : the_post();
            the_content();
          endwhile; ?>
        </p>

      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>