<?php include("header.php"); ?>
<section id="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="row">
                    <div id="sidebar">
                        <h4>Menu cá nhân</h4>
                        <!-- wListHtml -->
                        <ul id="personal-category" class="wListHtml">
                            <!-- Repeat 4 -->
                            <li class="item"><a href="#">Trang cá nhân</a> </li>
                            <li class="item"><a href="#">Giỏ hàng</a> </li>
                            <li class="item"><a href="#">Đơn hàng</a> </li>
                            <li class="item"><a href="#">Tài chính</a> </li>
                            <!-- end of repeat 4 -->
                        </ul>
                        <!-- end of wListHtml -->
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div id="content-page">
                        <div class="title-page">
                            <h3>Trang giỏ hàng</h3>
                        </div>
                        <div id="order-detail" class="table-responsive cart">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> </th>
                                    <th>Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                                </thead>
                            </table>
                            <table class="table table-bordered shop">
                                <thead>
                                <tr>
                                    <th colspan="5">
                                        <span class="shop-name">Người bán: Trung Nt</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="item">
                                    <td><input type="checkbox" class="check-list"/><label></label></td>
                                    <td>
                                        <div class="image-item">
                                            <img src="images/data/product-01_nho-01.jpg" alt=".." class="img-responsive"/>
                                        </div>
                                        <div class="info-item">
                                            <a class="link-item" href="#">http://item.taobao.com/item.htm?spm=a230r.1.14.46.9J6QU6&id=19267281338&ns=1&abbucket=0#detail</a>
                                            <div>
                                                <div  class="attribute">
                                                    <span>Size</span>
                                                    <select name="size" class="size">
                                                        <option>S</option>
                                                        <option>M</option>
                                                        <option>L</option>
                                                        <option>XL</option>
                                                    </select>
                                                </div>
                                                <div  class="attribute">
                                                    <span>Màu sắc</span>
                                                    <select name="color" class="color">
                                                        <option>Đỏ</option>
                                                        <option>Vàng</option>
                                                        <option>Đen</option>
                                                        <option>Trắng</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div>ID Sản phẩm <span class="code-product">SP001</span></div>
                                        </div>
                                    </td>
                                    <td>380</td>
                                    <td>
                                        <input class="quantity" type="text" value="2">
                                    </td>
                                    <td>760</td>
                                </tr>
                                <tr class="item">
                                    <td><input type="checkbox" class="check-list"/><label></label></td>
                                    <td>
                                        <div class="image-item">
                                            <img src="images/data/product-01_nho-01.jpg" alt=".." class="img-responsive"/>
                                        </div>
                                        <div class="info-item">
                                            <a class="link-item" href="#">http://item.taobao.com/item.htm?spm=a230r.1.14.46.9J6QU6&id=19267281338&ns=1&abbucket=0#detail</a>
                                            <div>
                                                <div  class="attribute">
                                                    <span>Size</span>
                                                    <select name="size" class="size">
                                                        <option>S</option>
                                                        <option>M</option>
                                                        <option>L</option>
                                                        <option>XL</option>
                                                    </select>
                                                </div>
                                                <div  class="attribute">
                                                    <span>Màu sắc</span>
                                                    <select name="color" class="color">
                                                        <option>Đỏ</option>
                                                        <option>Vàng</option>
                                                        <option>Đen</option>
                                                        <option>Trắng</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div>ID Sản phẩm <span class="code-product">SP001</span></div>
                                        </div>
                                    </td>
                                    <td>380</td>
                                    <td>
                                        <input class="quantity" type="text" value="2">
                                    </td>
                                    <td>760</td>
                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div id="corner">

            </div>
            <div id="copyright">
                &copy Bản quyền thuộc về Jenny 2014
            </div>
        </div>
    </div>
</footer>
</body>
</html>