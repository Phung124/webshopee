<?php
include "database.php";

?>
<?php
class product{
private $db; 

public function __construct()
{
    $this -> db = new Database();
}
public function show_cartegory(){
    $query = "SELECT *FROM tbl_cartegory ORDER BY cartegory_id DESC";
    $result = $this ->db->select($query);
    return $result;
}
public function show_product(){
    $query = "SELECT *FROM tbl_product ORDER BY product_id DESC";
    $result = $this ->db->select($query);
    return $result;
}
public function show_brand(){
    // $query = "SELECT *FROM tbl_brand ORDER BY brand_id DESC";
    $query = "SELECT tbl_brand.*, tbl_cartegory.cartegory_name
    FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id= tbl_cartegory.cartegory_id
    ORDER BY tbl_brand.brand_id DESC";
    $result = $this ->db->select($query);
    return $result;
}
public function get_product($product_id){
    $query = "SELECT *FROM tbl_product WHERE product_id ='$product_id'";
    $result = $this ->db->select($query);
    return $result;
}
public function insert_product(){
    $product_name =$_POST['product_name'];
    $cartegory_id =$_POST['cartegory_id'];
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
    $query = "INSERT INTO tbl_product (
        product_name,
        cartegory_id,
        product_price,
        product_price_new,
        product_desc,
        product_img,
        product_soluong,
        product_img_desc,
        product_img_desc1,
        product_img_desc2,
        product_img_desc3,
        product_chitiet)
         VALUES (
            '$product_name',
            '$cartegory_id',
            
            '$product_price',
            '$product_price_new',
            '$product_desc',
            '$product_img',
            '$product_soluong',
            '$product_img_desc',
            '$product_img_desc1',
            '$product_img_desc2',
            '$product_img_desc3',
            '$product_chitiet')";
    $result = $this ->db->insert($query); 
    // if($result){
    //     $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1 ";
    //     $result = $this -> db ->select($query)->fetch_assoc();
    //     $product_id = $result['product_id'];
    //     $filename =$_FILES['product_img_desc']['name'];
    //     $filettmp =$_FILES['product_img_desc']['tmp_name'];
    //     foreach($filename as $key => $value)
    //     {
    //         move_uploaded_file($filettmp[$key],"uploads/".$value);
    //         $query ="INSERT INTO tbl_product_img_desc (product_id,product_img_desc) VALUES ('$product_id','$value')";
    //         $result = $this ->db->insert($query);
    //     }
    // }
    
    header('Location:productlist.php');
    return $result;
} 
public function update_product($cartegory_id,$product_name,$product_id,$product_price,$product_price_new,$product_desc,$product_img,$product_soluong,$product_img_desc,$product_img_desc1,$product_img_desc2,$product_img_desc3,$product_chitiet ){
    $query = "UPDATE tbl_product SET product_name='$product_name',cartegory_id='$cartegory_id',product_id='$product_id',product_price='$product_price',
    product_price_new = '$product_price_new',product_desc ='$product_desc',product_img='$product_img',product_soluong='$product_soluong',product_img_desc='$product_img_desc',product_img_desc1='$product_img_desc1',product_img_desc2='$product_img_desc2',product_img_desc3='$product_img_desc3',product_chitiet='$product_chitiet' WHERE product_id= '$product_id'";
    $result =$this ->db ->update($query);
    header('Location:productlist.php');
    return $result;
}
public function delete_product($product_id){
    $query = "DELETE from tbl_product WHERE product_id ='$product_id' ";
    $result = $this ->db->delete($query);
    header('Location:productlist.php');
    return $result;
    }
}
?>