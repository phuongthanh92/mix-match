<?php include("header.php"); ?>
    <section id="section">
    <div class="container">
    <div class="row">
    <div id="top-content">
        <div class="col-sm-4">
            <div class="row">
                <div id="hot-news">
                    <div class="title-box">
                        <span>Tin nổi bật</span>
                    </div>
                    <div class="content-box">
                        <!-- wListHtml -->
                        <ul class="wListHtml">
                            <!-- Repeat 5 -->
                            <li class="item services-intro"><a href="#">Giới thiệu dịch vụ</a></li>
                            <li class="item how-to-buy"><a href="#">Mua hàng và thanh toán</a></li>
                            <li class="item shipping"><a href="#">Giao hàng và nhận hàng</a></li>
                            <li class="item order"><a href="#">Dịch vụ order hàng</a></li>
                            <li class="item online"><a href="#">Mua hàng tại taobao.com</a></li>
                            <li class="item online"><a href="#">Mua hàng tại taobao.com</a></li>
                            <!-- end of repeat 5 -->
                        </ul>
                        <!-- end of wListHtml -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="row">
                <!-- wSlider -->
                <div id="main-slider" class="wSlider">
                    <div class="slider_content">
                        <div class="item_wrapper">
                            <!-- Repeat 3 -->
                            <div class="item">
                                <a href="#"><img class="thumb" alt="" src="images/data/slide-01.jpg"/></a>
                            </div>
                            <div class="item">
                                <a href="#"><img class="thumb" alt="" src="images/data/slide-01.jpg"/></a>
                            </div>
                            <div class="item">
                                <a href="#"><img class="thumb" alt="" src="images/data/slide-01.jpg"/></a>
                            </div>
                            <!-- end of repeat 3 -->
                        </div>
                        <span class="next_btn"></span>
                        <span class="prev_btn"></span>
                    </div>
                </div>
                <!-- end of wSlider -->
                <script>
                    $('.item_wrapper', $('#main-slider')).bxSlider({
                        auto: true,
                        captions: true,
                        slideSelector: '.item',
                        minSlides: 1,
                        maxSlides: 1,
                        pager: false,
                        nextText: " ",
                        prevText: " ",
                        nextSelector: ".next_btn",
                        prevSelector: ".prev_btn"
                    });
                </script>

            </div>
        </div>
    </div>
    <!--end #top-content-->
    <div id="main-content">
    <div class="wrapper">
        <div id="notice">

            <div class="content">
                <div class="title">Thông báo:</div>
                Do biến động của thị trường, kể từ ngày 27/11, OH điều chỉnh phí vận chuyển hàng hóa Quốc tế Trung Quốc
                -
                Việt Nam áp dụng cho các đơn hàng giao cho Quý khách từ các kho hàng tại Việt Nam từ 27/11/2014... <a
                    href="#">Chi tiết xem tại đây.</a>
            </div>
        </div>
        <div id="tool">
            <div class="item">
                <div class="icon"><img src="images/icons/chrome.jpg"></div>
                <div class="description">
                    <span>Công cụ dành cho Chrome</span>
                    <span class="version">Version 1.1.11</span>
                </div>
            </div>
            <div class="item">
                <div class="icon"><img src="images/icons/firefox.jpg"></div>
                <div class="description">
                    <span>Công cụ dành cho Firefox</span>
                    <span class="version">Version 1.1.11</span>
                </div>
            </div>
        </div>
    </div>
    <div id="rule">
        <div class="title-box">
            Quy trình mua hàng
        </div>
        <div class="content-box">
            <ol class="list-inline">
                <li><a href="#">1. Đăng ký,Đăng nhập</a></li>
                <li><a href="#">2. Giỏ hàng</a></li>
                <li><a href="#">3. Thanh toán</a></li>
                <li><a href="#">4. Giao hàng</a></li>
                <li><a href="#">5. Nhận hàng</a></li>
            </ol>
        </div>
    </div>
    <!-- wListBox -->
    <div class="wListBox list-items">
        <div class="box_title">
            <img src="images/icons/Taobao.Helper.1.1.5.jpg" class="icon-category" alt=".."/>
            <span>Sản phẩm từ Taobao.com</span>

            <div class="description">Trang đặt hàng online</div>
        </div>
        <div class="wrapper">
            <!-- Repeat 10 -->
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" src="images/data/product-01.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nam</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/women-product.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nữ</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/product-04.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Túi xách</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" src="images/data/product-01.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nam</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/women-product.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nữ</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/product-04.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Túi xách</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" src="images/data/product-01.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nam</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/women-product.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nữ</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/product-04.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Túi xách</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/product-04.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Túi xách</a>
                    </div>
                </div>
            </div>
            <!-- end of repeat 10 -->
        </div>
        <!-- end no_feature_wrapper -->
    </div>
    <!-- end of wListBox -->
    <!-- wListBox -->
    <div class="wListBox list-items">
        <div class="box_title">
            <a href="#"><img src="images/icons/tmall.png" class="icon-category" alt=".."/>Sản phẩm từ Taobao.com</a>

            <div class="description">Trang đặt hàng online</div>
        </div>
        <div class="wrapper">
            <!-- Repeat 10 -->
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" src="images/data/product-01.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nam</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/women-product.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nữ</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/product-04.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Túi xách</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" src="images/data/product-01.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nam</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/women-product.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nữ</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/product-04.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Túi xách</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" src="images/data/product-01.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nam</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/women-product.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nữ</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/product-04.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Túi xách</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/product-04.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Túi xách</a>
                    </div>
                </div>
            </div>
            <!-- end of repeat 10 -->
        </div>
        <!-- end no_feature_wrapper -->
    </div>
    <!-- end of wListBox -->
    <!-- wListBox -->
    <div class="wListBox list-items">
        <div class="box_title">
            <a href="#"><img src="images/icons/alibaba.jpg" class="icon-category" alt=".."/>Sản phẩm từ Taobao.com</a>

            <div class="description">Trang đặt hàng online</div>
        </div>
        <div class="wrapper">
            <!-- Repeat 10 -->
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" src="images/data/product-01.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nam</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/women-product.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nữ</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/product-04.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Túi xách</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" src="images/data/product-01.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nam</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/women-product.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nữ</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/product-04.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Túi xách</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" src="images/data/product-01.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nam</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/women-product.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Quần áo nữ</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/product-04.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Túi xách</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="wrapper-thumb">
                    <a href="#"><img class="thumb" width="" height="" src="images/data/product-04.jpg" alt=""/></a>

                    <div class="info-attachment">
                        <a href="#">Túi xách</a>
                    </div>
                </div>
            </div>
            <!-- end of repeat 10 -->
        </div>
        <!-- end no_feature_wrapper -->
    </div>
    <!-- end of wListBox -->
    <div id="menu-bottom">
        <!-- wListHtml -->
        <ul class="wListHtml list-unstyled">
            <li class="title"><a href="#">Giới thiệu dịch vụ</a></li>
            <!-- Repeat 5 -->
            <li class="item2"><a href="#">Hướng dẫn mua hàng</a></li>
            <li class="item1"><a href="#">Chính sách thanh toán</a></li>
            <li class="item1"><a href="#">Hỗ trợ</a></li>
            <!-- end of repeat 5 -->
        </ul>
        <!-- end of wListHtml -->
    </div>
    </div>
    <!--end #main-content-->
    </div>
    </div>
    </section>
<?php include("footer.php"); ?>