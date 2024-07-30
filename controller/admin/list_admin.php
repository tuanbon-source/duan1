<div class="page-wrapper" style="margin-top:30px;">
<h1>Danh sách danh mục </h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên tài khoản</th>
      <th scope="col">Email người dùng</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Chức vụ người dùng</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    $stt = 0;
    foreach($list as $item){
    ?>
    <tr>
      <td scope="row"><?php echo $stt++?></td>
      <td><?php echo $item['tai_khoan']?></td>
      <td><?php echo $item['email']?></td>
      <td><?php echo $item['sdt']?></td>
      <td><?php echo $item['ten_chuc_vu']?></td>
    </tr>
    <?php
    }
    ?>
    <button  type="button" class="btn btn-primary" ><a href="index.php?act=adddm">Thêm người dùng</a></button>
  </tbody>
</table>


</table>
</div>    
