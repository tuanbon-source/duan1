<div class="page-wrapper" style="margin-top:30px;">
<h1>Danh sách danh mục </h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Ảnh danh mục</th>
      <th scope="col">Opt</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $stt = 0;
    foreach($list as $item){
    ?>
    <tr>
      <th scope="row"><?php echo $stt++?></th>
      <td><?php echo $item['name']?></td>
      <td><img width="50px" height="50px" src="../upload/icon_hang/<?php echo $item['anh_danh_muc']; ?>" alt="<?php echo $item['name']; ?>"></td>
      <td>
        <a style="color:black" href="index.php?act=update_dm&id=<?php echo $item['id']?>">Sửa</a>
        <a style="color:black" href="index.php?act=deledm&id=<?php echo $item['id']?>" onclick="return confirm('Bạn có xác nhận xóa không?')">Xóa</a>
      </td>
    </tr>
    <?php
    }
    ?>
    <button  type="button" class="btn btn-primary" ><a href="index.php?act=adddm">Thêm danh mục</a></button>
  </tbody>
</table>


</table>
</div>    
