<?php
    $html_dssp_new=showsp($dssp_new);
    $html_dssp_best=showsp($dssp_best);
    $html_dssp_view=showsp($dssp_view);
    $html_luotmua = showluotmua($dssp_luotmua);
?>
<!-- <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <button>Shop Now</button>
</section> -->
    <section>
        <div id="bannerslideshow" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-caption">
                <h4>Chào Mừng Đến Với YAME </h4>
                <h3>Ưu đãi siêu giá trị</h3>
                <h2>Trên tất cả các sản phẩm</h2>
                <p>Tiết kiệm nhiều hơn với phiếu giảm giá và giảm giá tới 70%!</p>
                <a href="index.php?pg=shop"><button>Mua Ngay</button></a>
                </div>
            <div class="carousel-item active">
                <img src="layout/img/banner/b24.jpg" alt="" width="100%" height="500">
            </div>
            <div class="carousel-item">
                <img src="layout/img/banner/b25.jpg" alt="" width="100%" height="500">
            </div>
            <div class="carousel-item">
                <img src="layout/img/banner/b26.jpg" alt="" width="100%" height="500">
            </div>
            <div class="carousel-item">
                <img src="layout/img/banner/b27.jpg" alt="" width="100%" height="500">
            </div>
            </div>
        </div>
    </section>
    

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="layout/img/features/f1.png" alt="">
            <h6>Miễn Phí Giao Hàng</h6>
        </div>
        <div class="fe-box">
            <img src="layout/img/features/f2.png" alt="">
            <h6>Đặt Hàng Online</h6>
        </div>
        <div class="fe-box">
            <img src="layout/img/features/f3.png" alt="">
            <h6>Tiết Kiệm Tiền</h6>
        </div>
        <div class="fe-box">
            <img src="layout/img/features/f4.png" alt="">
            <h6>Khuyến Mãi</h6>
        </div>
        <div class="fe-box">
            <img src="layout/img/features/f5.png" alt="">
            <h6>Vui Vẻ Bán Hàng</h6>
        </div>
        <div class="fe-box">
            <img src="layout/img/features/f6.png" alt="">
            <h6>Hỗ Trợ 24h</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
    <div class="pro-container">
            <!--sản phẩm mới -->
            
        </div>
        <h2>SẢN PHẨM BÁN CHẠY</h2>
        <!-- <p>Summer Collection New Morden Design</p> -->
        <div class="pro-container">
            <!--sản phẩm mới -->
            <?=$html_luotmua;?>
        </div>
    </section>

    <section id="product1" class="section-p1">
    <div class="pro-container">
            <!--sản phẩm mới -->
            
        </div>
        <h2>SẢN PHẨM MỚI</h2>
        <!-- <p>Summer Collection New Morden Design</p> -->
        <div class="pro-container">
            <!--sản phẩm mới -->
            <?=$html_dssp_new;?>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>MUA SẢN PHẨM TẠI YAME </h4>
        <h2>Giảm Giá <span>15% </span> Sản Phẩm Mới</h2>
        <a href="index.php?pg=shop"><button class="normal">XEM NGAY </button></a>
    </section>

    <section id="product1" class="section-p1">
        <h2>SẢN PHẨM HOT</h2>
        <!-- <p>Summer Collection New Morden Design</p> -->
        <div class="pro-container">
        <?=$html_dssp_view;?>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcomming season</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring/Summer 2022</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Printe</h3>
        </div>
    </section>

    

