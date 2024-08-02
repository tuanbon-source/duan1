    <h1 style="margin-left:+18%">Danh sách sản phẩm</h1>
    <table class="table"  style="height: 750px; width:1200px; margin-left:+18%">
        <thead class="thead-dark">
        <tr>
            <th scope="col" >STT</th>
            <th scope="col">Mã đơn hàng</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Email khách hàng</th>
            <th scope="col">Địa chỉ khách hàng</th>
            <th scope="col">Số điện thoại khách hàng</th>
            <th scope="col">Phương thức thanh toán</th>
            <th scope="col">Tổng tiền</th>
            <th scope="col">Ngày đặt hàng</th>
            <th scope="col">Opt</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $stt = 1; // Biến đếm STT
        foreach ($listdonhang as $item) {
            ?>
            <tr>
                <th scope="row"><?php echo $stt++; ?></th>
                <td><?php echo $item['madh']; ?></td>
                <td><?php echo $item['ten_nguoi_dung']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo $item['dia_chi']; ?></td>
                <td><?php echo $item['so_dien_thoai']; ?></td>
                <td><?php echo $item['pttt']; ?></td>
                <td><?php echo number_format($item['tong_tien'], 0, ',', '.'); ?> <span style="color:red;">VNĐ</span></td>
                <td><?php echo $item['ngaydathang']; ?></td>
                <td>
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
