<?php

/**
 * Template Name: Services page
 *
 */
?>

<?php get_header() ?>

<div class="section-3 wf-section">
  <div class="content w-container">
    <div class="Services-posts w-dyn-list">

      <?php while (have_posts()) : the_post();
        the_content();
      endwhile; ?>

      <?php
      $services = new WP_Query(array(
        'posts_per_page' => 9,
        'post_type' => 'tjenester',
      ));

      while ($services->have_posts()) {
        $services->the_post();
        the_content();

      ?>
        <p><?php the_title();
            ?></p>
        <img src="<?php the_post_thumbnail(); ?>">

        <button> Les mer</button>
      <?php
      }
      ?>



    </div>
  </div>
</div>


<?php get_footer(); ?>