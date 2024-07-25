<div class="page-wrapper" style="margin-top:30px">
<h1>Thêm danh mục</h1>

<form method="post" action="index.php?act=adddm" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">ID</label>
    <input style="background:white" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="" disabled>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" >Tên danh mục</label>
    <input type="text" class="form-control"  placeholder="" name="name">
  </div>
  <p style="color:red;">
  <?php
  if($check != "" && isset($check)){
    echo $check;
  }
  ?>
  </p>

  <div class="form-group">
    <label for="exampleInputPassword1" >Ảnh danh mục</label>
    <input type="file" class="form-control"  placeholder="" name="img_dm">
  </div>
  <p style="color:red;">
  <?php
  if($check_dm != "" && isset($check_dm)){
    echo $check_dm;
  }
  ?>
  </p>

  <button type="submit" class="btn btn-primary" name="submit"><a>Submit</a></button>
  <button type="reset" class="btn btn-primary" name="reset"><a>Reset</a></button>
  <button type="submit" class="btn btn-primary"><a href="index.php?act=listdm">List danh mục</a></button>
</form>

</div>
