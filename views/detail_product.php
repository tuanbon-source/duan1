<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from template.hasthemes.com/daxone/daxone/product-details-tab3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2024 10:12:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Daxone - eCommerce Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/line-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/themify.css">
    <!-- othres CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="main-wrapper">
        <div class="mobile-off-canvas-active">
            <a class="mobile-aside-close"><i class="la la-close"></i></a>
            <div class="header-mobile-aside-wrap">
                <div class="mobile-search">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search entire store…">
                        <button class="button-search"><i class="la la-search"></i></button>
                    </form>
                </div>
               
            </div>
        </div>
        <div class="breadcrumb-area bg-img" style="background-image:url(assets/images/bg/breadcrumb.jpg);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Trang chi tiết sản phẩm</h2>
                    <ul>
                        <li>
                            <a href="index.php?act=shop">Quay về</a>
                        </li>
                        <li class="active">Chi tiết sản phẩm </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-details-area pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="product-details-img">
                            <div class="zoompro-wrap product-zoom-right pr-20">
                                <div class="zoompro-span">
                                    <img style="width:500px;height:400px" class="zoompro" src="upload/<?php echo $anh_san_pham?>" data-zoom-image="assets/images/product-details/product-detalis-bl1.jpg" alt="" />
                                    <span>-29%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="product-details-content pro-details-content-modify">
                            <span><?php echo $name ?></span>
                            <h2><?php echo $ten_san_pham ?></h2>
                            <div class="product-ratting-review">
                                <div class="product-ratting">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-half-o"></i>
                                </div>
                                <div class="product-review">
                                    <span>40+ Reviews</span>
                                </div>
                            </div>
                            <div class="pro-details-price-wrap">
                                <div class="product-price">
                                    <span><?php echo number_format($gia_san_pham,'0',',','.') ?></span>
                                    <span class="old"><?php echo number_format($gia_san_pham + random_int(200000,500000),'0',',','.') ?></span>
                                </div>
                                <div class="dec-rang"><span>- giảm giá</span></div>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                </div>
                            </div>
                            <div class="pro-details-compare-wishlist">
                                <div class="pro-details-wishlist">
                                    <a title="Add To Wishlist" href="#"><i class="la la-heart-o"></i> Add to wish list</a>
                                </div>
                            </div>
                            <div class="pro-details-buy-now btn-hover btn-hover-radious">
                                
                                <form action="index.php?act=addcart" method="post">
                                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
        <input type="hidden" name="ten_san_pham" value="<?php echo $ten_san_pham; ?>">
        <input type="hidden" name="anh_san_pham" value="<?php echo $anh_san_pham; ?>">
        <input type="hidden" name="gia_san_pham" value="<?php echo $gia_san_pham; ?>">
        <button class="addCart" style="
  border: 1px red solid;
  background: white;"  name="addtocart">Thêm vào giỏ hàng</button>
        </form>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-wrapper pb-90">
            <div class="container">
                <div class="row">
                    <div class="ms-auto me-auto col-lg-10">
                        <div class="dec-review-topbar nav mb-40">
                            <a class="active" data-bs-toggle="tab" href="#des-details1">Mô tả chi tiết</a>
                            <a data-bs-toggle="tab" href="#des-details3">Reviews</a>
                        </div>
                        <div class="tab-content dec-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="description-wrap">
                                    <textarea disabled style="height:400px" name="" id=""><?php echo $mo_ta?></textarea>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="dec-review-wrap mb-50">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-5">
                                            <div class="dec-review-img-wrap">
                                                <div class="dec-review-img">
                                                    <img src="assets/images/product-details/review-1.png" alt="review">
                                                </div>
                                                <div class="dec-client-name">
                                                    <h4>Jonathon Doe</h4>
                                                    <div class="dec-client-rating">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-8 col-md-7">
                                            <div class="dec-review-content">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                                                <div class="review-content-bottom">
                                                    <div class="review-like">
                                                        <span><i class="la la-heart-o"></i> 24 Likes</span>
                                                    </div>
                                                    <div class="review-date">
                                                        <span>25 Jun 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dec-review-wrap mb-50">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-5">
                                            <div class="dec-review-img-wrap">
                                                <div class="dec-review-img">
                                                    <img src="assets/images/product-details/review-2.png" alt="review">
                                                </div>
                                                <div class="dec-client-name">
                                                    <h4>Jonathon Doe</h4>
                                                    <div class="dec-client-rating">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-8 col-md-7">
                                            <div class="dec-review-content">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                                                <div class="review-content-bottom">
                                                    <div class="review-like">
                                                        <span><i class="la la-heart-o"></i> 24 Likes</span>
                                                    </div>
                                                    <div class="review-date">
                                                        <span>25 Jun 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dec-review-wrap">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-5">
                                            <div class="dec-review-img-wrap">
                                                <div class="dec-review-img">
                                                    <img src="assets/images/product-details/review-3.png" alt="review">
                                                </div>
                                                <div class="dec-client-name">
                                                    <h4>Jonathon Doe</h4>
                                                    <div class="dec-client-rating">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-8 col-md-7">
                                            <div class="dec-review-content">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                                                <div class="review-content-bottom">
                                                    <div class="review-like">
                                                        <span><i class="la la-heart-o"></i> 24 Likes</span>
                                                    </div>
                                                    <div class="review-date">
                                                        <span>25 Jun 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-85">
            <div class="container">
                <div class="section-title-6 mb-50 text-center">
                    <h2>Sản phẩm cùng chất lượng</h2>
                </div>
                <div class="product-slider-active owl-carousel">
                    <?php foreach($list_sp_decu as $item){
                        if($item['id'] != $id){
                        ?>
                    <div class="product-wrap">
                        <div class="product-img mb-15">
                            <a href="index.php?act=detail_sp&id=<?php echo $item['id']?>"><img style="width:250px;height:200px" src="upload/<?php echo $item['anh_san_pham']?>" alt="product"></a>
                            <div class="product-action">
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span><?php echo $item['name']?></span>
                            <h4><a href="index.php?act=detail_sp&id=<?php echo $item['id']?>"><?php echo $item['ten_san_pham']?></a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span><?php echo number_format($gia_san_pham,'0',',','.')?><span style="color:red"> VNĐ</span></span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }}?>
        
                </div>
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active owl-carousel nav nav-style-2" role="tablist">
                                        <a class="active" data-bs-toggle="tab" href="#pro-1"><img src="assets/images/product/quickview-s1.jpg" alt=""></a>
                                        <a data-bs-toggle="tab" href="#pro-2"><img src="assets/images/product/quickview-s2.jpg" alt=""></a>
                                        <a data-bs-toggle="tab" href="#pro-3"><img src="assets/images/product/quickview-s3.jpg" alt=""></a>
                                        <a data-bs-toggle="tab" href="#pro-4"><img src="assets/images/product/quickview-s4.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <span>Life Style</span>
                                    <h2>LaaVista Depro, FX 829 v1</h2>
                                    <div class="product-ratting-review">
                                        <div class="product-ratting">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-half-o"></i>
                                        </div>
                                        <div class="product-review">
                                            <span>40+ Reviews</span>
                                        </div>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="green"></li>
                                                <li class="yellow"></li>
                                                <li class="red"></li>
                                                <li class="blue"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">s</a></li>
                                                <li><a href="#">m</a></li>
                                                <li><a href="#">xl</a></li>
                                                <li><a href="#">xxl</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-price-wrap">
                                        <div class="product-price">
                                            <span>$210.00</span>
                                            <span class="old">$230.00</span>
                                        </div>
                                        <div class="dec-rang"><span>- 30%</span></div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                        </div>
                                    </div>
                                    <div class="pro-details-compare-wishlist">
                                        <div class="pro-details-compare">
                                            <a title="Add To Compare" href="#"><i class="la la-retweet"></i> Compare</a>
                                        </div>
                                        <div class="pro-details-wishlist">
                                            <a title="Add To Wishlist" href="#"><i class="la la-heart-o"></i> Add to wish list</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-buy-now btn-hover btn-hover-radious">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </div>
    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Slick Slider JS -->
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
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from template.hasthemes.com/daxone/daxone/product-details-tab3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2024 10:12:55 GMT -->
</html>