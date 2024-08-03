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



function loadall_donhang()
{
    $sql = "SELECT * FROM `don_hang` order by `id` desc ";
        $listdonhang = pdo_query($sql);
        return $listdonhang;;
}
function delete_donhang($id) {
    $sql = "DELETE  FROM don_hang WHERE id =" . $_GET['id'];
    pdo_execute($sql);
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