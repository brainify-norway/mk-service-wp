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

  <div class="content w-container button-wrapper">
    <div class="wp-block-button is-style-fill">
      <a class="wp-block-button__link" href="/produkt-og-tjeneste-tilpasning" style="border-radius:2px">
        Få tilbud
      </a>
    </div>
  </div>
</div>


<?php get_footer(); ?>