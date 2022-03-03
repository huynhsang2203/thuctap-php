<head>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory'); ?>/css/trang-chu.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory'); ?>/css/background.css"> 
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
            <?php bloginfo( 'name' ) ?>
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

        <!-- Khung chứa đăng kí -->
        <div class="register">
            <form action="#" method="post">
                <div class="family-package">
                    <select name="select-choice" id="select-choice">
                        <option value="Choice 1">Gói gia đình</option>
                        <option value="Choice 2">Gói tiêu chuẩn</option>
                        <option value="Choice 3">Gói VIP</option>
                    </select>
                </div>
                <div class="number-of-ticket">
                    <input type="text" placeholder="Số lượng vé">
                </div>
                
                <div class="date-start">
                    <input type="text" placeholder="Ngày sử dụng">
                </div>

                <div class="full-name">
                    <input type="text" placeholder="Họ và tên">
                </div>

                <div class="phone">
                    <input type="text" placeholder="Số điện thoại">
                </div>

                <div class="email">
                    <input type="text" placeholder="Email">
                </div>
            </form>
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