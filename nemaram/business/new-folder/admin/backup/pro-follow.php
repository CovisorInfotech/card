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

?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        <h3 class="title-5 m-b-35">Profile</h3>
        
        <?php
        $folled=mysqli_fetch_assoc(mysqli_query($db, "select * from pro_follow where adminuser_id='$userid'"));
        if(isset($folled['adminuser_id'])){
        ?> 
        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Follow Link Edit</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="update-form-query.php?update_id=<?php echo $folled['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                                <div class="row form-group">
                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Website Url</label>
                                        <input type="text" id="text-input" value="<?php echo $folled['website'] ?>" name="website" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Facebook Url</label>
                                        <input type="text" id="text-input" value="<?php echo $folled['facebook'] ?>" name="facebook" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Instagram Url</label>
                                        <input type="text" id="text-input" value="<?php echo $folled['instagram'] ?>" name="instagram" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Twitter Url</label>
                                        <input type="text" id="text-input" value="<?php echo $folled['twitter'] ?>" name="twitter" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Youtube Url</label>
                                        <input type="text" id="text-input" value="<?php echo $folled['youtube'] ?>" name="youtube" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Linkedin Url</label>
                                        <input type="text" id="text-input" value="<?php echo $folled['linkedIn'] ?>" name="linkedIn" placeholder="" class="form-control" required>
                                    </div>
                                </div>

                               
                                <div class="text-center">
                                    <button type="submit" name="pro_follow" class="btn btn-primary">Submit</button>
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
                            <strong>Follow Link Add</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="add-form-query.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                                <div class="row form-group">
                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Website Url</label>
                                        <input type="text" id="text-input" name="website" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Facebook Url</label>
                                        <input type="text" id="text-input" name="facebook" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Instagram Url</label>
                                        <input type="text" id="text-input" name="instagram" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Twitter Url</label>
                                        <input type="text" id="text-input" name="twitter" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Youtube Url</label>
                                        <input type="text" id="text-input" name="youtube" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Linkedin Url</label>
                                        <input type="text" id="text-input" name="linkedIn" placeholder="" class="form-control" required>
                                    </div>
                                </div>

                               
                                <div class="text-center">
                                    <button type="submit" name="pro_follow" class="btn btn-primary">Submit</button>
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
