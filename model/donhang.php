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



function giohang($iduser, $idpro, $img, $name, $price, $soluong ,$thanhtien, $id_donhang)
{
    $sql = "INSERT INTO gio_hang(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$id_donhang')";
    return pdo_execute($sql);
}

function loadone_donhang($id)
{
    $sql = "select * from don_hang where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_giohang()
{
    $sql = "SELECT * FROM `don_hang` order by `id` desc ";
        $listdonhang = pdo_query($sql);
        return $listdonhang;;
}




function get_pttt($a)
{
    switch ($a) {
        case '1':
            $pt = "Trả tiền khi nhận hàng";
            break;
        case '2':
            $pt = "Chuyển khản ngân hàng";
            break;
        case '3':
            $pt = "Thanh toán online";
            break;
        default:
            $pt = "Trả tiền khi nhận hàng";
            break;
    }
    return $pt;
}


?>