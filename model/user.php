<?php
function insert_user($user,$pass,$email,$sdt,$dia_chi){
    $sql = "INSERT INTO `nguoi_dung` (`tai_khoan`, `mat_khau`, `email`, `id_chuc_vu`, `sdt`,`dia_chi`) VALUES ('$user', '$pass', '$email', '1', '$sdt','$dia_chi')";
    pdo_execute($sql);
    return true;
}
function delete_user($id){
    $sql = "DELETE FROM nguoi_dung WHERE `nguoi_dung`.`id` = $id";
    pdo_execute($sql);
}
function loadAll_user(){
    $sql = "SELECT `nguoi_dung`.*,`chuc_vu`.ten_chuc_vu
    from `nguoi_dung`
    join `chuc_vu` on  `nguoi_dung`.id_chuc_vu = `chuc_vu`.id
    order by `id` desc ";
    $listuser = pdo_query($sql);
    return $listuser;
}
function loadOne_user($id){
    $sql = "SELECT * FROM `nguoi_dung` WHERE `id`={$id}";
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_user($id,$tenloai,$img){
    if($img == ""){
        $sql = "UPDATE `nguoi_dung` SET `name` = '$tenloai' WHERE `nguoi_dung`.`id` = $id";
    }else{
        $sql = "UPDATE `nguoi_dung` SET `name` = '$tenloai', `anh_nguoi_dung` = '$img' WHERE `nguoi_dung`.`id` = $id";
    }
    pdo_execute($sql);
    return true;
}
?>