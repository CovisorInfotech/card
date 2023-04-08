<?php
include 'header.php';

?>


<?php
        $admin_user=$_SESSION['login_user'];
        $row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where profile_id='$admin_user'"));
        $adminuser_id = $row['id'];

        $sql =  "SELECT * FROM `faq` WHERE adminuser_id='$adminuser_id'";
        $res = mysqli_query($db, $sql);

        if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
            $type = $_GET['type'];
            $id = $_GET['id'];
            if ($type == 'delete') {
                mysqli_query($db, "delete from faq where id='$id' and adminuser_id='$adminuser_id'");
                echo "<script>alert('Record deleted successfully'); window.location = 'faq.php';</script>";
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
                                <h3 class="title-5 m-b-35">FAQ</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left d-flex">
                                    <div class="pb-2">
                                        <a href="add-faq.php" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead style="background: #555;">
                                            <tr>
                                                
                                                <th>Catagery</th>
                                                <th>Qusan</th>
                                                <th>Anser</th>
                                                <!-- <th>status</th> -->
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            ?>
                                            <tr class="border-bottom">
                                                
                                                <td><span class="block-email"><?php echo $row['faq_catagery'] ?></span></td> 
                                                <td>
                                                    <span class="desc"><?php echo $row['faq_qusan'] ?></span>
                                                </td>
                                                <td class="desc"><?php echo $row['faq_anser'] ?></td>
                                                <!-- <td>
                                                    <span class="status--process">Processed</span>
                                                </td> -->
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!-- <a class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </a> -->
                                                        <a href="edit-faq.php?id=<?php echo $row['id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <a href="?id=<?php echo $row['id'] ?>&type=delete" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>
                                                        <!--<a class="item" data-toggle="tooltip" data-placement="top" title="More">-->
                                                        <!--    <i class="zmdi zmdi-more"></i>-->
                                                        <!--</a>-->
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
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        
						
						
						

                    </div>    
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

            <?php include 'footer.php' ?>

