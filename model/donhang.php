<?php
function taodonhang($madh,$tong_tien,$pttt,$ten_nguoi_dung,$dia_chi,$email,$so_dien_thoai){
    $sql = "INSERT INTO `don_hang` (`madh`, `tong_tien`, `pttt`, `ten_nguoi_dung`, `dia_chi`, `email`, `so_dien_thoai`) 
    VALUES ('$madh', '$tong_tien', '$pttt', '$ten_nguoi_dung', '$dia_chi', '$email', '$so_dien_thoai')";

    pdo_execute($sql);
}

?>