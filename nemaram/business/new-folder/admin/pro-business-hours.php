<?php 
error_reporting(0);
include 'header.php'; 
$admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where username='$admin_user'"));
$userid=$row['id'];


// if($_SERVER["REQUEST_METHOD"] == "POST") {
//     $update_id=$_GET['update_id'];
//     $username = $_POST['username'];
//     $last_name = $_POST['last_name']; 
//     $designation = $_POST['designation']; 
//     $company = $_POST['company'];
//     $business_category = $_POST['business_category'];

//     $logo = $_FILES["logo"]["name"];
//     $tempname = $_FILES["logo"]["tmp_name"];
//     $folder = "admin/images/admin-img/".$product_image;

//     $image = $_FILES["image"]["name"];
//     $tempname = $_FILES["image"]["tmp_name"];
//     $folder = "admin/images/admin-img/".$product_image;


//     $thumbnail_image = $_FILES["thumbnail_image"]["name"];
//     $tempname = $_FILES["thumbnail_image"]["tmp_name"];
//     $folder = "admin/images/admin-img/".$product_image;
   
    
//     $sql = "UPDATE useradmin SET image='$image', username='$username', last_name='$last_name', designation='$designation',
// company='$company', combusiness_categorypany='$business_category', logo='$logo', thumbnail_image='$thumbnail_image' WHERE id=$update_id";
//     move_uploaded_file($tempname, $folder);
    
//     if (mysqli_query($db, $sql)) {
//       echo "<script>alert('Produc Update'); window.location = 'product.php';</script>";
//     } else {
     
//     }
//  }

// ?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        <h3 class="title-5 m-b-35">Profile</h3>
        
        <?php
        $bused=mysqli_fetch_assoc(mysqli_query($db, "select * from pro_business_hours where adminuser_id='$userid'"));
        if(isset($bused['adminuser_id'])){
        ?> 
        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit business hours</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="update-form-query.php?update_id=<?php echo $bused['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                                <div class="row form-group">
                                <h4>Working Time</h4>
                                    <div class="col-12 col-md-5">
                                    <label for="text-input" class=" form-control-label">Open Time</label>
                                        <input type="time" id="text-input" value="<?php echo $bused['open_time'] ?>" name="open_time" placeholder="Open Time" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-2 m-auto">
                                    <h5 class="text-center">To</h5>
                                    </div>
                                    <div class="col-12 col-md-5">
                                    <label for="text-input" class=" form-control-label">Closed Time</label>
                                        <input type="time" id="text-input" value="<?php echo $bused['closed_time'] ?>" name="closed_time" placeholder="Closed Time" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row form-group">
                                   <h4>Working Days</h4>
                                    <div class="col-6 col-md-2 ps-5">
                                    <input class="form-check-input" type="checkbox"name="monday" id="inlineCheckbox1" value="Monday" <?php if ($bused['monday'] == 'Monday') { echo "checked='checked'"; } ?> >
                                    <label class="form-check-label" for="inlineCheckbox1">Monday</label>
                                    </div>
                                    <div class="col-6 col-md-2 ps-5">
                                    <input class="form-check-input" type="checkbox" name="tuesday" id="inlineCheckbox1" value="Tuesday" <?php if ($bused['tuesday'] == 'Tuesday') { echo "checked='checked'"; } ?> >
                                    <label class="form-check-label" for="inlineCheckbox1">Tuesday</label>
                                    </div>
                                    <div class="col-6 col-md-2 ps-5">
                                    <input class="form-check-input" type="checkbox" name="wenesday" id="inlineCheckbox1" value="Wenesday" <?php if ($bused['wenesday'] == 'Wenesday') { echo "checked='checked'"; } ?> >
                                    <label class="form-check-label" for="inlineCheckbox1">Wenesday</label>
                                    </div>
                                    <div class="col-6 col-md-2 ps-5">
                                    <input class="form-check-input" type="checkbox" name="thursday" id="inlineCheckbox1" value="Thursday" <?php if ($bused['thursday'] == 'Thursday') { echo "checked='checked'"; } ?> >
                                    <label class="form-check-label" for="inlineCheckbox1">Thursday</label>
                                    </div>
                                    <div class="col-6 col-md-2 ps-5">
                                    <input class="form-check-input" type="checkbox" name="friday" id="inlineCheckbox1" value="Friday" <?php if ($bused['friday'] == 'Friday') { echo "checked='checked'"; } ?> >
                                    <label class="form-check-label" for="inlineCheckbox1">Friday</label>
                                    </div>
                                    <div class="col-6 col-md-2 ps-5">
                                    <input class="form-check-input" type="checkbox" name="saturday" id="inlineCheckbox1" value="Saturday" <?php if ($bused['saturday'] == 'Saturday') { echo "checked='checked'"; } ?> >
                                    <label class="form-check-label" for="inlineCheckbox1">Saturday</label>
                                    </div>
                                    
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="pro_business_hours" class="btn btn-primary">Submit</button>
                                    </button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                <?php
                }
                else
                {
                ?>
             
             <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Add business hours</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="add-form-query.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                                <div class="row form-group">
                                <h4>Working Time</h4>
                                    <div class="col-12 col-md-5">
                                    <label for="text-input" class=" form-control-label">Open Time</label>
                                        <input type="time" id="text-input" name="open_time" placeholder="Open Time" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-2 m-auto">
                                    <h5 class="text-center">To</h5>
                                    </div>
                                    <div class="col-12 col-md-5">
                                    <label for="text-input" class=" form-control-label">Closed Time</label>
                                        <input type="time" id="text-input"name="closed_time" placeholder="Closed Time" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row form-group">
                                   <h4>Working Days</h4>
                                    <div class="col-6 col-md-2 ps-5">
                                    <input class="form-check-input" type="checkbox" name="monday" id="inlineCheckbox1" value="Monday">
                                    <label class="form-check-label" for="inlineCheckbox1">Monday</label>
                                    </div>
                                    <div class="col-6 col-md-2 ps-5">
                                    <input class="form-check-input" type="checkbox" name="tuesday" id="inlineCheckbox1" value="Tuesday">
                                    <label class="form-check-label" for="inlineCheckbox1">Tuesday</label>
                                    </div>
                                    <div class="col-6 col-md-2 ps-5">
                                    <input class="form-check-input" type="checkbox" name="wenesday" id="inlineCheckbox1" value="Wenesday">
                                    <label class="form-check-label" for="inlineCheckbox1">Wenesday</label>
                                    </div>
                                    <div class="col-6 col-md-2 ps-5">
                                    <input class="form-check-input" type="checkbox" name="thursday" id="inlineCheckbox1" value="Thursday">
                                    <label class="form-check-label" for="inlineCheckbox1">Thursday</label>
                                    </div>
                                    <div class="col-6 col-md-2 ps-5">
                                    <input class="form-check-input" type="checkbox" name="friday" id="inlineCheckbox1" value="Friday">
                                    <label class="form-check-label" for="inlineCheckbox1">Friday</label>
                                    </div>
                                    <div class="col-6 col-md-2 ps-5">
                                    <input class="form-check-input" type="checkbox" name="saturday" id="inlineCheckbox1" value="Saturday">
                                    <label class="form-check-label" for="inlineCheckbox1">Saturday</label>
                                    </div>
                                    
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="pro_business_hours" class="btn btn-primary">Submit</button>
                                    </button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>

                <?php
                }
                ?>
        
        
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2022 Sirvi. All rights reserved. Template by <a href="#">sirvi</a>.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<?php include 'footer.php' ?>
