<main class="mb mybill">

    <div class="">

        <div class="">
            <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
        </div>

        <form action="index.php?act=mybill" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="listSanPham">
                    <thead class="thead">
                        <tr style="font-size: 20;">
                            <th>Mã đơn hàng</th>
                            <th>Ngày đặt</th>
                            <th>Số lượng</th>
                            <th>Tổng giá trị đơn hàng</th>
                            <th>Phương thức thanh toán</th>
                            <th>Hủy</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <?php
                        if (is_array($listbill) && (isset($_SESSION['user']))) {
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $countsp = loadall_cart_count($bill['id']);
                                $pttt = get_pttt($bill['pttt']);
                                $huy_don_hang = "index.php?act=delete&id=" . $id;
                                if ($bill['bill_status'] != 4){
                        ?>

                                <tr>
                                    <td style="cursor: pointer;" data-id='<?php echo $bill['id']; ?>' class="userinfo"><?php echo 'DA1-' . $bill['id'] ?></td>
                                    <td style="cursor: pointer;" data-id='<?php echo $bill['id']; ?>' class="userinfo"><?php echo $bill['ngaydathang']; ?></td>
                                    <td style="cursor: pointer;" data-id='<?php echo $bill['id']; ?>' class="userinfo"><?php echo $countsp; ?></td>
                                    <td style="cursor: pointer;" data-id='<?php echo $bill['id']; ?>' class="userinfo"><?php echo $bill['total']; ?></td>
                                    <td style="cursor: pointer;" data-id='<?php echo $bill['id']; ?>' class="userinfo"><?php echo $pttt; ?></td>
                                    <td style="cursor: pointer;" data-id='<?php echo $bill['id']; ?>' class="userinfo"><?php echo $ttdh; ?></td>
                                    <td><?php echo '<a style="text-decoration: none;" href="' . $huy_don_hang . '"><i class="fa fa-minus-square-o" aria-hidden="true" style="font-size:20px"></i></a>'; ?></td>
                                </tr>

                                <?php } }?>
                    </tbody>
                    <tr style="background-color: #99B898;color:aliceblue;">
                        <td colspan="5">Cảm ơn quý khách</td>
                    </tr>
                <?php } ?>


                </table>
            </div>
            <div class="modal fade" id="exampleModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Thông tin chi tiết</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <script type='text/javascript'>
        $(document).ready(function() {
            $('.userinfo').click(function() {
                var userid = $(this).data('id');
                $.ajax({
                    url: 'view/cart/ajaxfile.php',
                    type: 'post',
                    data: {
                        userid: userid
                    },
                    success: function(response) {
                        $('.modal-body').html(response);
                        $('#exampleModal').modal('show');
                    }
                });
            });
        });
    </script>

</main>