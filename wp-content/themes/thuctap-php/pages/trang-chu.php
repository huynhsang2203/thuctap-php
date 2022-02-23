<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory'); ?>/css/trang-chu.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory'); ?>/css/background.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/header.css">
</head>
<body>
    <?php get_template_part( 'background');?>
    <div class="image3">
        <img src="<?php bloginfo( 'stylesheet_directory'); ?>/image/image3.png" alt="image3">
    </div>

    <?php get_header();?>

    <!-- ảnh hoa sen -->
    <div class="hoa-sen">
        <img src="<?php bloginfo( 'stylesheet_directory'); ?>/image/hoasen.png" alt="hoasen">
    </div>

    <!-- chữ ĐẦM SEN PARK -->
    <div class="dam-sen-park">
        <h1>
            ĐẦM SEN PARK
        </h1>>
    </div>

    <div class="image2">
        <img src="<?php bloginfo( 'stylesheet_directory'); ?>/image/image2.png" alt="image2">
    </div>

    <div class="image4">
        <img src="<?php bloginfo( 'stylesheet_directory'); ?>/image/image4.png" alt="image4">
    </div>

    <div class="image6">
        <img src="<?php bloginfo( 'stylesheet_directory'); ?>/image/image6.png" alt="image6">
    </div>


    <div class="main">
        <!-- background main -->
        <!-- bg trái -->
        <div class="main-bg">
            <img src="<?php bloginfo( 'stylesheet_directory'); ?>/svg-trang-chu/main-bg.svg" alt="main-bg">
        </div>

        <!-- bg giữa -->
        <div class="main-bg-mid">
            <img src="<?php bloginfo( 'stylesheet_directory'); ?>/svg-trang-chu/main-bg-mid.svg" alt="main-bg-mid">
        </div>

        <!-- bg phải -->
        <div class="main-bg1">
            <img src="<?php bloginfo( 'stylesheet_directory'); ?>/svg-trang-chu/main-bg1.svg" alt="main-bg1">
        </div>

    </div>
    <div class="ticket-title">
        <img src="<?php bloginfo( 'stylesheet_directory'); ?>/svg-trang-chu/ticket-title.svg" alt="ticket-title">
        <p>
            Vé của bạn
        </p>
    </div>
</body>
</html>