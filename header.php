<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    <?php wp_head(); ?>
    <?php define('ROOTPATH', __DIR__); ?>
    <script src="https://cdn.jsdelivr.net/npm/macy@2.3.0/dist/macy.min.js"></script>
    <script type="text/javascript"> var _iub = _iub || []; _iub.csConfiguration = {"lang":"it","siteId":1398022,"cookiePolicyId":56351435,"banner":{"textColor":"#fff","backgroundColor":"#1D1D1B", "fontFamily":"PxGroteskLight"},"cookiePolicyInOtherWindow":true}; </script><script type="text/javascript" src="//cdn.iubenda.com/cookie_solution/safemode/iubenda_cs.js" charset="UTF-8" async></script>    
  </head>
  <body>
    <?
      $themeRoot = get_stylesheet_directory_uri();
    ?>
  <div>
    <div class="header">
      <div class="logo__container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <h1 class="logo">dario volpe</h1>
        </a>
      </div>
      <div class='header__menu'>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="title--menu <?php if (is_home()) echo 'title--menu--active'?>">artworks</a>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="title--menu <?php if (is_page('about')) echo 'title--menu--active'?>">about</a>
        <a href='https://www.instagram.com/dariovolpe_/' target='_blank' class="title--menu">instagram</a>
        <!-- <?php
          if(is_page('about') ) { ?>
            <a class="title--menu">info@dariovolpe.it</a>
        <?php } ?> -->
        <!-- <a class="title--menu">shop</a> -->
      </div>
    </div>
