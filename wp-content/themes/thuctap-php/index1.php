<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Đầm Sen</title>
        <?php
        wp_head();
        ?>
    </head>
    <body>
        <!-- HEADER -->
        <div class="header" style="width: 100%; height: 107px;">
            <div class="img">
                <img class="img-little" src="img/little.png">
            </div>
            <div class="navbar">
                <ul>
                    <li>
                        <a class="a" href="" class="container-bt1">Trang chủ</a>
                        <a class="a" href="sukien.html" class="container-bt2">Sự kiện</a>
                        <a class="a" href="lienHe.html" class="container-bt3">Liên hệ</a>
                        <a class="a1" href="" class="container-bt4" style="border: 10px"><img
                        src="img/telephone.png">0123456789</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END HEADER -->
        <!-- -------------------------------------------------------------------------------- -->
        <!-- BACKGOUND IN BACKGROUND -->
        <div class="background">
            <!--IMG-->
            <div class="img" style="width: 100%; height:41%;">
                <div class="img-1">
                    <img src="img/image1.png" alt="img1">
                </div>
                <div class="text">
                    <div>
                        <h3 id="text1">ĐẦM SEN</h3>
                    </div>
                    <div>
                        <h3 id="text2">PARK</h3>
                    </div>
                </div>
                <div>
                    <img class="img-2" src="img/image2.png" alt="img2">
                </div>
                <div>
                    <img class="img-3" src="img/image3.png" alt="img3">
                </div>
                <div>
                    <img class="img-4" src="img/image4.png" alt="img4">
                </div>
                <div style="position: absolute;right: 44px; bottom: -35px;">
                    <img src="img/image2.png" alt="img6">
                </div>
                <div style="position: absolute;bottom: -15px;left: 666px">
                    <img src="img/image7.png" alt="img7">
                </div>
            </div>
            <!-- END IMG -->
            <!-- Đây là Block lớn -->
            <div class="body">
                <div style="position: absolute;right: 0px;">
                    <img src="img/image5.png" alt="img5">
                </div>
                <!-- Block 1 -->
                <div class="block-1" style="width: 60%;height:420px;float: left;">
                    <div class="block-1-1">
                        <!-- Block trái -->
                        <div class="block-1-1-text">
                            <div class="img-Lisa">
                                <img src="img/Lisa_Arnold_Lay_Do_F2.png" alt="Lisa_Arnold">
                            </div>
                            <div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo.
                                    Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.
                                </p>
                                <p>
                                    Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus,
                                    lobortis molestie lectus consequat a.
                                </p>
                            </div>
                            <div class="text-news">
                                <!-- Text block 1 phần thông tin-->
                                <ul>
                                    <li><img src="img/star.png" alt="img">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                    </li>
                                    <li><img src="img/star.png" alt="img">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                    </li>
                                    <li><img src="img/star.png" alt="img">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                    </li>
                                    <li><img src="img/star.png" alt="img">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Block 2 -->
                <div class="block-2" style="width: 40%; height:420px; float: left;">
                    <div class="block-2-1">
                        <!-- Content block 2 -->
                        <div class="ticket">
                            <div class="ticket-1">
                                <p class="text-ticket">VÉ CỦA BẠN</p>
                                <!-- Vé của bạn -->
                            </div>
                        </div>
                        <div class="contact-form-list" style="width: 100%;">
                            <form action="index_submit" method="get" accept-charset="utf-8">
                                <div class="form-group" style="width: 100%;">
                                    <div class="select">
                                        <select>
                                            <option value="goigiadinh">Gói gia đình</option>
                                            <option value="goivip">Gói VIP</option>
                                            <option value="goitieuchuan">Gói tiêu chuẩn</option>
                                        </select>
                                    </div>
                                    <div class="form-ngang" style="width: 70%;">
                                        <!-- Số lượng vé -->
                                        <div class="input-1" style="float: left;">
                                            <input type="text" name="soluongve" placeholder="Số lượng vé">
                                        </div>
                                        <!-- Ngày đặt vé -->
                                        <div class="input-2">
                                            <input type="date" id="start" name="trip-start" value="dd/mm/yy"
                                            min="2015-01-01" max="2025-12-31">
                                        </div>
                                    </div>
                                    <div class="input-3">
                                        <input type="text" name="hoten" placeholder="Họ và tên">
                                    </div>
                                    <div class="input-4">
                                        <input type="text" name="number-phone" placeholder="Số điện thoại">
                                    </div>
                                    <div class="input-5">
                                        <input type="text" name="mail" placeholder="Địa chỉ email">
                                    </div>
                                </div>
                                <div class="input-submit" style="text-align: center;">
                                    <input type="submit" name="submit" value="Đặt vé">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End block 2-1 -->
                </div>
                <!-- End bock 2 -->
            </div>
            <!-- End block body -->
        </div>

        <?php
        wp_footer(); 
        ?>
        <!-- End block background -->
    </body>
</html>