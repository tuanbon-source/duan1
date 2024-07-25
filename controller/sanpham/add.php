<div class="page-wrapper" style="margin-top:30px;">
    <h1>Thêm sản phẩm </h1>
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="tensp" placeholder="Tên sản phẩm">
            <span style="color: red"><?= isset($errTen) ? $errTen : '' ?></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Giá sản phẩm:</label>
            <input type="text" class="form-control" name="giasp" placeholder="Giá sản phẩm">
            <span style="color: red"><?= isset($errPrice) ? $errPrice : '' ?></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Hình ảnh sản phẩm:</label>
            <input type="file" class="form-control" name="imgsp">
            <span style="color: red"><?= isset($errHinh) ? $errHinh : '' ?></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Số lượng sản phẩm:</label>
            <input type="number" class="form-control" name="soluong" placeholder="Số lượng">
            <span style="color: red"><?= isset($errSoluong) ? $errSoluong : '' ?></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày đăng:</label>
            <input type="date" class="form-control" name="ngaydang">
            <span style="color: red"><?= isset($errNgaydang) ? $errNgaydang : '' ?></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Danh mục sản phẩm:</label>
            <select name="iddm" class="form-control">
                <option value="0">Chọn danh mục</option>
                <?php foreach ($list as $danhmuc) : ?>
                    <option value="<?= $danhmuc['id']; ?>"><?= $danhmuc['name']; ?></option>
                <?php endforeach; ?>
            </select>
            <span style="color: red"><?= isset($errIddm) ? $errIddm : '' ?></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Mô tả sản phẩm:</label>
            <textarea class="form-control" name="mota" placeholder="Mô tả sản phẩm"></textarea>
            <span style="color: red"><?= isset($errMota) ? $errMota : '' ?></span>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Thêm sản phẩm</button>
        <button type="submit" class="btn btn-primary" name="back"><a href="index.php?act=list_sp">Quay về</a></button>
    </form>

</div>

<?php
if (isset($check)) {
    echo $check;
}
?>
