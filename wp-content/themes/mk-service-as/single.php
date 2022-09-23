<?php get_header() ?>


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

    <div class="artikkel-bilde">
      <img class="project-image" src="<?php the_post_thumbnail_url(); ?>">
      <p class="artikkel-bilde-tekst"><?php get_the_author(); ?></p>
      <p class="artikkel-bilde-tekst"><?php the_modified_time('F jS, Y'); ?></p>
    </div>

    <div class="artikkel-innhold-wrap">
      <div class="artikkel-left">
        <?php while (have_posts()) : the_post();
          the_content();
        endwhile; ?>
      </div>
      <div class="artikkel-right">
        <div class="artikkel-faktaboks">
          <h3 class="artikkel-fakta-heading">Del dette!</h3>
          <!-- Go to www.addthis.com/dashboard to customize your tools -->
          <p><br><b></b>
          <div class=“addthis_inline_share_toolbox”></div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>