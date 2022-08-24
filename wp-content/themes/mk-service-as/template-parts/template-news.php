<?php

/**
 * Template Name: News page
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

    <div class="news-posts w-dyn-list">

      <?php
      $news = new WP_Query(array(
        'posts_per_page' => 9,
        'post_type' => 'post',
      ));

      while ($news->have_posts()) {
        $news->the_post();
      ?>
        <div>
          <div class="news">

            <img class="news-image" src="<?php the_post_thumbnail_url(); ?>">
            <a href="<?php echo the_permalink() ?>"> </a>
          </div>
          <p class="news-title"><?php the_title(); ?></p>
          <p class="news-text"><?php the_excerpt(); ?>
          <div class="wp-block-button is-style-fill">
            <a class="wp-block-button__link" href="<?php echo the_permalink() ?>" style="border-radius:2px">
              Les mer
            </a>
          </div>
        </div>
      <?php
      }
      ?>


    </div>
  </div>
</div>


<?php get_footer(); ?>