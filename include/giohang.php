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
<section class="cart grid">
    <div class="container1">
    <?php
$Lay_gio_hang= mysqli_query($mysqli,"SELECT * FROM tbl_giohang ORDER BY giohang_id DESC");
?>
       <div class="cart-top-wrap">
        <div class="cart-top">
            <div class="cart-top-cart cart-top-item">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div class="cart-top-adress cart-top-item">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="cart-top-payment cart-top-item">
                <i class="fa-solid fa-money-check"></i>
            </div>
        </div>
       </div>
    </div>
    <div class="container1">
        <div class="cart-content row">
            <div class="cart-content-left">
            <form action="" method="POST">
            <table>
                <tr>
                    <th>S???n ph???m </th>
                    <th>T??n S???n ph???m </th>
                    
                    <th>Size </th>
                    <th>SL</th>
                    <th>Th??nh ti???n </th>
                    <th>T???ng ti???n</th>
                    <th>X??a </th>
                </tr>
                <?php
                $i=0;
                $total=0;
                $t=0;
                
                while($row_fetch_giohang = mysqli_fetch_array($Lay_gio_hang)){
                    $subtotal = $row_fetch_giohang['soluong']*$row_fetch_giohang['giasanpham'];
                    $total+=$subtotal;
                    $to=$row_fetch_giohang['soluong'];
                   $t+=$to;
                    $i++;
                
                ?>
                
                <tr>
                    <td><img src="assets/admin/uploads/<?php echo $row_fetch_giohang['hinhanh'] ?>" alt=""></td>
                    <td><p><?php echo $row_fetch_giohang['tensanpham'] ?></p></td>
                    <td><p>L</p></td>
                    <td><input type="number" name ="soluong[]"value="<?php echo  number_format($row_fetch_giohang['soluong']) ?>"></td>
                
                    <td><p><?php echo number_format($row_fetch_giohang['giasanpham']) ?>.000<sup>??</sup></p></td>
                    <td><p><?php echo number_format($subtotal) ?>.000<sup>??</sup></p></td>
                    <td><a href="?quanly=giohang&xoa=<?php echo $row_fetch_giohang['giohang_id'] ?>">X??a</a></td>
                    <td><input type="hidden" name ="product_id1[]"value="<?php echo $row_fetch_giohang['product_id'] ?>"></td>  
                </tr>
                
                <?php
                }
                ?>
                
            </table>
            <tr colspan="7"style="padding:20px ;"><input style="    margin: 0 0 0 347px; padding: 5px;background: blue;" type="submit" value="C???p nh???p gi??? h??ng"name="capnhatgiohang" ></tr>
            </form>    
        </div>
            <div class="cart-content-right">
            <table>
                <tr>
                    <th colspan="2">T???NG TI???N GI??? H??NG</th>
                </tr>
                <tr>
                    <td>T???NG S???N PH???M</td>
                    <td class="d"><?php echo number_format($t) ?></td>
                </tr>
                <tr>
                    <td>T???NG TI???N H??NG</td>
                    <td class="d"><p><?php echo number_format($total) ?>.000 <sub>??</sub></p></td>
                </tr>
                <tr>
                    <td>T???M T??NH</td>
                    <td class="d"><p style="color: black; font-weight:bold;"><p><?php echo number_format($total) ?>.000 <sup>??</sup></p></td>

                </tr>
            </table>
            
            <div class="cart-content-right-text">
                <p>B???n s??? ???????c mi???n ph?? ship khi ????n h??ng c???a b???n c?? t???ng gi?? tr??? tr??n 2.000.000??</p>
            
          
        </div>
        <div class="cart-content-right-button" style="display: flex;">
        <form action="index.php" method="post">
            <button>TI???P T???C MUA </button></form>
            <form action="?quanly=adress" method="post">
          
          <button>THANH TO??N</button>
        </div>
        
       
        <div class="cart-content-right-dangnhap">
            <p>T??I KHO???N SHOPPE</p><br>
            <p><a href="">????ng nh???p</a>t??i kho???n c???a b???n ????? t??ch ??i???m th??nh vi??n</p>
        </div>
            </div>
        </div>
    </div>
</section>