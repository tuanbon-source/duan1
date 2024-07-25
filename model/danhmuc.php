<?php
function insert_danhmuc($tenloai,$img){
    $sql = "INSERT INTO `danh_muc` (`name`, `anh_danh_muc`) VALUES ('$tenloai', '$img')";
    pdo_execute($sql);
    return true;
}
function delete_danhmuc($id){
    $sql = "DELETE FROM danh_muc WHERE `danh_muc`.`id` = $id";
    pdo_execute($sql);
}
function loadAll_danhmuc(){
    $sql = "SELECT * FROM `danh_muc` order by `id` desc ";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadOne_danhmuc($id){
    $sql = "SELECT * FROM `danh_muc` WHERE `id`={$id}";
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$tenloai,$img){
    if($img == ""){
        $sql = "UPDATE `danh_muc` SET `name` = '$tenloai' WHERE `danh_muc`.`id` = $id";
    }else{
        $sql = "UPDATE `danh_muc` SET `name` = '$tenloai', `anh_danh_muc` = '$img' WHERE `danh_muc`.`id` = $id";
    }
    pdo_execute($sql);
    return true;
}
?>