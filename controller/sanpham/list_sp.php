<div class="page-wrapper" style="margin-top:30px;">
    <h1>Danh sách sản phẩm</h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Giá sản phẩm</th>
            <th scope="col">Ảnh sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Ngày đăng</th>
            <th scope="col">Danh mục sản phẩm</th>
            <th scope="col">Opt</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $stt = 1; // Biến đếm STT
        foreach ($list as $item) {
            ?>
            <tr>
                <th scope="row"><?php echo $stt++; ?></th>
                <td><?php echo $item['ten_san_pham']; ?></td>
                <td><?php echo number_format($item['gia_san_pham'], 0, ',', '.'); ?> <span style="color:red;">VNĐ</span></td>
                <td><img width="50px" height="50px" src="../upload/<?php echo $item['anh_san_pham']; ?>" alt="<?php echo $item['ten_san_pham']; ?>"></td>
                <td><?php echo $item['so_luong']; ?></td>
                <td><textarea style="height:70px" disabled name="" id=""><?php echo $item['mo_ta']; ?></textarea></td>
                <td><?php echo $item['ngay_dang']; ?></td>
                <td><?php echo $item['name']; ?></td>
                
                <td>
                    <a style="color:black" href="index.php?act=sua_sp&id=<?php echo $item['id']; ?>">Sửa</a>
                    <a style="color:black" href="index.php?act=dele_sp&id=<?php echo $item['id']; ?>" onclick="return confirm('Bạn có chắc chắn xóa sản phẩm này không?')">Xóa</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

    <button type="button" class="btn btn-primary"><a href="index.php?act=addsp" style="color:white; text-decoration: none;">Thêm sản phẩm</a></button>
</div>
