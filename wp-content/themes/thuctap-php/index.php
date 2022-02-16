<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accset/css/thanh-toan.css">
    <title>Thanh toán</title>
</head>

<body>
    <div class="bg-out">
        <div class="bg-in">
            <div class="bg-vector">
                <img src="img/bg.svg" alt="vector">
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
                <img src="img/little.png" alt="littlelogo">
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
                <input type="submit" value="300.000 VNĐ">
            </div>
            <div class="content-2">
                <p>
                    Số lượng vé
                </p>
                <div class="content-2-1">
                    <div class="content-2-1-1">
                        <p>
                            4
                        </p>
                    </div>
                    <p>
                        Vé
                    </p>
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
 	global $wpdb;
 	$limit = 100;
 	$offset = 0;
    $tableterm  = $wpdb->prefix . 'terms';
    $tabletaxo  = $wpdb->prefix . 'term_taxonomy';
    $sql = "SELECT  `term`.`term_id` as id,
                    `term`.`name`   as title,
                    `term`.`slug`   as slug,
                    `tax`.`parent`  as parent,
                    `tax`.`count`   as count
    FROM $tableterm as term
    LEFT JOIN $tabletaxo as tax ON `term`.`term_id` = `tax`.`term_id`
    WHERE `tax`.`taxonomy` = 'category'  
    ORDER BY `term`.`term_id` DESC
    LIMIT %d OFFSET %d";
    $data = $wpdb->get_results( $wpdb->prepare($sql, $limit, $offset), ARRAY_A);
?>
</body>

</html>