<nav class="mainrow">
                    <?php 
                    $sql_cartegory =mysqli_query($mysqli,"SELECT * FROM tbl_cartegory ORDER BY cartegory_id ASC")
                ?>
                        <ul id="main-menu" class="d-flex row">
                           
                            <li><a href="index.php">Trang chủ</a> 
                            </li>
                            <li><a href=" ">Thời trang</a>
                            <ul class="sub-menu">
                            <?php 
                            while($row_cartegory = mysqli_fetch_array($sql_cartegory)){
                            ?>
                           
                                <li><a href="?quanly=product&id=<?php  echo $row_cartegory["cartegory_id"]?>"><?php echo $row_cartegory["cartegory_name"]?> </a></li>
                            
                           
                            <?php
                            }
                            ?>
                          </ul>
                          </li>
                            <li><a href="">Sản phẩm mới</a> </li>
                            <li><a href="">Kiểm tra hàng</a> </li>
                            <li><a href="">Thanh toán</a> 
                                </li>
                            <li><a href="">Liên hệ </a> </li>
                        </ul>
                </nav>