<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<html>

<head>
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
            <a href="<?php echo site_url(); ?>/" class="nav-link w-nav-link">Home</a>
            <a href="<?php echo site_url(); ?>/om-oss" class="nav-link w-nav-link">Om oss</a>
            <a href="<?php echo site_url(); ?>/produkter" class="nav-link w-nav-link">Produkter</a>
            <a href="<?php echo site_url(); ?>/tjenester" class="nav-link w-nav-link">Tjenester</a>
            <a href="<?php echo site_url(); ?>/referanser" class="nav-link w-nav-link">Referanser</a>
            <a href="<?php echo site_url(); ?>/kontakt" class="nav-link w-nav-link">kontakt</a>
            <a href="<?php echo site_url(); ?>/nyheter" class="nav-link last-child w-nav-link">Nyheter</a>
          </nav>


          <a href="<?php echo site_url(); ?>" class="brand w-nav-brand">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.webp" loading="lazy" alt="" class="image">
          </a>


          <a class="facebook-navlink nav-link" target='_blank' href="https://www.facebook.com/mkserviceas">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ic-fb-white.svg" loading="lazy" alt="" class="fb-icon">
            <p class="fb-text">Følg oss på Facebook</p>
          </a>


          <div class="menu-button w-nav-button">
            <div class="icon w-icon-nav-menu"></div>
          </div>
        </div>
      </div>
    </div>
  </div>