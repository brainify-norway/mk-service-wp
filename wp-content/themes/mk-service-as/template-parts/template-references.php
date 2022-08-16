<?php

/**
 * Template Name: References page
 *
 */
?>

<?php get_header() ?>

<div class="section wf-section">
  <div class="content w-container">
    <?php while (have_posts()) : the_post();
      the_content();
    endwhile; ?>

    <h2>Utførte jobber</h2>


    <div class="projects-posts w-dyn-list">

      <?php
      $projects = new WP_Query(array(
        'posts_per_page' => 9,
        'post_type' => 'utforte_jobber',
        'supports' => array('title', 'editor', 'thumbnail'),

      ));


      while ($projects->have_posts()) {
        $projects->the_post();
      ?><div class="referanser-content w-dyn-list">
          <div class="project"><a href="<?php echo the_permalink() ?>">
              <div class="overlay"></div>
              <img class="project-image" src="<?php the_post_thumbnail_url(); ?>">

            </a>
          </div>
          <p class="project-title"><?php the_title(); ?></p>
        </div>
      <?php
      }
      ?>


    </div>
  </div>

  <div class="content w-container">

    <h2>Fornøyde kunder</h2>
    <div class="testimonies-posts w-dyn-list">
      <?php
      $testimonies = new WP_Query(array(
        'posts_per_page' => 9,
        'post_type' => 'fornoyde_kunder',
      ));


      while ($testimonies->have_posts()) {
        $testimonies->the_post();
      ?>
        <div class="referanser-content w-dyn-list">
          <h3 class="testimony-title"><?php the_title(); ?></h3>
          <div class="testimony-wrapper">
            <div class="testimony">
              <img class="testimony-image" src="<?php the_post_thumbnail_url(); ?>">

            </div>
            <div class="testimony-content"><?php the_content(); ?></div>
          </div>
        </div>
      <?php
      }
      ?>


    </div>
  </div>
</div>


<?php get_footer(); ?>