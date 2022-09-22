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


/*MENU HEADER*/
function mkservice_custom_header_setup()
{
  $args = array(
    'default-image'      => get_template_directory_uri() . '',
    'default-text-color' => '000',
    'width'              => 1000,
    'height'             => 250,
    'flex-width'         => true,
    'flex-height'        => true,
  );
  add_theme_support('custom-header', $args);
}
add_action('after_setup_theme', 'mkservice_custom_header_setup');

register_nav_menus(
  array(
    'primary-menu' => __('Primary Menu'),
    'secondary-menu' => __('Secondary Menu')
  )
);

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'   => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_sub_page(array(
    'page_title'   => 'Theme Header Settings',
    'menu_title'  => 'Header',
    'parent_slug'  => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'   => 'Theme Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug'  => 'theme-general-settings',
  ));
}
