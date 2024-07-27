
<!-- END HEADER -->
<main class="catalog  mb ">

<div class="breadcrumb-area bg-img" style="background-image:url(assets/images/bg/breadcrumb.jpg);">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>cart page</h2>
            <ul>
                <li>
                    <a href="index.php?act=home">Home</a>
                </li>
                <li class="active">cart </li>
            </ul>
        </div>
            </div>
        </div>
    <div class="boxleft">
        <div class="text-danger mb-3">
        </div>
        <div class="box_title"><h2>THÔNG TIN GIỎ HÀNG</h2></div>
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
                    <th scope="col">Thao tác</th>
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
                    $xoa = '<a class="btn btn-outline-success"  href="index.php?act=delCart&idcart=' . $i . '">Xóa</a>';

                    echo '<tr>
                                <td>'.($i+1).'</td>
                                <td>'.$item[1].'</td>
                                <td><img src="' . $hinh . '" alt="" height="100"></td>
                                <td>'.number_format($item[3], 0, ',', '.').'VNĐ</td>
                                <td>'.$item[4].'</td>
                                <td>'.number_format($tt, 0, ',', '.').'VNĐ</td>
                                <td>
                                    ' . $xoa . '
                                </td>
                          </tr>';
                        $i++;  
                    # code...
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
                    <strong>Tiền phải trả: <strong><?php echo number_format($tong, 0, ',', '.'); ?>VNĐ</strong> </strong>
                </div>
            <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="index.php?act=shop">Tiếp tục mua hàng</a>
                                        </div>
                                        <div class="cart-clear">
                                        <a href="index.php?act=donhang">Thanh toán</a>
                                        <a href="index.php?act=delcart">Xóa cửa hàng</a>
                                        </div>
                                    </div>
            </div>
        </div>
    </div>
    
</main>


