<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<html>

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        ‘
        gtm.start’: new Date().getTime(),
        event: ‘gtm.js’
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != ‘dataLayer’ ? ‘ & l = ‘+l : ‘’;
      j.async = true;
      j.src = ’https: //www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window, document, ‘script’, ‘dataLayer’, ‘GTM - NGZNX6F’);
  </script>
  <!-- End Google Tag Manager -->

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src=“https://www.googletagmanager.com/ns.html?id=GTM-NGZNX6F” height=“0" width=“0” style=“display:none;visibility:hidden”></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?php echo get_stylesheet_directory_uri() ?>/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_stylesheet_directory_uri() ?>/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_stylesheet_directory_uri() ?>/css/mk-service-as.webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_stylesheet_directory_uri() ?>/css/custom.css" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Arimo:regular,500,600,700,italic:latin,latin-ext"]
      }
    });
  </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->

  <script type="text/javascript">
    ! function(o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
  </script>
  <link href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo get_stylesheet_directory_uri() ?>/images/webclip.png" rel="apple-touch-icon">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="section wf-section">
    <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
      <div class="menu">
        <div class="header w-container">
          <nav role="navigation" class="nav-menu w-nav-menu">
            <?php
            wp_nav_menu(
              array(
                'theme_location'  => 'primary',
                'menu_id'         => 'main-menu',
                'menu_class'      => 'nav top-nav',
                'link_before'     => '<span>',
                'link_after'      => '</span>',
              )
            );
            ?>
          </nav>


          <a href="<?php echo esc_url(home_url('/')); ?>" class="brand w-nav-brand">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.webp" loading="lazy" alt="" class="image">
          </a>


          <a class="icon-navlink nav-link" target='_blank' href="https://www.facebook.com/mkserviceas">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ic-fb-white.svg" loading="lazy" alt="" class="nav-icon">
          </a>

          <a class="icon-navlink nav-link" target='_blank' href="https://www.instagram.com/mk_service_/">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/instagram.svg" loading="lazy" alt="" class="nav-icon">
          </a>


          <div class="menu-button w-nav-button">
            <div class="icon w-icon-nav-menu"></div>
          </div>
        </div>
      </div>
    </div>
  </div>