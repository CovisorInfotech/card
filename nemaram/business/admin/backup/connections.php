<?php
include 'header.php';

        $admin_user=$_SESSION['login_user'];
        $row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where profile_id='$admin_user'"));
        $adminuser_id = $row['id'];

        if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
            $type = $_GET['type'];
            $id = $_GET['id'];
            if ($type == 'delete') {
                mysqli_query($db, "delete from connections where id='$id' and adminuser_id='$adminuser_id'");
                echo "<script>alert('Record deleted successfully'); window.location = 'connections.php';</script>";
            }
        }

        
?>




            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="bg-white p-3">
                    <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Connection</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light">
                                            <ul class="nav nav-pills d-flex">
                                                <li class="nav-item p-1"><a href="add-connections.php" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</a></li>
                                                
                                            </ul>
                                        </div>
                                   </div>
                                </div>

                                <div class="table-responsive table-responsive-data2 p-1">
                                    <table class="table table-data2">
                                        <thead style="background: #555;">
                                            <tr>
                                                
                                                <th>Category</th>
                                                <th>Connection</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php
                                        $sql_col =  "SELECT * FROM `connections` WHERE adminuser_id='$adminuser_id'";
                                        $res_col = mysqli_query($db, $sql_col);
                                        while ($row_col = mysqli_fetch_assoc($res_col)) {
                                            ?>
                                            <tr class="border-bottom">
                                                <td><?php echo $row_col['category_connection'] ?></td>
                                                <td><?php echo $row_col['connections_id'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($row_col['connections_status'] == 1) {
                                                    ?>
                                                    <span class="btn btn-success text-white p-1">Approve</span>
                                                    <?php
                                                    } else {
                                                    ?>
                                                    <span class="btn btn-danger text-white p-1">Request</span>
                                                    <?php
                                                    }
                                                    ?>
                                                </td> 
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!-- <a class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </a> -->
                                                        <a href="edit-connections.php?id=<?php echo $row_col['id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <a href="?id=<?php echo $row_col['id'] ?>&type=delete" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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
                        
						
						
						

                    </div>   
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

            <?php include 'footer.php' ?>

