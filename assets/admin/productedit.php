<?php
include "header.php";
include "slider.php";
include "class/product_class.php";

?>
<?php
$product = new product;
 $product_id =$_GET['product_id'];
    $get_product = $product -> get_product($product_id);
    if($get_product){
        $resultB =$get_product -> fetch_assoc();
    }


if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_id =$_POST['cartegory_id'];
    $product_name =$_POST['product_name'];
    $product_price =$_POST['product_price'];
    $product_price_new =$_POST['product_price_new'];
    $product_desc =$_POST['product_desc'];
    $product_img =$_FILES['product_img']['name'];
    move_uploaded_file($_FILES['product_img']['tmp_name'],"uploads/".$_FILES['product_img']['name']);
    $product_soluong =$_POST['product_soluong'];
    $product_img_desc =$_FILES['product_img_desc']['name'];
    move_uploaded_file($_FILES['product_img_desc']['tmp_name'],"uploads/".$_FILES['product_img_desc']['name']);
    $product_img_desc1 =$_FILES['product_img_desc1']['name'];
    move_uploaded_file($_FILES['product_img_desc1']['tmp_name'],"uploads/".$_FILES['product_img_desc1']['name']);
    $product_img_desc2 =$_FILES['product_img_desc2']['name'];
    move_uploaded_file($_FILES['product_img_desc2']['tmp_name'],"uploads/".$_FILES['product_img_desc2']['name']);
    $product_img_desc3 =$_FILES['product_img_desc3']['name'];
    move_uploaded_file($_FILES['product_img_desc3']['tmp_name'],"uploads/".$_FILES['product_img_desc3']['name']);
    $product_chitiet =$_POST['product_chitiet'];
    $update_product = $product ->update_product($cartegory_id,$product_name,$product_id,$product_price,$product_price_new,$product_desc,$product_img,$product_soluong,$product_img_desc,$product_img_desc1,$product_img_desc2,$product_img_desc3,$product_chitiet);
}
?>
<style>
    select{
        height: 30px;
        width: 200px;
    }
</style>
<div class="admin-content-right">
<div class="admin-content-right-product_add">
                <h1>Thêm Sản Phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                <label for="">Chọn danh mục <span style="color: red;">*</span></label>
                    <select name="cartegory_id" id="">
                    <option value="#">--Chọn--</option>
                    <?php
               $show_cartegory = $product ->show_cartegory();
               if($show_cartegory){
                while($rusult = $show_cartegory -> fetch_assoc()){

    
               ?>
                        <option <?php if($resultB['cartegory_id']==$rusult['cartegory_id']){echo "SELECTED";} ?> value="<?php  echo $rusult['cartegory_id']   ?>"><?php  echo $rusult['cartegory_name']   ?></option>
                        <?php
                          }
                        }
               ?>
                    </select>
                    <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_name" required type="text" placeholder="Nhập tên sản phẩm" value="<?php echo $resultB['product_name'] ?>">
                    <label for="">Giá sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_price" required type="text" placeholder="Giá sản phẩm"value="<?php echo $resultB['product_price'] ?>">
                    <label for="">Giá khuyến mãi <span style="color: red;">*</span></label>
                    <input name="product_price_new" required type="text" placeholder="Giá khuyến mãi"value="<?php echo $resultB['product_price_new'] ?> ">
                    <label for="">Mô tả sản phẩm <span style="color: red;">*</span></label>
                    <textarea required name="product_desc" id="" cols="30" rows="10" placeholder="Mô tả sản phẩm"value="<?php echo $resultB['product_desc'] ?> "></textarea>
                    <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_img" required type="file" value="<?php echo $resultB['product_img'] ?> ">
                    <label for="">Nhập số lượng <span style="color: red;">*</span></label>
                    <input name="product_soluong" required type="number" placeholder="Nhập số lượng"value="<?php echo $resultB['product_soluong'] ?> ">
                    <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                    <input name="product_img_desc" required  type="file" value="<?php echo $resultB['product_img_desc'] ?> ">
                    <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                    <input name="product_img_desc1" required  type="file" value="<?php echo $resultB['product_img_desc1'] ?> ">
                    <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                    <input name="product_img_desc2" required type="file" value="<?php echo $resultB['product_img_desc2'] ?> ">
                    <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                    <input name="product_img_desc3" required  type="file" value="<?php echo $resultB['product_img_desc3'] ?> ">
                    <label for="">Mô tả sản phẩm <span style="color: red;">*</span></label>
                    <textarea required name="product_chitiet" id="" cols="30" rows="10" placeholder="Mô tả sản phẩm"value="<?php echo $resultB['product_chitiet'] ?> "></textarea>
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
        
    </section>
</body>
</html>