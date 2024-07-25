<?php
function insert_sanpham($tensp, $giasp, $imgsp, $soluong, $ngaydang, $iddm, $mota) {
    $sql = "INSERT INTO `san_pham` (`ten_san_pham`, `gia_san_pham`, `anh_san_pham`, `so_luong`, `ngay_dang`, `id_danh_muc`, `mo_ta`) 
            VALUES ('$tensp', '$giasp', '$imgsp', '$soluong', '$ngaydang', '$iddm', '$mota')";

    pdo_execute($sql);
};

function delete_sanpham($id) {
    $sql = "DELETE  FROM san_pham WHERE id =" . $_GET['id'];
    pdo_execute($sql);
}

function search_sp($kyw){
    $sql = "SELECT sp.*, dm.name
    FROM san_pham sp
    JOIN danh_muc dm ON sp.id_danh_muc = dm.id
    WHERE 1=1";
    if ($kyw != "") {
    $sql .= " AND sp.ten_san_pham LIKE '%" . $kyw . "%'";
    }
    $sql .= " ORDER BY sp.id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function search_dm($name_dm){
    $sql = "SELECT sp.*, dm.name
    FROM san_pham sp
    JOIN danh_muc dm ON sp.id_danh_muc = dm.id
    WHERE 1=1";
    if($name_dm != ""){
    $sql .= " AND dm.name LIKE '%" . $name_dm . "%'";    
    }else{
        $name_dm = "";
    }
    $sql .= " ORDER BY sp.id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_all() {
    $sql = "SELECT sp.*, dm.name 
            FROM san_pham sp
            INNER JOIN danh_muc dm ON sp.id_danh_muc = dm.id";
    // Thực thi câu truy vấn
    $rows = pdo_query($sql);
    // Trả về kết quả
    return $rows;
}

function load_total_sp() {
    try {
        $conn = pdo_get_connection();
        $sql = "SELECT COUNT(*) AS total FROM san_pham";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
 
function load_page_sp_hientai($offset, $items_per_page) {
    $sql = "SELECT san_pham.*, danh_muc.name 
            FROM san_pham 
            INNER JOIN danh_muc 
            ON san_pham.id_danh_muc = danh_muc.id 
            LIMIT :offset, :items_per_page"; // Sử dụng tham số để tránh SQL injection

    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
    $stmt->bindValue(':items_per_page', (int)$items_per_page, PDO::PARAM_INT);
    $stmt->execute();
    $sp = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $sp;
}


function loadAll_sanpham_home(){
    $sql = "SELECT * FROM `san_pham` ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadAll_sanpham_top($id){
    $sql = "SELECT * FROM `san_pham` WHERE `id_danh_muc` = $id";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id)   {
    $sql = "SELECT sp.*, dm.name 
            FROM san_pham sp
            INNER JOIN danh_muc dm ON sp.id_danh_muc = dm.id";
    $sql .= " WHERE sp.id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sanpham($id, $tensp, $giasp, $imgsp, $soluong, $ngaydang, $iddm, $mota) {
    $sql = "UPDATE `san_pham` SET 
            `ten_san_pham` = '$tensp', 
            `gia_san_pham` = '$giasp', 
            `anh_san_pham` = '$imgsp', 
            `so_luong` = '$soluong', 
            `ngay_dang` = '$ngaydang', 
            `id_danh_muc` = '$iddm', 
            `mo_ta` = '$mota' 
            WHERE `id` = $id";

    pdo_execute($sql);
}
function update_sanpham_0img($id, $tensp, $giasp, $soluong, $ngaydang, $iddm, $mota){
    $sql = "UPDATE `san_pham` SET 
            `ten_san_pham` = '$tensp', 
            `gia_san_pham` = '$giasp',  
            `so_luong` = '$soluong', 
            `ngay_dang` = '$ngaydang', 
            `id_danh_muc` = '$iddm', 
            `mo_ta` = '$mota' 
            WHERE `id` = $id";

    pdo_execute($sql);
}
function load_sanpham_gia($gia){
    $sql = "SELECT sp.*, dm.name
    FROM san_pham sp
    JOIN danh_muc dm ON sp.id_danh_muc = dm.id";
    if($gia <= 2000000){
    $sql .= " WHERE `gia_san_pham` <= $gia";    
    }else if($gia >= 5000000){
        $sql .= " WHERE `gia_san_pham` >= $gia";
    }
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
