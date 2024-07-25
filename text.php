
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <input type="submit" value="Nhập">
</form>

<?php 
if (isset($_FILES['img'])) {
    echo "<pre>";
    print_r($_FILES['img']);
    echo "</pre>";

    // Hoặc sử dụng var_dump để có thêm chi tiết về kiểu dữ liệu
    // echo "<pre>";
    // var_dump($_FILES['img']);
    // echo "</pre>";
}
?>
?>