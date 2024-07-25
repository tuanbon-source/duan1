<?php
if (is_array($sp) && !empty($sp)) {
    extract($sp);
}

$hinhPath = './upload/' . $anh_san_pham;
$hinh = (is_file($hinhPath)) ? "<img src='$hinhPath' height='80'>" : "No photo";
?>

<div class="page-wrapper" style="margin-top: 30px;">
    <h1>Cập nhật sản phẩm</h1>
    <form action="index.php?act=update_sp" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="mb-3">
            <label class="form-label">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="tensp" placeholder="Tên sản phẩm" value="<?= isset($ten_san_pham) ? $ten_san_pham : ''; ?>">
            <span style="color: red"><?= isset($errTen) ? $errTen : ''; ?></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Giá sản phẩm:</label>
            <input type="text" class="form-control" name="giasp" placeholder="Giá sản phẩm" value="<?= isset($gia_san_pham) ? $gia_san_pham : ''; ?>">
            <span style="color: red"><?= isset($errPrice) ? $errPrice : ''; ?></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Hình ảnh sản phẩm:</label><br>
            <?= $anh_san_pham; ?> <!-- Hiển thị hình ảnh hiện tại của sản phẩm -->
            <input type="file" class="form-control mt-2" name="imgsp">
            <span style="color: red"><?= isset($errHinh) ? $errHinh : ''; ?></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Số lượng sản phẩm:</label>
            <input type="number" class="form-control" name="soluong" placeholder="Số lượng" value="<?= isset($so_luong) ? $so_luong : ''; ?>">
            <span style="color: red"><?= isset($errSoluong) ? $errSoluong : ''; ?></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày đăng:</label>
            <input type="date" class="form-control" name="ngaydang" value="<?= isset($ngay_dang) ? $ngay_dang : ''; ?>">
            <span style="color: red"><?= isset($errNgaydang) ? $errNgaydang : ''; ?></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Danh mục sản phẩm:</label>
            <select name="iddm" class="form-control">
                
                <?php foreach ($list as $danhmuc) : ?>
                    <option value="<?= $danhmuc['id']; ?>" <?= ($id == $danhmuc['id']) ? 'selected' : ''; ?>>
                        <?= $danhmuc['name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <span style="color: red"><?= isset($errIddm) ? $errIddm : ''; ?></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Mô tả sản phẩm:</label>
            <textarea class="form-control" name="mota" placeholder="Mô tả sản phẩm"><?= isset($mo_ta) ? $mo_ta : ''; ?></textarea>
            <span style="color: red"><?= isset($errMota) ? $errMota : ''; ?></span>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Cập nhật sản phẩm</button>
        <button  class="btn btn-primary" name="back"><a href="index.php?act=list_sp">Quay về</a></button>
    </form>
</div>

<?php
if (isset($check)) {
    echo $check;
}
?>
