<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/header.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/su-kien.css">
</head>
<body <?php body_class(); ?>>
    <!-- HEADER -->
    <header>
        <img src="<?php bloginfo('stylesheet_directory') ?>/image/header.svg" alt="header">
        <img id="little_little_logo" src="<?php bloginfo('stylesheet_directory') ?>/image/little.png" alt="little-logo">
        <div class="nav-tags">
            <div class="nav-tags tags-phone">
                <p id="text-phone">
                    0123456789
                </p>
                <div class="tags-phone phone-svg">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/image/icon-phone.svg" alt="icon-phone">
                </div>
            </div>
            <div class="tags-3">
                <?php wp_nav_menu( 
                  array( 
                      'theme_location' => 'menu-header', 
                      'container' => 'false', 
                      'menu_id' => 'menu-header', 
                      'menu_class' => 'menu-header'
                  ) 
              ); ?>
          </div>
      </div>
  </header>
<!-- END_HEADER -->