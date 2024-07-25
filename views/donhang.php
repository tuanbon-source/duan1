
<!-- END HEADER -->
<main class="catalog  mb ">

<div class="breadcrumb-area bg-img" style="background-image:url(assets/images/bg/breadcrumb.jpg);">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Oder page</h2>
            <ul>
                <li>
                    <a href="index.php?act=home">Home</a>
                </li>
                <li class="active">Đơn hàng</li>
            </ul>
        </div>
            </div>
        </div>
    <div class="boxleft">
        <div class="text-danger mb-3">
        </div>
        <div class="box_title"><h2>ID đơn hàng : <?=$iddh?></h2></div>
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
                    $xoa = '<a class="btn btn-outline-success"  href="index.php?act=delCart&idcart=' . $i . '">Xóa</a>';

                    echo '<tr>
                                <td>'.($i+1).'</td>
                                <td>'.$item[1].'</td>
                                <td><img src="' . $hinh . '" alt="" height="100"></td>
                                <td>'.number_format($item[3], 0, ',', '.').'VNĐ</td>
                                <td>'.$item[4].'</td>
                                <td>'.number_format($tt, 0, ',', '.').'VNĐ</td>
                            
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
        </div>
        <div class="row">
            <div class="col-8">
                <h3>THÔNG TIN ĐẶT HÀNG</h3>
                    <input type="hidden" name="tongdonhang" value="<?=$tong?>">
                <table class="dathang">
                    <tr>
                        <td><input type="text" name="ten_nguoi_dung" placeholder="Nhập họ tên"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="dia_chi" placeholder="Nhập địa chỉ"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="email" placeholder="Nhập email"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="so_dien_thoai" placeholder="Nhập số điện thoại"></td>
                    </tr>
                    <tr>
                        <td>Phương thức thanh toán <br>
                        <input type="radio" name="pttt" value="1"> Thanh toán khi nhận hàng <br>
                        <input type="radio" name="pttt" value="2"> Thanh toán Chuyển khoản <br>
                        <input type="radio" name="pttt" value="3"> Thanh toán ví MoMo<br>
                        <input type="radio" name="pttt" value="4"> Thanh toán Online <br>
                    </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Thanh toán" name="thanhtoan"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    
</main>


