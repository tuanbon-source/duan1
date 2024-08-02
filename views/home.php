<?php 
?>
        <div class="slider-area fix">
            <div class="row align-items-center g-0">
                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                    <div class="slider-content-4 ml-150">
                        <h1 class="wow fadeInLeft">Sự lựa chọn tuyệt  <br>vời nhất.</h1>
                        <p class="wow fadeInLeft">Sự nhanh nhạy với tốc độ tối ưu luôn là ưu tiên hàng đầu. </p>
                        <div class="slider-btn-4">
                            <a class="wow fadeInLeft" href="index.php?act=shop"><span>Mua ngay</span> <i class="la la-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                    <div class="slider-sin-img-hm4 slider-sin-mrg4 bg-yellow-light">
                        <img class="wow fadeInRight" src="views/assets/images/slider/card3.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-area pt-110 pb-110 section-padding-3">
            <div class="container-fluid">
                <div class="feature-border">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="feature-wrap mb-30 feature-mrg-1">
                                <img src="views/assets/images/icon-img/feature-icon-1.png" alt="">
                                <h5>Sản phẩm tốt nhất</h5>
                                <span>Chất lượng tốt nhất</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="feature-wrap mb-30 feature-mrg-2">
                                <img src="views/assets/images/icon-img/feature-icon-2.png" alt="">
                                <h5>100% hàng chính hãng </h5>
                                <span>Giá cả đúng sàn </span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="feature-wrap mb-30 feature-mrg-3">
                                <img src="views/assets/images/icon-img/feature-icon-3.png" alt="">
                                <h5>Bảo mật</h5>
                                <span>Không chia sẻ thông tin</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="feature-wrap mb-30 feature-mrg-4">
                                <img src="views/assets/images/icon-img/feature-icon-4.png" alt="">
                                <h5>Thoải mái tự nhiên</h5>
                                <span>Thân thiên với người chưa và yêu sản phẩm công nghệ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-70 section-padding-3">
            <!-- // giảm giá -->
            <div class="container-fluid">
                <div class="section-title-4 text-center">
                    <h2>Sản Phẩm đang được giảm giá </h2>
                </div>
                <div style="height:390px;" class="product-slider-active-2 owl-carousel">
                <?php 
                $count = 0;   
                foreach($listsanpham as $item) { 
                $count++;    
                ?>
    
    <div style="height:400px;" class="product-wrap product-border-2 pro-hover-shadow mb-40">
        <form action="index.php?act=addcart" method="post">
        <div style="height: 250px;" class="product-img mb-15">
            <a href="product-details.html"><img style="height:100%" src="upload/<?php echo $item['anh_san_pham']?>" alt="product"></a>
            <div class="product-action-3">
                <!-- <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class="la la-arrows"></i></a> -->
                
                <button class="addCart" style="border-radius: 50%;
  border: 1px red solid;
  background: white;
  " value="Add To Cart" name="addtocart"><i class="la la-cart-plus"></i></button>
            </div>
        </div>
        <div class="product-content-2">
            <h4><a href="product-details.html"><?php echo $item['ten_san_pham']?></a></h4>
            <span><?php echo $item['name']?></span>
            <div class="pro-price-2">
                <span><?php echo number_format($item['gia_san_pham'], 0, ',', '.')?> <span style="color: red;">VNĐ</span></span>
                
            </div>
            
        </div>
        <form action="index.php?act=addcart" method="post">
        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
        <input type="hidden" name="ten_san_pham" value="<?php echo $item['ten_san_pham']; ?>">
        <input type="hidden" name="anh_san_pham" value="<?php echo $item['anh_san_pham']; ?>">
        <input type="hidden" name="gia_san_pham" value="<?php echo $item['gia_san_pham']; ?>">
        </form>
    </div>
    
    <?php 
    if ($count > 4) { 
        
        break;
    } 
} 
?>
                    <!-- <div class="product-wrap product-border-2 pro-hover-shadow mb-40">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="views/assets/images/product/pro-hm4-2.jpg" alt="product"></a>
                            <div class="product-action-3">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class="la la-arrows"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <h4><a href="product-details.html">Simple Chair</a></h4>
                            <span>Moving</span>
                            <div class="pro-price-2">
                                <span>$30.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap product-border-2 pro-hover-shadow mb-40">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="views/assets/images/product/pro-hm4-3.jpg" alt="product"></a>
                            <div class="product-action-3">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class="la la-arrows"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <h4><a href="product-details.html">Simple Chair</a></h4>
                            <span>Moving</span>
                            <div class="pro-price-2">
                                <span>$40.00</span>
                                <span class="old-price">$50.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap product-border-2 pro-hover-shadow mb-40">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="views/assets/images/product/pro-hm4-4.jpg" alt="product"></a>
                            <div class="product-action-3">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class="la la-arrows"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <h4><a href="product-details.html">Simple Chair</a></h4>
                            <span>Moving</span>
                            <div class="pro-price-2">
                                <span>$60.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap product-border-2 pro-hover-shadow mb-40">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="views/assets/images/product/pro-hm4-5.jpg" alt="product"></a>
                            <div class="product-action-3">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class="la la-arrows"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <h4><a href="product-details.html">Simple Chair</a></h4>
                            <span>Moving</span>
                            <div class="pro-price-2">
                                <span>$80.00</span>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="product-wrap product-border-2 pro-hover-shadow mb-40">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="views/assets/images/product/pro-hm4-2.jpg" alt="product"></a>
                            <div class="product-action-3">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class="la la-arrows"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                            </div>
                        </div>
                        <div class="product-content-2">
                            <h4><a href="product-details.html">Simple Chair</a></h4>
                            <span>Moving</span>
                            <div class="pro-price-2">
                                <span>$70.00</span>
                                <span class="old-price">$90.00</span>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Blog -->
        <div class="banner-area pb-75">
            <div class="container">
                <div class="section-title-4 text-center">
                    <h2>Những lựa chọn tuyệt vời của chúng tôi</h2>
                </div>
                <div class="banner-pattern-wrap">
                    <img class="banner-pattern-1 wow fadeInDown" src="views/assets/images/icon-img/pattern-1.png" alt="banner">
                    <img class="banner-pattern-2 wow fadeInUp" src="views/assets/images/icon-img/pattern-2.png" alt="banner">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="banner-wrap mb-30">
                                <a href="product-details.html">
                                    <img src="upload/img2.png" alt="banner">
                                </a>
                                <div class="banner-content-5">
                                    <div class="banner-title-img">
                                        <div class="banner-img">
                                            <img src="views/assets/images/banner/work-author-1.png" alt="work-author">
                                        </div>
                                        <div class="banner-title">
                                            <h4>Tính bền bỉ</h4>
                                        </div>
                                    </div>
                                    <div class="banner-zoom">
                                        <a class="img-popup" href="upload/img3.jpg"><i class="la la-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="banner-wrap mb-30">
                                <a href="product-details.html">
                                    <img src="views/assets/images/banner/product-3.jpg" alt="banner">
                                </a>
                                <div class="banner-content-5">
                                    <div class="banner-title-img">
                                        <div class="banner-img">
                                            <img src="views/assets/images/banner/work-author-2.png" alt="work-author">
                                        </div>
                                        <div class="banner-title">
                                            <h4>Mạnh mẽ</h4>
                                        </div>
                                    </div>
                                    <div class="banner-zoom">
                                        <a class="img-popup" href="upload/img8.webp"><i class="la la-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-wrap mb-30">
                                <a href="product-details.html">
                                    <img src="views/assets/images/banner/product-2.png" alt="banner">
                                </a>
                                <div class="banner-content-5">
                                    <div class="banner-title-img">
                                        <div class="banner-img">
                                            <img src="views/assets/images/banner/work-author-3.png" alt="work-author">
                                        </div>
                                        <div class="banner-title">
                                            <h4>Tinh tế</h4>
                                        </div>
                                    </div>
                                    <div class="banner-zoom">
                                        <a class="img-popup" href="upload/img7.png"><i class="la la-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- danh mục nổi bật -->
        <div class="product-area pb-70 section-padding-3">
            <div class="container-fluid">
                <div class="section-title-4 text-center">
                    <h2>Danh mục nổi bật</h2>
                </div>
                <div class="product-tab-list nav pb-60">
                    <?php
                    $count = 0;
                    foreach($listsanpham as $name_dm){
                        $count++
                    ?>
                    <a href="index.php?act=topsp" data-bs-toggle="tab">
                        <span>
                            <img  class="fixed-img" src="upload/icon/img2.png" alt="icon-img">
                            <img  class="hover-img" src="upload/icon/img1.png" alt="icon-img">
                        </span>
                        <h5><?php echo $name_dm['name']?><br></h5>
                    </a>
                    <?php
                if($count >= 4){
                    break;
                }    
                }
                    ?>
                    <!-- <a class="active" href="#product-2" data-bs-toggle="tab">
                        <span>
                            <img class="fixed-img" src="views/assets/images/icon-img/tab-2.png" alt="icon-img">
                            <img class="hover-img" src="views/assets/images/icon-img/tab-2-white.png" alt="icon-img">
                        </span>
                        <h5>ASUS <br>Easy</h5>
                    </a>
                    <a href="#product-3" data-bs-toggle="tab">
                        <span>
                            <img class="fixed-img" src="views/assets/images/icon-img/tab-3.png" alt="icon-img">
                            <img class="hover-img" src="views/assets/images/icon-img/tab-3-white.png" alt="icon-img">
                        </span>
                        <h5>Office Storage <br>Bench.</h5>
                    </a>
                    <a href="#product-4" data-bs-toggle="tab">
                        <span>
                            <img class="fixed-img" src="views/assets/images/icon-img/tab-4.png" alt="icon-img">
                            <img class="hover-img" src="views/assets/images/icon-img/tab-4-white.png" alt="icon-img">
                        </span>
                        <h5>Bookcase <br>Table</h5>
                    </a> -->
                </div>
                <div class="tab-content jump">
                    <div id="product-1" class="tab-pane">
                        <div class="product-slider-active-2 owl-carousel">
                            <?php $count = 0; foreach($load_top10 as $item){ ?>
                            <div class="product-wrap product-border-2 pro-hover-shadow mb-40">
                                <div class="product-img mb-15">
                                    <a href="product-details.html"><img src="views/assets/images/product/pro-hm4-5.jpg" alt="product"></a>
                                    <div class="product-action-3">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" title="Quick View" href="#"><i class="la la-arrows"></i></a>
                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                        <a title="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-2">
                                    <h4><a href="product-details.html"><?php echo $item['ten_san_pham']?></a></h4>
                                    <span><?php echo $item['name']?></span>
                                    <div class="pro-price-2">
                                        <span>$20.00</span>
                                    </div>
                                </div>
                            </div>
                            <?php if($count >=5) break; } ?>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="brand-logo-area pb-110 section-padding-3">
            <div class="container-fluid">
                <div class="brand-logo-border">
                    <div class="brand-logo-active owl-carousel">
                        <?php $count = 0; foreach($list_dm as $item){ $count++ ?>
                        <div class="single-brand-logo">
                            <img style="width:100px;height:80px;line-height:188px" src="upload/icon_hang/<?php echo $item['anh_danh_muc']?>" alt="">
                        </div>
                        <?php 
                        if($count >= 4){
                            break;
                        }
                        } ?>
                       
                    </div>
                </div>
            </div>
        </div>