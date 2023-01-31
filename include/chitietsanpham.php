<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
}else{
    $id='';
}
$sql_chitiet= mysqli_query($mysqli,"SELECT * FROM tbl_product WHERE product_id='$id'");

?>

<?php
while($row_chitiet =mysqli_fetch_array($sql_chitiet)){
 ?>
<section class="product grid">
          <div class="container">
            <div class="product-top">
              
            </div>
        <div class="product_content">
            <div class="product_content-left">
                <div class="product_content-left-big-img">

                    <img src="assets/admin/uploads/<?php echo $row_chitiet['product_img'] ?>" alt="">
                </div>
                <div class="product_content-left-small-img">
                    <img src="assets/admin/uploads/<?php echo $row_chitiet['product_img_desc'] ?>" alt="">
                    <img src="assets/admin/uploads/<?php echo $row_chitiet['product_img_desc1'] ?>" alt="">
                    <img src="assets/admin/uploads/<?php echo $row_chitiet['product_img_desc2'] ?>" alt="">
                   <img src="assets/admin/uploads/<?php echo $row_chitiet['product_img_desc3'] ?>" alt="">
                    
                </div>

            </div>
            <div class="product_content-right">
                <div class="product_content-right-product-name">
                    <h1><?php echo $row_chitiet['product_name'] ?></h1>
                <p>MSP:57E2969</p>
            </div>
                <div class="product_content-right-product-price">
                    <p><?php echo $row_chitiet['product_price'] ?> <sup>đ</sup></p>
                </div>
                   
                
<div class="product_content-right-product-size">
    <p style="font-weight:bold">Size:</p>
<div class="size">
    <span>S</span>
    <span>M</span>
    <span>L</span>
    <span>XL</span>
    <span>XXL</span>
    
</div>

</div>
<div class="quantity">
    <p style="font-weight:bold">Số lượng:</p>
    <input type="number" min="0" value="<?php echo $row_chitiet['product_soluong'] ?>">
   
</div>
<p style="color: red;">Vui lòng chọn size</p>
<div class="product_content-right-product-buttton">
    <form action="?quanly=giohang" method="post">
        <fieldset>
           <input type="hidden"name="tensanpham" value="<?php echo $row_chitiet['product_name'] ?>"/>
           <input type="hidden"name="product_id" value="<?php echo $row_chitiet['product_id'] ?>"/>
           <input type="hidden"name="giasanpham" value="<?php echo $row_chitiet['product_price'] ?>"/>
           <input type="hidden"name="hinhanh" value="<?php echo $row_chitiet['product_img'] ?>"/>
           <input type="hidden"name="soluong" value="1"/>
        
           <input style="background-color:orange; font-size:1.6rem;" type="submit" name ="themgiohang" value="Thêm Giỏ hàng"/>
        </fieldset>
  
    </form>
    
</div>
       
       
<div class="product_content-right-product-icon">
    <div class="product_content-right-product-icon-item">
        <i class="fa-solid fa-phone"></i><p>Hotline</p>
    </div>
    <div class="product_content-right-product-icon-item">
        <i class="fa-solid fa-comment"></i><p>Chat</p>
    </div>
    <div class="product_content-right-product-icon-item">
        <i class="fa-solid fa-envelope"></i><p>Mail</p>
    </div>
</div>
<div class="product_content-right-product_QR">
    <img src="assets/images/qr_code.png" alt="">
</div>
<div class="product_content-right-product_bottom">
    <div class="product_content-right-product_bottom-top">
        &#8744;
    </div>
    <div class="product_content-right-product_bottom-content-big">
        <div class="product_content-right-product_bottom-content-big-title">
        <div class="product_content-right-product_bottom-content-title-item chitiet">
            <p>Chi tiết</p>
        </div>
        <div class="product_content-right-product_bottom-content-title-item baoquan">
            <p>Bảo quản </p>
        </div>
        <div class="product_content-right-product_bottom-content-title-item">
            <p>Tham khảo size </p>
        </div>
     
    </div>
    <div class="product_content-right-product_bottom-content">
        <div class="product_content-right-product_bottom-content-chitiet">
        <?php echo $row_chitiet['product_chitiet'] ?>
        </div>
        <div class="product_content-right-product_bottom-content-baoquan">
        <?php echo $row_chitiet['product_desc'] ?>
        </div>
    </div>
    </div>
</div>
            </div>
        </div>
          </div>
        </section>
     <?php
}
     ?>