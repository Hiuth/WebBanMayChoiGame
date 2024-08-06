<?php
  require_once 'connect.php';
  include "Thuvien.php";
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- reset các định dạng mặc định -->
    <link rel="stylesheet" href="Css/reset.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css"
        integrity="sha512-3PN6gfRNZEX4YFyz+sIyTF6pGlQiryJu9NlGhu9LrLMQ7eDjNgudQoFDK3WSNAayeIKc6B8WXXpo4a7HqxjKwg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="Css/style.css" />
    <link rel="stylesheet" href="Css/screen.css" />
    <link rel="stylesheet" href="Css/giohang.css" />
    <link rel="stylesheet" href="Css/product_page.css" />
    <title>2004'S Store</title>
</head>
<div>
    <!-- js dùng cho menu-->
    <script>
    $(document).ready(function() {
        $("#toggle").click(function() {
            $("nav").slideToggle();
        });
    });
    </script>
    <!-- check -->
    <!-- Header -->
    <div class="header-wallpaper">
        <div class="header">
            <div class="left-selection">
                <a href="index.php">
                    <img class="Logo_website" src="Picture\Logo_web_3.png" alt="logo_web" /></a>
            </div>
            <!-- search bar -->
            <div class="middle-selection">
                <input class="search-bar" type="search" placeholder="Tìm kiếm sản phẩm ..." />
                <button class="search-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="right-selection">
                <div class="cart-wallpaper" id="cart-1">
                    <a class="Cart" href="#"><span class="text-header">Giỏ Hàng /</span><i
                            class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="cart_wallpaper_2" id="cart-2">
                    <a class="Cart_2" href="#">
                        <i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </div>
        <!-- Thanh điều hướng (menu) -->
        <div id="toggle">
            <!-- cái nút menu 3 gạch -->
            <i class="fa-solid fa-bars"></i>
        </div>
        <nav>
            <ul class="main-menu">
                <li>
                    <a href="">
                        <i class="fa-brands fa-playstation"></i>
                        <span>PLAYSTATION</span></a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-brands fa-xbox"></i><span>MICROSOFT XBOX</span></a>
                </li>
                <li>
                    <a href="">
                        <i class="fab fa-nintendo-switch"></i>
                        <span>NITENDO SWITCH</span></a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-solid fa-gamepad"></i><span>TAY CẦM GAME</span></a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-solid fa-paper-plane"></i><span>LIÊN HỆ</span></a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Thân trang -->
    <div class="page-title-wall">
        <div class="page-title">
            <div class="left-title">
                <h1>PlayStation (PS)</h1>
            </div>
            <div class="right-title">
                <form action="Playstation_page.php" method="GET">
                    <select name="sort" id="sort" onchange="this.form.submit()">
                        <!-- khi select-box thay đổi, form sẽ tự động được gửi lệnh -->
                        <option value="default">Mặc định</option>
                        <option value="price-asc"
                            <?php echo isset($_GET['sort']) && $_GET['sort'] == 'price-asc' ? 'selected' : ''; ?>>Thứ tự
                            theo giá: thấp đến cao</option>
                        <!-- ? toán tử điều kiện -->
                        <option value="price-desc"
                            <?php echo isset($_GET['sort']) && $_GET['sort'] == 'price-desc' ? 'selected' : ''; ?>>Thứ
                            tự theo giá: cao đến thấp</option>
                    </select>
                </form>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="sidebar">
            <h2>Gợi ý cho bạn</h2>
            <?php
              $category_id = "Đĩa game Ps5";
              ShowRandomProduct($category_id,4);
              $category_id_2="Đĩa game Ps4";
              ShowRandomProduct($category_id_2,4);
            ?>

        </div>
        <div class="main-product">
            <?php
            //show dữ liệu theo phương pháp loại trừ
            $category_id =["NintendoSwtich","Thẻ game Nintendo","Tay cầm xbox","Tay cầm Nintendo","Xbox","Playstation4","Đĩa game Ps5","Playstation5","Tay cầm Ps5"];
            ShowProduct($category_id)
            
            ?>
        </div>
    </div>

</div>
<!-- Chân trang -->
<footer class="footer">
    <div class="footer-content">
        <div class="about">
            <span class="footer-text-title">Giới Thiệu</span>
            <p>
                - 2004’S Store là đơn vị bán lẻ các sản phẩm máy chơi game, tay cầm,
                đĩa game Sony PS4, PS5, Nintendo Switch, Microsoft Xbox One uy tín.
            </p>
            <br />
            <span class="footer-text-title">ĐỊA CHỈ</span>
            <p>- 02 Võ Oanh, Phường 25, Bình Thạnh, Hồ Chí Minh</p>
            <p>- 9 Nguyễn Thị Định, An Phú, Quận 2, Thành phố Hồ Chí Minh</p>
        </div>
        <div class="contact">
            <span class="footer-text-title">LIÊN HỆ</span>
            <p>- Hotline: 0898.176.914 (Hồ Chí Minh)</p>
            <p>- 0901.497.185 (TP.HCM)</p>
            <p>- Email: 2004’sstore@gmail.com</p>
            <br />
            <span class="footer-text-title">THỜI GIAN LÀM VIỆC</span>
            <p>- 9h00 Sáng – 22h00 Tối</p>
        </div>
        <div class="follow-us">
            <span class="footer-text-title">Theo dõi 2004'S Store tại</span>
            <a href="https://youtu.be/dQw4w9WgXcQ?si=QiFbp9tAmNxaVkpt" target="_blank">
                <img src="Picture\Logo_youtube.png" alt="YouTube" width="180px" />
            </a>
            <a href="https://www.tiktok.com" target="_blank">
                <img src="Picture\Logo_tiktok.png" alt="TikTok" width="180px" />
            </a>
            <a href="https://www.facebook.com" target="_blank">
                <img src="Picture\Logo_facebook.png" alt="Facebook" width="180px" />
            </a>
            <a href="https://www.facebook.com/groups/ps5vietnam">
                <img src="Picture\Logo_Ps5_Group.png" alt="Hội PS5 Việt Nam" width="180px" />
            </a>
        </div>
        <div class="info">
            <span class="footer-text-title">Thông tin</span>
            <p>- Quy định chung</p>
            <p>- Quy định đặt cọc</p>
            <p>- Quy định bảo hành</p>
            <p>- Chính sách vận chuyển</p>
            <p>- Chính sách đổi trả</p>
            <br />
            <img src="Picture\Logo_BoCongthuong.png" alt="Đã thông báo bộ công thương" width="200" />
        </div>
    </div>
</footer>
<script src="js/main.js"></script>
<script src="js/button.js"></script>
</body>

</html>