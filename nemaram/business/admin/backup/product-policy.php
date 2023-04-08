<?php
include 'header.php';

?>


<?php
        $admin_user=$_SESSION['login_user'];
        $row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where profile_id='$admin_user'"));
        $adminuser_id = $row['id'];

        $sql =  "SELECT * FROM `products_qusan_anser` WHERE adminuser_id='$adminuser_id'";
        $res = mysqli_query($db, $sql);

        $sql_cat =  "SELECT * FROM `products_qusan` WHERE adminuser_id='$adminuser_id'";
        $res_cat = mysqli_query($db, $sql_cat);

        if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
            $type = $_GET['type'];
            $id = $_GET['id'];
            if ($type == 'delete') {
                mysqli_query($db, "delete from products_qusan_anser where id='$id' and adminuser_id='$adminuser_id'");
                echo "<script>alert('Record deleted successfully'); window.location = 'about.php';</script>";
            }
        }

        
?>

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                    <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Product Policy</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        
                                        <div class="rs-select2--light">
                                           <ul class="nav nav-pills d-flex">
                                                <li class="nav-item p-1">
                                                <a href="add-product-policy.php" class="au-btn au-btn-icon au-btn--green au-btn--small"><i class="zmdi zmdi-plus"></i>Add item</a>
                                                </li>    
                                                <li class="nav-item p-1">
                                                 <a class="nav-link active" data-bs-toggle="pill" href="#attributes">Product Policy</a>
                                                </li>
                                                <li class="nav-item p-1">
                                                 <a class="nav-link" data-bs-toggle="pill" href="#catagery">Title</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>



                                <div class="tab-content">

                                <div class="tab-pane active" id="attributes">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead style="background: #555;">
                                            <tr>
                                                <th>Qusan?</th>
                                                <th>Anser</th>
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
                                                    <span class="block-email"><b><?php echo $row['policy_qu'] ?></b></span>
                                                </td>
                                                <td class="desc"><?php echo $row['policy_an'] ?></td>
                                                <!-- <td>
                                                    <span class="status--process">Processed</span>
                                                </td> -->
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!-- <a class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </a> -->
                                                        <a href="" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
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

                                <div class="tab-pane fade" id="catagery">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead style="background: #555;">
                                            <tr>
                                                <th>Qusan?</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php
                                        while ($row_cat = mysqli_fetch_assoc($res_cat)) {
                                            ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $row_cat['policy_qu'] ?></td>
                                                
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

