<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/su-kien.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- HEADER -->
    <header>
        <!-- bg header -->
        <div class="bg-header">
            <img src="<?php bloginfo('stylesheet_directory') ?>/svg-chung/header.svg" alt="header">
        </div>

        <!-- Logo -->
        <img id="little_little_logo" src="<?php bloginfo('stylesheet_directory') ?>/assets/image/little.png" alt="little-logo">

        <!-- nav-bar -->
        <div class="nav-tags">
            <div class="nav-tags tags-phone">
                <p id="text-phone">
                    0123456789
                </p>
                <div class="tags-phone phone-svg">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/svg-chung/icon-phone.svg" alt="icon-phone">
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