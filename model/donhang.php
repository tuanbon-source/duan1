<?php
function taodonhang($madh,$tong_tien,$pttt,$ten_nguoi_dung,$dia_chi,$email,$so_dien_thoai,$ngaydathang){
    $sql = "INSERT INTO `don_hang` (`madh`, `tong_tien`, `pttt`, `ten_nguoi_dung`, `dia_chi`, `email`, `so_dien_thoai`,`ngaydathang`) 
    VALUES ('$madh', '$tong_tien', '$pttt', '$ten_nguoi_dung', '$dia_chi', '$email', '$so_dien_thoai', '$ngaydathang')";

    pdo_execute($sql);
}
function tongdonhang()
{
    $tong = 0;

    foreach ($_SESSION['giohang'] as $item) {
        $tt=$item[3] * $item[4];
        $tong += $tt;
    }

    return $tong;
}



function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong,$khuyenmai ,$thanhtien, $idbill)
{
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,khuyenmai,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$khuyenmai','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}


?>