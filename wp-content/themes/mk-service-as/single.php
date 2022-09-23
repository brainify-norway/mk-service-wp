<?php get_header() ?>


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
      <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <p><br><b>Del dette!</b>
    <div class=“addthis_inline_share_toolbox”></div>
    </p>
    </p>
  </div>
</div>


<?php get_footer(); ?>