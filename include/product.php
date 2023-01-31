<div id="app-container">

            <div class="grid">
                <div class="slider">
                <?php
        include('include/slide.php');
        ?>

                </div>
                <?php 
                $sql_cartegory =mysqli_query($mysqli,"SELECT * FROM tbl_cartegory ORDER BY cartegory_id ASC")
                ?>

                <div class="grid_row app_content">
                    <div class="grid_column2">
                        <nav class="category">
                            <h3 class="category_heading">
                                <i class="category_heading-icon fa-solid fa-list"></i>
                                Danh mục
                            </h3>
                            <ul class="category_list">
                            <?php 
                            while($row_cartegory = mysqli_fetch_array($sql_cartegory)){
                            ?>
                           
                                <li><a href="?quanly=product&id=<?php  echo $row_cartegory["cartegory_id"]?>"><?php echo $row_cartegory["cartegory_name"]?> </a></li>
                            
                           
                            <?php
                            }
                            ?>

                        </nav>
                    </div>
                    <div class="grid_column10">
                        <div class="home_filter">
                            <div class="home_filter-h">
                                <span class="home_filter-lable">Sắp xếp theo</span>
                               
                                <div class="select_input">
                                    <span class="select_input-lable">Giá</span>
                                    <i class="select_input-lable-down fa-solid fa-angle-down"></i>
                                    <ul class="select_input-price">
                                        <li class="select_input-price-list">
                                            <a href="" class="select_input-price-list-item">Giá: từ thấp đến cao</a>
                                        </li>
                                        <li class="select_input-price-list">
                                            <a href="" class="select_input-price-list-item">Giá: từ cao đến thấp</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
               
                        </div>
                        <div class="home_product">
                        <?php
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                        }else{
                            $id='';
                        }
                        $sql_product =mysqli_query($mysqli,"SELECT * FROM tbl_cartegory,tbl_product WHERE tbl_cartegory.cartegory_id =tbl_product.cartegory_id
                        AND tbl_product.cartegory_id='$id' ORDER BY tbl_product.product_id DESC ");
                        ?>
                        <div class="home_product">
                        
                
                          
                            <div class="grid_row">
                            <?php 

                
                while($row_product = mysqli_fetch_array($sql_product)){
                    
                    ?>
                                <div class="grid_column2-4">
                                    <a class="home_product_item" href="?quanly=chitietsanpham&id=<?php  echo $row_product["product_id"]?>">
                                        <div class="home_product_item_img"
                                           >
                                           <img src="assets/admin/uploads/<?php echo $row_product["product_img"]?>" alt="">
                                        </div>
                                        <h4 class="home_product_item_name"><?php echo $row_product["product_name"]?></h4>
                                        <div class="home_product_item_price">
                                            <span class="home_product_item_price-old"><i
                                                    class="vnd fa-solid fa-dong-sign"></i><?php echo $row_product["product_price"]?></span>
                                            <span class="home_product_item_price-curent"><i
                                                    class="vnd fa-solid fa-dong-sign"></i><?php echo $row_product["product_price_new"]?></span>
                                        </div>
                                        <div class="home_product_item_price-action">
                                            <span class="home_product_item_price-star">
                                                <i class="star-gold fa-solid fa-star"></i>
                                                <i class="star-gold fa-solid fa-star"></i>
                                                <i class="star-gold fa-solid fa-star"></i>
                                                <i class="star-gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                            <p class="home_product_item_price_ban">
                                                Đã bán 10k
                                            </p>
                                        </div>
                                        <div class="home_product_item-where">
                                            Tp.Hồ Chí Minh
                                        </div>
                                        <div class="home_product_item-favoirite">
                                            Yêu Thích
                                        </div>
                                        <div class="home_product_item_sale-off">
                                            <span class="home_product_item_sale-off-percent">10%</span>
                                            <span class="home_product_item_sale-off-label">GIẢM</span>
                                        </div>
                                        <div class="home_product-similar">
                                            Xem chi tiết sản phẩm
                                        </div>
                                    </a>



                                </div>
                                <?php        
                }
            
                ?>
                            </div>
                        </div>
                        
                    </div>
                
            </div>
                </div>
                </div>
        </div>
