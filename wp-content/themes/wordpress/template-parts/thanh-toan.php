<?php

global $wpdb;
//include_once("wp-config.php");
//include_once("wp-includes/wp-db.php");

$emloyeeId = isset($_REQUEST['id']) ? $_REQUEST['id'] : 1;
if ($emloyeeId) {
    $sql = "select * from wp_employees where id = {$emloyeeId}";
    $result = $GLOBALS['wpdb']->get_row($sql);
    //var_dump($result->id); die;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="accset/css/thanh-toan.css"> -->
    <title>Thanh toán</title>
    <?php
    wp_head();
    ?>
</head>

<body>
    <div class="bg-out">
        <div class="bg-in">
            <div class="bg-vector">
                <img src="accset/img/bg.svg" alt="vector">
            </div>
            <h1>
                Thanh toán
            </h1>
        </div>

        <header>
            <div class="banner">
                <img src="img/header.svg" alt="">
            </div>
            <div class="LittleLogo">
                <img src="/accset/img/little.png" alt="littlelogo">
            </div>
            <div class="tags">
                <ul class="tags-nav">
                    <li id="tags-trangchu">
                        <a href="index.html">
                            <p id="text-trangchu">Trang chủ</p>
                        </a>

                    </li>
                    <li id="tags-sukien">
                        <a href="sukien.html">
                            <p id="text-sukien">Sự kiện</p>
                        </a>

                    </li>
                    <li id="tags-lienhe">
                        <a href="lienHe.html">
                            <p id="text-lienhe">Liên hệ</p>
                        </a>
                    </li>
                </ul>
                <ul class="tags-phone">
                    <li id="tags-phone-li">
                        <img src="img/icon-phone.svg" alt="phone">
                        <p>
                            0123456789
                        </p>
                    </li>
                </ul>
            </div>
        </header>

        <!-- Khung bự chứa nội dung chính -->
        <div class="container">
            <div class="svg-container-1">
                <img src="svg-thanhtoan/container-1.svg" alt="">
            </div>
            <div class="svg-container-2">
                <img src="svg-thanhtoan/container-2.svg" alt="">
            </div>
            <div class="svg-container-3">
                <img src="svg-thanhtoan/container-3.svg" alt="">
            </div>
            <div class="content-1">
                <p>
                    Số tiền thanh toán
                </p>
                <div class="content-1-1">
                    <p>
                        <?= $result->cost ?> vnđ
                    </p>
                </div>
            </div>
            <div class="content-2">
                <p>
                    Số lượng vé
                </p>
                <div class="content-2-1">
                    <div class="content-2-1-1">
                        <p>
                            <?= $result->tickets ?>
                        </p>
                    </div>
                    <p>
                        Vé
                    </p>
                </div>
            </div>
            <div class="content-3">
                <p>
                    Ngày sử dụng
                </p>
                <div class="content-3-1">
                    <p>
                        <?= $result->date_start ?>
                    </p>
                </div>

            </div>

            <!-- Thông tin liên hệ -->
            <div class="content-4">
                <p>
                    Thông tin liên hệ
                </p>
                <div class="content-4-1">
                    <p>
                        <?= $result->email ?>
                    </p>
                </div>
            </div>

            <!-- Điện thoại-->
            <div class="content-5">
                <p>
                    Điện thoại
                </p>
                <div class="content-5-1">
                    <p>
                        <?= $result->phone ?>
                    </p>
                </div>
            </div>

            <!-- Email-->
            <div class="content-6">
                <p>
                    Email
                </p>
                <div class="content-6-1">
                    <h4><?= $result->email ?></h4>
                </div>
            </div>

            <!-- Main Right -->
            <div class="content-right">

                <!-- Số thẻ-->
                <div class="content-7">
                    <p>
                        Số thẻ
                    </p>
                    <div class="content-7-1">
                        <p>
                            <?= $result->card_number ?>
                        </p>
                    </div>
                </div>

                <!-- Họ tên chủ thẻ-->
                <div class="content-8">
                    <p>
                        Họ tên chủ thẻ
                    </p>
                    <div class="content-8-1">
                        <p>
                            <?= $result->card_name ?>
                        </p>
                    </div>
                </div>

                <!-- Ngày hết hạn -->
                <div class="content-9">
                    <p>
                        Ngày hết hạn
                    </p>
                    <div class="content-9-1">
                        <input type="date" name="date" id="date">
                    </div>
                </div>

                <!-- CVV/CVC-->
                <div class="content-10">
                    <p>
                        CVV/CVC
                    </p>

                    <input type="password" class="content-10-1" value="<?= $result->cvv_cvc ?>">

                </div>


            </div>

            <div class="button-pay">
                <input type="submit" value="Thanh toán">
                <div class="button-bg">
                    <img src="svg-thanhtoan/btn-pay.svg" alt="btn-pay">
                </div>
            </div>


        </div>

        <!-- Khung chứa chữ Vé Cổng Vé Gia Đình -->
        <div class="container-1">
            <p>
                VÉ CỔNG - VÉ GIA ĐÌNH
            </p>
            <img src="svg-thanhtoan/container-4.svg" alt="">

        </div>

        <!-- Khung chứa chữ Thông Tin Thanh Toán -->
        <div class="container-2">
            <img src="svg-thanhtoan/container-4.svg" alt="">
            <p>
                THÔNG TIN THANH TOÁN
            </p>
        </div>

    </div>

    <?php
    wp_footer();
    ?>
</body>

</html>