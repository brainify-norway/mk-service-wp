<?php

/**
 * Template Name: References page
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

    <div class="projects-posts w-dyn-list">

      <?php
      $projects = new WP_Query(array(
        'posts_per_page' => 9,
        'post_type' => 'utforte_jobber',
        'supports' => array('title', 'editor', 'thumbnail'),
      ));

      while ($projects->have_posts()) {
        $projects->the_post();
      ?>
        <div class="project">
          <a href="<?php echo the_permalink() ?>">
            <div class="project-wrapper">
              <div class="overlay"></div>
              <img class="project-image" src="<?php the_post_thumbnail_url(); ?>">

            </div>
            <div class="project-card">
              <h3 class="project-title"><?php the_title(); ?></h3>
              <div class="project-description"><?php the_excerpt(); ?></div>
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