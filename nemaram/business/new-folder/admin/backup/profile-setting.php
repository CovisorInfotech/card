<?php
include 'header.php';

?>


<?php
        $admin_user=$_SESSION['login_user'];
        $row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where username='$admin_user'"));
        $adminuser_id = $row['id'];

        

        if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
            $type = $_GET['type'];
            $id = $_GET['id'];

            if ($type == 'show_pp' || $type == 'hide_pp') {
                $pay_status = 1;
                if ($type == 'show_pp') {
                    $pay_status = 0;
                }
                mysqli_query($db, "update pro_pay set pay_status='$pay_status' where adminuser_id='$adminuser_id'");
                echo "<script>alert('Record update pay successfully'); window.location = 'profile-setting.php';</script>";
            }

            if ($type == 'show_mm' || $type == 'hide_mm') {
                $member_status = 1;
                if ($type == 'show_mm') {
                    $member_status = 0;
                }
                mysqli_query($db, "update pro_member set member_status='$member_status' where adminuser_id='$adminuser_id'");
                echo "<script>alert('Record update member successfully'); window.location = 'profile-setting.php';</script>";
            }

            if ($type == 'show_ff' || $type == 'hide_ff') {
                $follow_status = 1;
                if ($type == 'show_ff') {
                    $follow_status = 0;
                }
                mysqli_query($db, "update pro_follow set follow_status='$follow_status' where adminuser_id='$adminuser_id'");
                echo "<script>alert('Record update follow successfully'); window.location = 'profile-setting.php';</script>";
            }

            if ($type == 'show_bb' || $type == 'hide_bb') {
                $hours_status = 1;
                if ($type == 'show_bb') {
                    $hours_status = 0;
                }
                mysqli_query($db, "update pro_business_hours set hours_status='$hours_status' where adminuser_id='$adminuser_id'");
                echo "<script>alert('Record update business successfully'); window.location = 'profile-setting.php';</script>";
            }

            if ($type == 'show_cc' || $type == 'hide_cc') {
                $hours_status = 1;
                if ($type == 'show_cc') {
                    $hours_status = 0;
                }
                mysqli_query($db, "update pro_connect set connect_status='$hours_status' where adminuser_id='$adminuser_id'");
                echo "<script>alert('Record update connect successfully'); window.location = 'profile-setting.php';</script>";
            }


            
            
        }

        
?>

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                    <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Profile Setting</h3>
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead style="background: #555;">
                                            <tr>
                                                <th>Details</th>
                                                <th>Show / Hide</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>Pay</td>
                                                <td>
                                                    <?php
                                                    $row_pay=mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM pro_pay WHERE adminuser_id='$adminuser_id'"));
                                                    if ($row_pay['pay_status'] == 1) {
                                                    ?>
                                                    <a href="?id=<?php echo $row_pay['id'] ?>&type=show_pp"><span class="btn btn-success text-white p-1">Show</span></a>
                                                    <?php
                                                    } else {
                                                    ?>
                                                    <a href="?id=<?php echo $row_pay['id'] ?>&type=hide_pp"><span class="btn btn-danger text-white p-1">Hide</span></a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                           </tr>
                                           <tr class="tr-shadow">
                                                <td>Member</td>
                                                <td>
                                                    <?php
                                                    $row_member=mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM  pro_member WHERE adminuser_id='$adminuser_id'"));
                                                    if ($row_member['member_status'] == 1) {
                                                    ?>
                                                    <a href="?id=<?php echo $row['id'] ?>&type=show_mm"><span class="btn btn-success text-white p-1">Show</span></a>
                                                    <?php
                                                    } else {
                                                    ?>
                                                    <a href="?id=<?php echo $row['id'] ?>&type=hide_mm"><span class="btn btn-danger text-white p-1">Hide</span></a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                           </tr>
                                           <tr class="tr-shadow">
                                                <td>Follow</td>
                                                <td>
                                                    <?php
                                                     $row_follow=mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM  pro_follow WHERE adminuser_id='$adminuser_id'"));
                                                    if ($row_follow['follow_status'] == 1) {
                                                    ?>
                                                    <a href="?id=<?php echo $row['id'] ?>&type=show_ff"><span class="btn btn-success text-white p-1">Show</span></a>
                                                    <?php
                                                    } else {
                                                    ?>
                                                    <a href="?id=<?php echo $row['id'] ?>&type=hide_ff"><span class="btn btn-danger text-white p-1">Hide</span></a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                           </tr>
                                           <tr class="tr-shadow">
                                                <td>Business Hours</td>
                                                <td>
                                                    <?php
                                                     $row_hours=mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM  pro_business_hours WHERE adminuser_id='$adminuser_id'"));
                                                    if ($row_hours['hours_status'] == 1) {
                                                    ?>
                                                    <a href="?id=<?php echo $row['id'] ?>&type=show_bb"><span class="btn btn-success text-white p-1">Show</span></a>
                                                    <?php
                                                    } else {
                                                    ?>
                                                    <a href="?id=<?php echo $row['id'] ?>&type=hide_bb"><span class="btn btn-danger text-white p-1">Hide</span></a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                           </tr>
                                           <tr class="tr-shadow">
                                                <td>Connect</td>
                                                <td>
                                                    <?php
                                                     $row_connect=mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM  pro_connect WHERE adminuser_id='$adminuser_id'"));
                                                    if ($row_connect['connect_status'] == 1) {
                                                    ?>
                                                    <a href="?id=<?php echo $row_connect['id'] ?>&type=show_cc"><span class="btn btn-success text-white p-1">Show</span></a>
                                                    <?php
                                                    } else {
                                                    ?>
                                                    <a href="?id=<?php echo $row_connect['id'] ?>&type=hide_cc"><span class="btn btn-danger text-white p-1">Hide</span></a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                           </tr>
                                           
                                       
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        
						
						
						

                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

            <?php include 'footer.php' ?>

