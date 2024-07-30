<?php
ob_start();
session_start();
if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "views/header.php";
include "model/connect.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/donhang.php";
include "model/user.php";

$list_user = loadAll_user();
$listsanpham = load_all();
$list_dm = loadAll_danhmuc();
if(isset($_GET['act']) && ($_GET['act']) != ""){
$act = $_GET['act'];
$kyw = "";$checkshop = "";
// $list_tendm=[];$list_tensp=[];
switch($act){
    case "lien_he":
        include "views/lien_he.php";
    break;
    case "login":
        if(isset($_POST['login'])){
            foreach($list_user as $item){
            // extract($list_user);
            if($_POST['user_name'] == "" || $_POST['user_password'] == ""){
                $check = "Vui lòng điền đầy đủ thông tin";
            }
            else if($_POST['user_name'] == $item['tai_khoan'] && $_POST['user_password'] == $item['mat_khau']){
                $_SESSION['user'] = $_POST['user_name'];
                $_SESSION['pass'] = $_POST['user_password'];
                $_SESSION['role'] = $item['id_chuc_vu'];
                header("location:index.php");
                exit();
            }else{
                $check = "Sai thông tin tài khoản hoặc mật khẩu";
            }
        }
        }
        include "views/user/login.php";
    break;

    case "sign_up":
        if(isset($_POST['dangky'])){
            $user_exiest = false;
            foreach($list_user as $item){
                if($_POST['user_name'] === $item['tai_khoan']){
                    $user_exiest = true;
                }
            }
            if($user_exiest == true){
                $check_re = "Tài khoản đã tồn tại";
            }else if($_POST['user_name'] == "" || $_POST['user_password'] == "" || $_POST['email'] == "" || $_POST['sdt'] == ""){
                $check_re = "Vui lòng điền đầy đủ thông tin";
            }else{
                $_SESSION['user'] = $_POST['user_name'];
                $_SESSION['pass'] = $_POST['user_password'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['sdt'] = $_POST['sdt'];
                $_SESSION['dia_chi'] = $_POST['dia_chi'];
                insert_user($_SESSION['user'],$_SESSION['pass'],$_SESSION['email'],$_SESSION['sdt'],$_SESSION['dia_chi']);
                $check_re = "Đăng ký thành công, đăng nhập ngay thôi (●'◡'●).";
            }
        }
        
        include "views/user/sign_up.php";
    break;    

    case "log_out":
        session_unset();
        header("location:index.php");
        exit();
        include "views/home.php";
    break;
    
    case "bao_hanh":
        include "views/bao_hanh.php";
    break;  

    case "shop":
        if(isset($_POST['search']) && $_POST['search'] != "" ){
            $kyw=$_POST['kyw'];
            $list_tensp = search_sp($kyw);
        }
        if(isset($_GET['name_dm']) && $_GET['name_dm'] != ""){
            $name_dm = $_GET['name_dm'];
            $list_tendm = search_dm($name_dm);
        }
        
        include "views/shop.php";
        break;    
    
    case "phobien":
        if(isset($_GET['gia2tr']) && $_GET['gia2tr']){
            $gia = $_GET['gia2tr'];
            $list_sp_price = load_sanpham_gia($gia);
        }else if(isset($_GET['gia5tr']) && $_GET['gia5tr']){
            $gia = $_GET['gia5tr'];
            $list_sp_price = load_sanpham_gia($gia);
        }
        
        include "views/shop.php";
        break;    

    case "detail_sp":
        if(isset($_GET['id'])){
            $listsanpham = loadone_sanpham($_GET['id']);
            extract($listsanpham);
        }
        $list_sp_decu = load_all();
        include "views/detail_product.php";
        break;
     
    case "addcart":   
        //lấy dữ liệu từ form để lưu vào giỏ
        if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
            $id=$_POST['id'];
            $ten_san_pham=$_POST['ten_san_pham'];
            $anh_san_pham=$_POST['anh_san_pham'];
            $gia_san_pham=$_POST['gia_san_pham'];
            if(isset($_POST['sl'])>0){
                $sl = $_POST['sl'];
            }else{
                $sl=1;
            }
            $fg=0;
            //kiểm tra sản phẩm có tồn tại trong giỏ hàng hay không?
            //nếu có chỉ cập nhật lại số lượng
            $i=0;

            foreach ($_SESSION['giohang'] as $item) {
                if($item[1]==$ten_san_pham){
                    $slnew=$sl+$item[4];
                    $_SESSION['giohang'][$i][4]=$slnew;
                    $fg=1;
                    break;
                }
                $i++;
            }

            //còn ngược lại add mới sp vào giỏ hàng
            //khởi tạo 1 mảng con trước khi đưa vào giỏ hàng
            if($fg==0){
                $item=array($id,$ten_san_pham,$anh_san_pham,$gia_san_pham,$sl);
                $_SESSION['giohang'][]=$item;
            }
            
            // header('location: index.php?act=viewcart');
        }
        include "views/viewcart.php";
        break;
      
    case "delcart":
        if(isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
        include "views/home.php";

    case "delCart" :
        {
            if(isset($_GET['idcart'])) {
                array_splice($_SESSION['giohang'], $_GET['idcart'],1);
            } else {
                $_SESSION['giohang'] = [];
            }
        }    
        include "views/viewcart.php";
        break;

    case "donhang" :
        
        include "views/donhang.php";
        break;

    case "cart" :
        include "views/viewcart.php";
        break;    

    case "thanhtoan" :
        if((isset($_POST['thanhtoan']))&&($_POST['thanhtoan'])){
            $iduser = 0;

            // Check if user is logged in and get their ID
            if (isset($_SESSION['user']) && isset($_SESSION['user']['id'])) {
                $iduser = $_SESSION['user']['id'];
            }





            $tong_tien= tongdonhang();
            $ten_nguoi_dung=$_POST['ten_nguoi_dung'];
            $dia_chi=$_POST['dia_chi'];
            $email=$_POST['email'];
            $so_dien_thoai=$_POST['so_dien_thoai'];
            $pttt=$_POST['pttt'];
            $madh="CARD".rand(0,999999);
            $ngaydathang = date('h:i:sa d/m/Y');
            //tạo đơn hàng
            //và trả về 1 id đơn hàng
            $iddh=taodonhang($madh,$tong_tien,$pttt,$ten_nguoi_dung,$dia_chi,$email,$so_dien_thoai,$ngaydathang);


            if (isset($_SESSION['giohang'])) {
                unset($_SESSION['giohang']);
            }

            
            include "views/home.php";   
        }
        break;
    
    default:
    include "views/home.php";
    break;    
    
}
}else{
    include "views/home.php";  
}

include "views/footer.php";
ob_end_flush(); 
?>