<?php
if(isset($_POST['themgiohang'])){
    $tensanpham =$_POST['tensanpham'];
    $product_id =$_POST['product_id'];
    $gia =$_POST['giasanpham'];
    $hinhanh=$_POST['hinhanh'];
    $soluong=$_POST['soluong'];
$sql_select_giohang= mysqli_query($mysqli,"SELECT * FROM tbl_giohang WHERE product_id='$product_id'");
$count = mysqli_num_rows($sql_select_giohang);
if($count>0){
    $row_sanpham =mysqli_fetch_array($sql_select_giohang);
    $soluong =$row_sanpham['soluong']+1;
    $sql_giohang ="UPDATE tbl_giohang SET soluong='$soluong' WHERE product_id ='$product_id'";
}else{
    $soluong =$soluong;
    $sql_giohang ="INSERT INTO tbl_giohang(tensanpham,product_id,giasanpham,hinhanh,soluong)
    values ('$tensanpham','$product_id','$gia','$hinhanh','$soluong')";
}
$insert_row = mysqli_query($mysqli,$sql_giohang);
if($insert_row==0){
    header('Location:index.php?quanly=chitietsanpham&id='.$product_id);
}
}elseif(isset($_POST['capnhatgiohang'])){
    for($i=0;$i<count($_POST['product_id1']);$i++){
        $product_id =$_POST['product_id1'][$i];
        $soluong =$_POST['soluong'][$i];
        if($soluong<=0){
            $sql_delete =mysqli_query($mysqli,"DELETE FROM tbl_giohang WHERE product_id ='$product_id'");
        }else{
            $sql_update =mysqli_query($mysqli,"UPDATE tbl_giohang SET soluong='$soluong' WHERE product_id ='$product_id'");
        }
        
    }
    
    }elseif(isset($_GET['xoa'])){
        $id=$_GET['xoa'];
        $sql_delete = mysqli_query($mysqli,"DELETE FROM tbl_giohang WHERE giohang_id='$id'");
    }
?>
<section class="delivery grid">
    <div class="container1">
        <div class="delivery-top-wrap">
         <div class="delivery-top">
             <div class="delivery-top-delivery delivery-top-item">
                <i class="fa-solid fa-cart-shopping"></i>
             </div>
             <div class="delivery-top-adress delivery-top-item">
                 <i class="fa-solid fa-location-dot"></i>
             </div>
             <div class="delivery-top-payment delivery-top-item">
                 <i class="fa-solid fa-money-check"></i>
             </div>
         </div>
        </div>
     </div>
     <div class="coitainer1">
        <div class="delivery-content row">
            <div class="delivery-content-left">
     <p>Vui lòng chọn địa chỉ giao hàng</p>
  
  <div class="delivery-content-left-input-top row">
    
        <div class="delivery-content-left-input-top-item">
        <label for="">Họ tên <span style="color: red;">*</span></label>
        <input required type="text" name="tenkhachhang">
     </div>
     <div class="delivery-content-left-input-top-item">
        <label for="">Điện thoại <span style="color: red;">*</span></label>
        <input requiredtype="text" name="phone">
     </div>
    </div>
    
    <div class="delivery-content-left-input-top row">
    <div class="delivery-content-left-input-top-item">
        <label for="">Tỉnh/Tp <span style="color: red;">*</span></label>
        <input required type="text" name="tinh">
     </div>
     <div class="delivery-content-left-input-top-item">
        <label for="">Quận/Huyện <span style="color: red;">*</span></label>
        <input required type="text" name="huyen">
     </div>
    </div>

  
  <div class="delivery-content-left-input-button">
  <label for="">Địa chỉ <span style="color: red;">*</span></label>
  <input required type="text" name='diachi '>
</div>
<div class="delivery-content-left-button row">
    <a href=""><p>Quay lại giỏ hàng</p></a>
    <form action="?quanly=momo" method="post">
    <input type="submit" name="daichu" value="THANHTOAN">
    </form>
       
</div>
</div>

            <div class="delivery-content-right">
       
            </div>
        </div>
     </div>
 </section>