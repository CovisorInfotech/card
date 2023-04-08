<?php
include 'header.php';

?>


<?php
        $admin_user=$_SESSION['login_user'];
        $row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where username='$admin_user'"));
        $adminuser_id = $row['id'];

        $sql =  "SELECT * FROM `products` WHERE adminuser_id='$adminuser_id'";
        $res = mysqli_query($db, $sql);

        $sql_cat =  "SELECT * FROM `cat_product` WHERE adminuser_id='$adminuser_id'";
        $res_cat = mysqli_query($db, $sql_cat);
       
        if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
            $type = $_GET['type'];
            $id = $_GET['id'];
            if ($type == 'delete') {
                mysqli_query($db, "delete from products where id='$id' and adminuser_id='$adminuser_id'");
                echo "<script>alert('Record deleted successfully'); window.location = 'product.php';</script>";
            }
        }
        
?>

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                    <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Products</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light">
                                            <ul class="nav nav-pills d-flex">
                                                <li class="nav-item">
                                                 <a class="nav-link active" data-bs-toggle="pill" href="#home">Product</a>
                                                </li>
                                                <li class="nav-item">
                                                 <a class="nav-link" data-bs-toggle="pill" href="#menu1">Catagery</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="add-products.php" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</a>
                                    </div>
                                </div>


                                <div class="tab-content">

                                <div class="tab-pane container active" id="home">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead style="background: #555;">
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
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
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
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
                                                        <a class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
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

                                <div class="tab-pane container fade" id="menu1">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead style="background: #555;">
                                            <tr>
                                               
                                                <th>Catagery</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php
                                        while ($row_cat = mysqli_fetch_assoc($res_cat)) {
                                            ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $row_cat['product_category'] ?></td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                       
                                                        <a href="?id=<?php echo $row_cat['id'] ?>&type=delete" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
            <!-- END MAIN CONTENT-->

            <?php include 'footer.php' ?>

