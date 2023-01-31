<?php
include "header.php";
include "slider.php";
include "class/product_class.php";

?>
<?php
$product = new product;
$show_product = $product ->show_product();
?>
<div class="admin-content-right">
<div class="admin-content-right-cartegry_list">
                <h1>Danh sách sản phẩm </h1>
                <table>
                    <tr>
                        <th>stt</th>
                        <th>product_name</th>
                        <th>cartegory_id</th>
                        <th>product_price</th>
                        <th>product_price_new</th>
                        <th>product_desc</th>
                        <th>product_img</th>
                        <th>product_soluong</th>
                        <th>product_img_desc</th>
                        <th>product_img_desc1</th>
                        <th>product_img_desc2</th>
                        <th>product_img_desc3</th>
                        <th>product_chitiet</th>
                    </tr>
                    <?php
                    if($show_product){$i=0;
                        while( $result = $show_product->fetch_assoc()){ $i++;
                         ?>
                    <tr>
                        <td><?php echo $i  ?></td>
                        <td><?php echo $result['product_name']  ?></td>
                        <td><?php echo $result['cartegory_id']  ?></td>
                        <td><?php echo $result['product_price']  ?></td>
                        <td><?php echo $result['product_price_new']  ?></td>
                        <td><?php echo $result['product_desc']  ?></td>
                        <td><?php echo $result['product_img']  ?></td>
                        <td><?php echo $result['product_soluong']  ?></td>
                        <td><?php echo $result['product_img_desc']  ?></td>
                        <td><?php echo $result['product_img_desc1']  ?></td>
                        <td><?php echo $result['product_img_desc2']  ?></td>
                        <td><?php echo $result['product_img_desc3']  ?></td>
                        <td><?php echo $result['product_chitiet']  ?></td>
                        
                        <td><a href="productedit.php?product_id=<?php echo $result['product_id']  ?>">Sửa</a>|<a href="productdelete.php?product_id=<?php echo $result['product_id']  ?>">Xóa</a></td>
                    </tr>
                    <?php
                    }
                }
                    ?>
                </table>
                
            </div>
            </div>
        
    </section>
</body>
</html>