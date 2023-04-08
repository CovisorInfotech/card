<?php
include 'header.php';

?>


<?php
        $admin_user=$_SESSION['login_user'];
        $row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where profile_id='$admin_user'"));
        $adminuser_id = $row['id'];

        // products
        $sql =  "SELECT * FROM `products` WHERE adminuser_id='$adminuser_id'";
        $res = mysqli_query($db, $sql);

        // product catagery
        $sql_cat =  "SELECT * FROM `cat_product` WHERE adminuser_id='$adminuser_id'";
        $res_cat = mysqli_query($db, $sql_cat);
        
        // Attributes
        $sql_att =  "SELECT * FROM `product_attributes_title` WHERE adminuser_id='$adminuser_id'";
        $res_attributes = mysqli_query($db, $sql_att);
        
        // Policy
        $sql_qusan =  "SELECT * FROM `products_qusan` WHERE adminuser_id='$adminuser_id'";
        $res_policy = mysqli_query($db, $sql_qusan);
       
       // products
        if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
            $type = $_GET['type'];
            $id = $_GET['id'];
            if ($type == 'delete') {
                mysqli_query($db, "delete from products where id='$id' and adminuser_id='$adminuser_id'");
                echo "<script>alert('Record deleted successfully'); window.location = 'product.php';</script>";
            }
        }

         // product catagery
        if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
            $type = $_GET['type'];
            $id = $_GET['id'];
            if ($type == 'delete-cat') {
                mysqli_query($db, "delete from cat_product where id='$id' and adminuser_id='$adminuser_id'");
                echo "<script>alert('Record deleted successfully'); window.location = 'product.php';</script>";
            }
        }
        
         // Attributes
         if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
            $type = $_GET['type'];
            $id = $_GET['id'];
            if ($type == 'delete-attributes') {
                mysqli_query($db, "delete from product_attributes_title where id='$id' and adminuser_id='$adminuser_id'");
                echo "<script>alert('Record deleted successfully'); window.location = 'product.php';</script>";
            }
        }
        
         // Policy
         if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
            $type = $_GET['type'];
            $id = $_GET['id'];
            if ($type == 'delete-policy') {
                mysqli_query($db, "delete from products_qusan where id='$id' and adminuser_id='$adminuser_id'");
                echo "<script>alert('Record deleted successfully'); window.location = 'product.php';</script>";
            }
        }
        
?>
            <style>
             @media (max-width: 992px)
             {
                .td-menu{display: flow-root;}
             }
            </style>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="bg-white p-3">
                    <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Products</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        
                                        <div class="rs-select2--light">
                                            <ul class="nav nav-pills td-menu">
                                                <li class="nav-item p-1"><a href="add-products.php" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</a></li>
                                                <li class="nav-item p-1">
                                                 <a class="nav-link active" data-bs-toggle="pill" href="#home">Product List</a>
                                                </li>
                                                <li class="nav-item p-1">
                                                 <a class="nav-link" data-bs-toggle="pill" href="#menu1">Catagery List</a>
                                                </li>
                                                <li class="nav-item p-1">
                                                 <a class="nav-link" data-bs-toggle="pill" href="#attributes">Attributes List</a>
                                                </li>
                                                <li class="nav-item p-1">
                                                 <a class="nav-link" data-bs-toggle="pill" href="#policy">Policy List</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    
                                </div>


                                <div class="tab-content p-1">
                                <div class="tab-pane active" id="home">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead style="background: #555;">
                                            <tr>
                                                
                                                <th>imges</th>
                                                <th>Products</th>
                                                <th>Catagery</th>
                                                <th>Price</th>
                                                <!-- <th>status</th> -->
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            ?>
                                            <tr class="border-bottom">
                                               
                                                <td><img src="images/products/<?php echo $row['product_image'] ?>" alt="" width="100px" height="100px"></td>
                                                <td>
                                                    <span class="block-email"><?php echo $row['product'] ?></span>
                                                </td>
                                                <td class="desc"><?php echo $row['catagery'] ?></td>
                                                <td><?php echo $row['price'] ?></td>
                                                <!-- <td>
                                                    <span class="status--process">Processed</span>
                                                </td> -->
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!-- <a class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </a> -->
                                                        <a href="edit-product.php?id=<?php echo $row['id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <a href="?id=<?php echo $row['id'] ?>&type=delete" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                        </tr>
                                        <?php
                                     }
                                      ?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>

                                <div class="tab-pane fade" id="menu1">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead style="background: #555;">
                                            <tr>
                                               
                                                <th>Catagery</th>
                                                <th>Color</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php
                                        while ($row_cat = mysqli_fetch_assoc($res_cat)) {
                                            ?>
                                            <tr class="border-bottom">
                                                <td><?php echo $row_cat['product_category'] ?></td>
                                                <td><div style="background-color:<?php echo $row_cat['color'] ?>;height: 36px;"><span style="color: #ffffff00!important;">Color</span></div></td>
                                                
                                                <td>
                                                    <div class="table-data-feature">

                                                        <a href="edit-product-cat.php?id=<?php echo $row_cat['id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                       
                                                        <a href="?id=<?php echo $row_cat['id'] ?>&type=delete-cat" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                        </tr>
                                        <?php
                                     }
                                      ?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                
                                <div class="tab-pane fade" id="attributes">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead style="background: #555;">
                                            <tr>
                                               
                                                <th>Attributes</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php
                                        while ($row_attributes = mysqli_fetch_assoc($res_attributes)) {
                                            ?>
                                            <tr class="border-bottom">
                                                <td><?php echo $row_attributes['attributes_title'] ?></td>
                                                <td>
                                                    <div class="table-data-feature">

                                                        <a href="edit-attributes.php?id=<?php echo $row_attributes['id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                       
                                                        <a href="?id=<?php echo $row_attributes['id'] ?>&type=delete-attributes" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                        </tr>
                                        <?php
                                     }
                                      ?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                
                                <div class="tab-pane fade" id="policy">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead style="background: #555;">
                                            <tr>
                                               
                                                <th>Policy</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php
                                        while ($row_policy = mysqli_fetch_assoc($res_policy)) {
                                            ?>
                                            <tr class="border-bottom">
                                                <td><?php echo $row_policy['policy_qu'] ?></td>
                                                <td>
                                                    <div class="table-data-feature">

                                                        <a href="edit-policy.php?id=<?php echo $row_policy['id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                       
                                                        <a href="?id=<?php echo $row_policy['id'] ?>&type=delete-policy" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                        </tr>
                                        <?php
                                     }
                                      ?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>

                                </div>





                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        
						
						
						

                    </div>    
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

            <?php include 'footer.php' ?>

