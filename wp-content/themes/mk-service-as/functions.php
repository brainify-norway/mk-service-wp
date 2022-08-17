<?php
add_theme_support('post-thumbnails', array(
  'post',
  'page',
  'tjenester',
  'utforte_jobber',
  'fornoyde_kunder',


));


@ini_set('upload_max_size', '256M');
@ini_set('post_max_size', '256M');
@ini_set('max_execution_time', '300');
