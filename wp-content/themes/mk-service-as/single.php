<?php

/**
 * Template Name: News Article
 * Template Post Type: post
 */

get_header() ?>

<?php
$faktatitle = get_field("title");
$fakta1 = get_field("fakta-1");
$fakta2 = get_field("fakta-2");
$fakta3 = get_field("fakta-3");

?>

<div class="section wf-section">
  <div class="content container-article">
    <h1 class="title">
      <?php while (have_posts()) : the_post();
        the_title();
      endwhile; ?>
    </h1>

    <div class="excerpt">
      <?php while (have_posts()) : the_post();
        the_excerpt();
      endwhile; ?>
    </div>

    <div class="artikkel-bilde-wrap">
      <img class="artikkel-bilde" src="<?php the_post_thumbnail_url(); ?>">
    </div>
    <p class="artikkel-bilde-tekst"><?php get_the_author(); ?></p>
    <p class="artikkel-bilde-tekst"><?php the_modified_time('F jS, Y'); ?></p>

    <div class="artikkel-innhold-wrap">
      <div class="artikkel-left">
        <?php while (have_posts()) : the_post();
          the_content();
        endwhile; ?>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <p><br><b>Del dette!</b></p>
        <div class=“addthis_inline_share_toolbox”></div>
      </div>
      <div class="artikkel-right">
        <?php if ($faktatitle) { ?>
          <div class="artikkel-faktaboks">
            <h3 class="artikkel-fakta-heading">
              <?php echo $faktatitle ?>
            </h3>
            <p><?php echo $fakta1 ?></p>
            <p><?php echo $fakta2 ?></p>
            <p><?php echo $fakta3 ?></p>
          </div> <?php }; ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>