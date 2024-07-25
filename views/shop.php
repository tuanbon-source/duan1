<!doctype html>
<html class="no-js" lang="zxx">
<!-- Your head content -->
<body>
    <div class="main-wrapper">
        <div class="breadcrumb-area bg-img" style="background-image:url(assets/images/bg/breadcrumb.jpg);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>shop page</h2>
                    <ul>
                        <li><a href="index.php?act=home">Home</a></li>
                        <li class="active">shop</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-area pt-90 pb-90">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="shop-topbar-wrapper">
                            <div class="shop-topbar-left">
                                <div class="view-mode nav">
                                    <a class="active" href="#shop-1" data-bs-toggle="tab"><i class="la la-th"></i></a>
                                    <a href="#shop-2" data-bs-toggle="tab"><i class="la la-list-ul"></i></a>
                                </div>
                                <p>Showing 1 - 20 of 30 results </p>
                            </div>
                            <div class="product-sorting-wrapper">
                                <div class="product-shorting shorting-style">
                                    <label>View:</label>
                                    <select>
                                        <option value=""> 20</option>
                                        <option value=""> 23</option>
                                        <option value=""> 30</option>
                                    </select>
                                </div>
                                <div class="product-show shorting-style">
                                    <label>Sort by:</label>
                                    <select>
                                        <option value="">Default</option>
                                        <option value=""> Name</option>
                                        <option value=""> price</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php 
                             $items_per_page = 9;
                             $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                             $offset = ($current_page - 1) * $items_per_page;
                             $listsanpham = load_page_sp_hientai($offset,$items_per_page);
                             $total_items = load_total_sp();
                             $total_pages = ceil($total_items / $items_per_page);

                        if(isset($list_tensp) && $list_tensp == []){
                            echo "Không có sản phẩm cần tìm bạn có thể thử lựa chọn khác!";
                        }else if(isset($list_tendm) && $list_tendm == []){
                            echo "Không có sản phẩm cần tìm trong danh mục này, bạn có thể thử lựa chọn khác!";
                        }else if(isset($list_sp_price) && $list_sp_price == []){
                            echo "Không có sản phẩm trong tầm giá bạn cần tìm, bạn có thể thử lựa chọn khác!";
                        }else if(isset($list_tensp) && $list_tensp != []){ ?>
                        <div class="shop-bottom-area">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane active">
                                    <div class="row">
                                        <?php foreach($list_tensp as $item){ ?>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="index.php?act=detail_sp&id=<?php echo $item['id']?>"><img style="width:300px;height:300px" src="upload/<?php echo $item['anh_san_pham']?>" alt="product"></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <span><?php echo $item['name']?></span>
                                                    <h4><a href="index.php?act=detail_pro&id=<?php echo $item['id']?>"><?php echo $item['ten_san_pham']?>.</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span><?php echo number_format($item['gia_san_pham'],'0',',','.')?><span style="color:red;"> VNĐ</span></span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div id="shop-2" class="tab-pane">
                                    <?php foreach($listsanpham as $item){ ?>
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="product-details.html">
                                                        <img style="width:270px;height:240px" src="upload/<?php echo $item['anh_san_pham']?>" alt="Product Style">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <span><?php echo $item['name']?></span>
                                                    <h4><a href="product-details.html"><?php echo $item['ten_san_pham']?>.</a></h4>
                                                    <div class="pro-list-price">
                                                        <span style="color:red;"><?php echo number_format($item['gia_san_pham'],'0',',','.')?></span>
                                                    </div>
                                                    <p><?php echo $item['mo_ta']?>.</p>
                                                    <div class="product-list-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="pagination-style text-center">
                                    <ul>
                                        <?php if ($current_page > 1) { ?>
                                            <li><a class="prev" href="index.php?act=shop&page=<?php echo $current_page - 1; ?>"><i class="la la-angle-left"></i></a></li>
                                        <?php } ?>

                                        <?php for ($page = 1; $page <= $total_pages; $page++) { ?>
                                            <li><a class="<?php echo $page == $current_page ? 'active' : ''; ?>" href="index.php?act=shop&page=<?php echo $page; ?>"><?php echo sprintf('%02d', $page); ?></a></li>
                                        <?php } ?>

                                        <?php if ($current_page < $total_pages) { ?>
                                            <li><a class="next" href="index.php?act=shop&page=<?php echo $current_page + 1; ?>"><i class="la la-angle-right"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php 
                        }else if(isset($list_tendm) && $list_tendm != []){
                        ?>
                        <div class="shop-bottom-area">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane active">
                                    <div class="row">
                                        <?php foreach($list_tendm as $item){ ?>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="index.php?act=detail_sp&id=<?php echo $item['id']?>"><img style="width:300px;height:300px" src="upload/<?php echo $item['anh_san_pham']?>" alt="product"></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <span><?php echo $item['name']?></span>
                                                    <h4><a href="index.php?act=detail_pro&id=<?php echo $item['id']?>"><?php echo $item['ten_san_pham']?>.</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span><?php echo number_format($item['gia_san_pham'],'0',',','.')?><span style="color:red;"> VNĐ</span></span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div id="shop-2" class="tab-pane">
                                    <?php foreach($listsanpham as $item){ ?>
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="product-details.html">
                                                        <img style="width:270px;height:240px" src="upload/<?php echo $item['anh_san_pham']?>" alt="Product Style">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <span><?php echo $item['name']?></span>
                                                    <h4><a href="product-details.html"><?php echo $item['ten_san_pham']?>.</a></h4>
                                                    <div class="pro-list-price">
                                                        <span style="color:red;"><?php echo number_format($item['gia_san_pham'],'0',',','.')?></span>
                                                    </div>
                                                    <p><?php echo $item['mo_ta']?>.</p>
                                                    <div class="product-list-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="pagination-style text-center">
                                    <ul>
                                        <?php if ($current_page > 1) { ?>
                                            <li><a class="prev" href="index.php?act=shop&page=<?php echo $current_page - 1; ?>"><i class="la la-angle-left"></i></a></li>
                                        <?php } ?>

                                        <?php for ($page = 1; $page <= $total_pages; $page++) { ?>
                                            <li><a class="<?php echo $page == $current_page ? 'active' : ''; ?>" href="index.php?act=shop&page=<?php echo $page; ?>"><?php echo sprintf('%02d', $page); ?></a></li>
                                        <?php } ?>

                                        <?php if ($current_page < $total_pages) { ?>
                                            <li><a class="next" href="index.php?act=shop&page=<?php echo $current_page + 1; ?>"><i class="la la-angle-right"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php 
                        }else if(isset($list_sp_price) && $list_sp_price != []){
                        ?>
                        <div class="shop-bottom-area">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane active">
                                    <div class="row">
                                        <?php foreach($list_sp_price as $item){ ?>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="index.php?act=detail_sp&id=<?php echo $item['id']?>"><img style="width:300px;height:300px" src="upload/<?php echo $item['anh_san_pham']?>" alt="product"></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <span><?php echo $item['name']?></span>
                                                    <h4><a href="index.php?act=detail_pro&id=<?php echo $item['id']?>"><?php echo $item['ten_san_pham']?>.</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span><?php echo number_format($item['gia_san_pham'],'0',',','.')?><span style="color:red;"> VNĐ</span></span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div id="shop-2" class="tab-pane">
                                    <?php foreach($listsanpham as $item){ ?>
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="product-details.html">
                                                        <img style="width:270px;height:240px" src="upload/<?php echo $item['anh_san_pham']?>" alt="Product Style">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <span><?php echo $item['name']?></span>
                                                    <h4><a href="product-details.html"><?php echo $item['ten_san_pham']?>.</a></h4>
                                                    <div class="pro-list-price">
                                                        <span style="color:red;"><?php echo number_format($item['gia_san_pham'],'0',',','.')?></span>
                                                    </div>
                                                    <p><?php echo $item['mo_ta']?>.</p>
                                                    <div class="product-list-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="pagination-style text-center">
                                    <ul>
                                        <?php if ($current_page > 1) { ?>
                                            <li><a class="prev" href="index.php?act=shop&page=<?php echo $current_page - 1; ?>"><i class="la la-angle-left"></i></a></li>
                                        <?php } ?>

                                        <?php for ($page = 1; $page <= $total_pages; $page++) { ?>
                                            <li><a class="<?php echo $page == $current_page ? 'active' : ''; ?>" href="index.php?act=shop&page=<?php echo $page; ?>"><?php echo sprintf('%02d', $page); ?></a></li>
                                        <?php } ?>

                                        <?php if ($current_page < $total_pages) { ?>
                                            <li><a class="next" href="index.php?act=shop&page=<?php echo $current_page + 1; ?>"><i class="la la-angle-right"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php 
                        }else{ 
                        ?>
                        <div class="shop-bottom-area">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane active">
                                    <div class="row">
                                        <?php foreach($listsanpham as $item){ ?>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="index.php?act=detail_sp&id=<?php echo $item['id']?>"><img style="width:300px;height:300px" src="upload/<?php echo $item['anh_san_pham']?>" alt="product"></a>
                                                    <div class="product-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <span><?php echo $item['name']?></span>
                                                    <h4><a href="index.php?act=detail_pro&id=<?php echo $item['id']?>"><?php echo $item['ten_san_pham']?>.</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span><?php echo number_format($item['gia_san_pham'],'0',',','.')?><span style="color:red;"> VNĐ</span></span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="#">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div id="shop-2" class="tab-pane">
                                    <?php foreach($listsanpham as $item){ ?>
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="product-details.html">
                                                        <img style="width:270px;height:240px" src="upload/<?php echo $item['anh_san_pham']?>" alt="Product Style">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <span><?php echo $item['name']?></span>
                                                    <h4><a href="product-details.html"><?php echo $item['ten_san_pham']?>.</a></h4>
                                                    <div class="pro-list-price">
                                                        <span style="color:red;"><?php echo number_format($item['gia_san_pham'],'0',',','.')?></span>
                                                    </div>
                                                    <p><?php echo $item['mo_ta']?>.</p>
                                                    <div class="product-list-action">
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Add To Cart" href="#"><i class="la la-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="pagination-style text-center">
                                    <ul>
                                        <?php if ($current_page > 1) { ?>
                                            <li><a class="prev" href="index.php?act=shop&page=<?php echo $current_page - 1; ?>"><i class="la la-angle-left"></i></a></li>
                                        <?php } ?>

                                        <?php for ($page = 1; $page <= $total_pages; $page++) { ?>
                                            <li><a class="<?php echo $page == $current_page ? 'active' : ''; ?>" href="index.php?act=shop&page=<?php echo $page; ?>"><?php echo sprintf('%02d', $page); ?></a></li>
                                        <?php } ?>

                                        <?php if ($current_page < $total_pages) { ?>
                                            <li><a class="next" href="index.php?act=shop&page=<?php echo $current_page + 1; ?>"><i class="la la-angle-right"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-wrapper">
                            <div class="sidebar-widget">
                                <h4 class="sidebar-title">Tìm kiếm <?php echo $kyw; ?></h4>
                                <div class="sidebar-search mb-40 mt-20">
                                    <form class="sidebar-search-form" action="index.php?act=shop" method="post">
                                        <input type="text" placeholder="Tìm kiếm ở đây..." name="kyw">
                                        <input type="submit" name="search">
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget shop-sidebar-border pt-40">
                                <h4 class="sidebar-title">Danh mục của shop</h4>
                                <div class="shop-catigory mt-20">
                                    <ul id="faq">
                                        <?php foreach($list_dm as $item){ ?>
                                        <li> <a href="index.php?act=shop&name_dm=<?php echo $item['name']; ?>"><?php echo $item['name']; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget pt-40 mt-40 shop-sidebar-border">
                                <h4 class="sidebar-title">Thẻ phổ biến </h4>
                                <div class="sidebar-widget-tag mt-20">
                                    <ul>
                                        <li><a href="#">Giá rẻ</a></li>
                                        <li><a href="index.php?act=phobien&gia2tr=2000000">Giá từ 2tr trở xuống</a></li>
                                        <li><a href="index.php?act=phobien&gia5tr=5000000">Giá từ 5tr trở lên</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins/countdown.js"></script>
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/plugins/images-loaded.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/instafeed.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/owl-carousel.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/textillate.js"></script>
    <script src="assets/js/plugins/elevatezoom.js"></script>
    <script src="assets/js/plugins/sticky-sidebar.js"></script>
    <script src="assets/js/plugins/smoothscroll.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
