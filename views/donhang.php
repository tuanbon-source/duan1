<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="catalog mb">
        <div class="breadcrumb-area bg-img" style="background-image:url(assets/images/bg/breadcrumb.jpg);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Order Page</h2>
                    <ul>
                        <li>
                            <a href="index.php?act=home">Home</a>
                        </li>
                        <li class="active">Đơn hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <div class="checkout-wrap pt-30">
        <?php

        if (isset($_SESSION['user'])) {
            $ten_nguoi_dung = isset($_SESSION['user']) ? $_SESSION['user'] : '';
            $dia_chi = isset($_SESSION['dia_chi']) ? $_SESSION['dia_chi'] : '';
            $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
            $std = isset($_SESSION['sdt']) ? $_SESSION['sdt'] : '';
        ?>

        <form action="index.php?act=thanhtoan" method="post">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap mr-50">
                        <h2>Thông tin đặt hàng</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label> <abbr class="required" title="required"></abbr></label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Họ tên <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="ten_nguoi_dung" value="<?= $ten_nguoi_dung ?>" placeholder="Nhập họ tên">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Địa chỉ <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="dia_chi" value="<?= $dia_chi ?>" placeholder="Nhập địa chỉ">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Email <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="email" value="<?= $email ?>" placeholder="Nhập email">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info mb-20">
                                    <label>Số điện thoại <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="so_dien_thoai" value="<?= $std ?>" placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="your-order-area">
                        <h3>Đơn hàng</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="box_content">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Sản phẩm</th>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $tong=0;
                                        $i = 0;
                                        foreach ($_SESSION['giohang'] as $item) {
                                            $img_path="upload/";
                                            $hinh = $img_path . $item[2];
                                            $tt=$item[3] * $item[4];
                                            $tong += $tt;
                                            $xoa = '<a class="btn btn-outline-success" href="index.php?act=delCart&idcart=' . $i . '">Xóa</a>';
                                            echo '<tr>
                                                    <td>'.($i+1).'</td>
                                                    <td>'.$item[1].'</td>
                                                    <td><img src="' . $hinh . '" alt="" height="50"></td>
                                                    <td>'.number_format($item[3], 0, ',', '.').'VNĐ</td>
                                                    <td>'.$item[4].'</td>
                                                    <td>'.number_format($tt, 0, ',', '.').'VNĐ</td>
                                                </tr>';
                                            $i++;  
                                        }
                                        ?>
                                        <tr>
                                            <td colspan="6"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-9">
                                        <strong><a href="#"></a></strong>
                                    </div>
                                    <div class="col-2">
                                        <strong>Tiền phải trả: <strong><?php echo number_format($tong, 0, ',', '.'); ?>VNĐ</strong></strong>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="pay-top sin-payment">
                                        <input type="radio" name="pttt" value="1" class="input-radio"> 
                                        <label for="payment_method_1">Thanh toán khi nhận hàng</label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                        </div>
                                    </div>
                                    <div class="pay-top sin-payment">
                                        <input type="radio" name="pttt" value="2">
                                        <label for="payment-method-2">Thanh toán Chuyển khoản</label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                        </div>
                                    </div>
                                    <div class="pay-top sin-payment">
                                        <input id="payment-method-3" class="input-radio" type="radio" value="3" name="pttt">
                                        <label for="payment-method-3">Thanh toán Ví MoMo</label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                        </div>
                                    </div>
                                    <div class="pay-top sin-payment sin-payment-3">
                                        <input id="payment-method-4" class="input-radio" type="radio" value="4" name="pttt">
                                        <label for="payment-method-4">Thanh toán Online <img alt="" src="assets/images/icon-img/payment.png"><a href="#">What is PayPal?</a></label>
                                        <div class="payment-box payment_method_bacs">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Place-order mt-40">
                                <input type="submit" value="Thanh toán" name="thanhtoan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php    
        } else {
        ?>
            <a href="index.php?act=login" class=" text-datext-center h3">Đăng nhập để thanh toán</a>
        <?php
        }
        ?>
    </div>
</body>
</html>
