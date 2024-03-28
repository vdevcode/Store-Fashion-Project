<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuAn1-web ban quan ao</title>
    <link rel="stylesheet" href="layout/css1/linearicons.css">
    <link rel="stylesheet" href="layout/css1/owl.carousel.css">
    <link rel="stylesheet" href="layout/css1/themify-icons.css">
    <link rel="stylesheet" href="layout/css1/font-awesome.min.css">
    <link rel="stylesheet" href="layout/css1/nice-select.css">
    <link rel="stylesheet" href="layout/css1/nouislider.min.css">
    <link rel="stylesheet" href="layout/css1/bootstrap.css">
    <link rel="stylesheet" href="layout/css1/main.css">
    <link rel="stylesheet" href="layout/css1/linearicons.css">
    <link rel="stylesheet" href="layout/css1/owl.carousel.css">
    <link rel="stylesheet" href="layout/css1/themify-icons.css">
    <link rel="stylesheet" href="layout/css1/font-awesome.min.css">
    <link rel="stylesheet" href="layout/css1/nice-select.css">
    <link rel="stylesheet" href="layout/css1/nouislider.min.css">
    <link rel="stylesheet" href="layout/css1/bootstrap.css">
    <link rel="stylesheet" href="layout/css1/main.css">
    <link rel="stylesheet" type="text/css" href="layout/styles/bootstrap4/bootstrap.min.css">
    <link href="layout/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="layout/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="layout/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="layout/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="layout/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="layout/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="layout/styles/blog_responsive.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="layout/styles.css">
    <link rel="stylesheet" href="layout/styles/profile_view.css">
    <style>
        .primarys-btn {
            display: inline-block;
            padding: 10px 20px; /* Điều chỉnh kích thước padding theo nhu cầu */
            background-color: #088178; /* Màu nền */
            color: #fff; /* Màu chữ */
            text-decoration: none;
            border-radius: 5px; /* Góc bo tròn */
        }
    </style>
    
</head>
<body>
<!-- Trong file view/header.php -->
<?php $user_profile = get_user_by_username($_SESSION['name']);?>
<section id="header">
    <a href="index.php"><img src="layout/img/logo2.png" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <div class="col3">
                <!-- Biểu mẫu tìm kiếm -->
                <form action="index.php" method="get">
                    <input type="text" name="search" placeholder="Tìm kiếm">
                    <input type="hidden" name="pg" value="shop"> <!-- Giữ nguyên trang hiện tại là shop -->
                    <input type="submit" value="Tìm kiếm">
                </form>
            </div>
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="index.php?pg=shop">Cửa hàng</a></li>
            <li><a href="index.php?pg=blog">Tin tức</a></li>
            <li><a href="index.php?pg=about">Giới Thiệu</a></li>
            <li><a href="index.php?pg=contact">Liên hệ</a></li>
            <?php if (is_user_logged_in()): ?>
                <!-- Nếu người dùng đã đăng nhập -->
                <li>
                    <div class="dropdown-content">
                        <a href="index.php?pg=profile_user"><img src="./layout/img/people/1.png" alt="" width="24px"> <?=$user_profile['hoten']?></a>
                        <a href="index.php?pg=doi-mat-khau"><i class="fas fa-key"></i> Đổi mật khẩu</a>
                        <a href="index.php?pg=dangxuat" id="dangxuat"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                    </div>
                    <a href="#" id="user"><i class="fas fa-user"></i></a>
                </li>
                <li id="lg-bag">
            <a href="index.php?pg=cart"><i class="far fa-shopping-bag"></i>
        <?php
        // Kiểm tra nếu giỏ hàng đã được khởi tạo và có sản phẩm
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            // Tính tổng số lượng sản phẩm trong giỏ hàng
            $totalQuantity = array_sum(array_column($_SESSION['cart'], 'quantity'));
            echo '<span class="cart-quantity">' . $totalQuantity . '</span>';
        }
        ?>
    </a>
</li>

            <?php else: ?>
                <!-- Nếu chưa đăng nhập -->
                <li>
                    <div class="dropdown-content">
                    <a href="index.php?pg=dangky" id="register"><i class="fas fa-user-plus"></i> Đăng ký</a>
                    <a href="index.php?pg=dangnhap" id="login"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
                    </div>
                    <a href="#" id="user"><i class="fas fa-user"></i></a>
                </li>
                <li id="lg-bag"><a href="index.php?pg=cart"><i class="far fa-shopping-bag"></i></a></li>
            <?php endif; ?>
            <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <?php if (is_user_logged_in()): ?>
            <!-- Nếu người dùng đã đăng nhập -->
            <a href="index.php?pg=cart"><i class="far fa-shopping-bag"></i></a>
        <?php endif; ?>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>






