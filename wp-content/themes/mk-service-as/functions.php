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

function my_excerpt_length($length)
{
  return 20;
}
add_filter("excerpt_length", "my_excerpt_length");

function new_excerpt_more($more)
{
  return ' ';
}
add_filter('excerpt_more', 'new_excerpt_more');
