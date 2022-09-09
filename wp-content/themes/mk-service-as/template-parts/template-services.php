<?php

/**
 * Template Name: Services page
 *
 */
?>

<?php get_header() ?>

<div class="section wf-section">
  <div class="content w-container">
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

    <div class="services-posts w-dyn-list">

      <?php
      $services = new WP_Query(array(
        'posts_per_page' => 9,
        'post_type' => 'tjenester',
      ));

      while ($services->have_posts()) {
        $services->the_post();
      ?>
        <div class="service">
          <a href="<?php echo the_permalink() ?>">
            <div class="service-wrapper">
              <div class="overlay"></div>
              <img class="service-image" src="<?php the_post_thumbnail_url(); ?>">

            </div>
            <div class="service-card">
              <h3 class="service-title"><?php the_title(); ?></h3>
              <div class="service-description"><?php the_excerpt(); ?></div>
            </div>
          </a>
        </div>

      <?php
      }
      ?>


    </div>
  </div>
</div>


<?php get_footer(); ?>