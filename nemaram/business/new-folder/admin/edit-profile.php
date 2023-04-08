<?php 
// error_reporting(0);

include 'header.php'; 
$admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where username='$admin_user'"));
$adminuser_id = $row['id'];

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $update_id=$_GET['update_id'];
  
    $designation = $_POST['designation']; 
    $company = $_POST['company'];
    $business_category = $_POST['business_category'];
    

   $new_logo= $_FILES["logo"]["name"];
   $logo_old=$_POST['logo_old'];
   if($new_logo !='')
   {
      $tempa = explode(".", $_FILES["logo"]["name"]);
      $logo = round(microtime(true)) . '.' . end($tempa);
      $tempname1 = $_FILES["logo"]["tmp_name"];
      $folder_logo = "images/logo/".$logo;
   }
   else
   {
      $logo=$logo_old;
   }
   
  
   
   $new_image= $_FILES["image"]["name"];
   $image_old=$_POST['image_old'];
   if($new_image !='')
   {
     $tempc = explode(".", $_FILES["image"]["name"]);
     $image = round(microtime(true)) . '.' . end($tempc);
     $tempname2 = $_FILES["image"]["tmp_name"];
     $folder_image = "images/admin-img/".$image;
   }
   else
   {
      $image=$image_old;
   }
   
   
   
   $new_thumbnail_image= $_FILES["thumbnail_image"]["name"];
   $thumbnail_image_old=$_POST['thumbnail_image_old'];
   if($new_thumbnail_image !='')
   {
      $tempb = explode(".", $_FILES["thumbnail_image"]["name"]);
      $thumbnail_image = round(microtime(true)) . '.' . end($tempb);
      $tempname3 = $_FILES["thumbnail_image"]["tmp_name"];
      $folder_thumbnail = "images/thumbnail/".$thumbnail_image;
   }
   else
   {
      $thumbnail_image=$thumbnail_image_old;
   }

   
   $sql = "UPDATE useradmin SET image='$image', designation='$designation', company='$company', business_category='$business_category', logo='$logo', thumbnail_image='$thumbnail_image' WHERE id=$adminuser_id";
    if (mysqli_query($db, $sql)) {
        move_uploaded_file($tempname1, $folder_logo);
        move_uploaded_file($tempname2, $folder_image);
        move_uploaded_file($tempname3, $folder_thumbnail);
      echo "<script>alert('profile Update'); window.location = 'edit-profile.php';</script>";
    } else {
     
    }
 }

?>

<!-- MAIN CONTENT-->

<style>
#preview1 img{width: 150px;height: 150px;}
#preview2 img{width: 150px;height: 150px;}
#preview3 img{width: 150px;height: 150px;}
</style>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        <h3 class="title-5 m-b-35">Profile</h3>
        
        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit Profile</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                                <!--<div class="row form-group">-->
                                <!--    <div class="col-12 col-md-6">-->
                                <!--        <label for="text-input" class=" form-control-label">First & Middle Name</label>-->
                                <!--        <input type="text" id="text-input" value="<?php echo $row['username'] ?>" name="username" placeholder="" class="form-control" required>-->
                                <!--    </div>-->
                                <!--    <div class="col-12 col-md-6">-->
                                <!--        <label for="select" class=" form-control-label">Last Name</label>-->
                                <!--        <input type="text" id="text-input" value="<?php echo $row['last_name'] ?>" name="last_name" placeholder="" class="form-control" required>-->
                                <!--    </div>-->
                                <!--</div>-->

                                <div class="row form-group">
                                    <div class="col-12 col-md-4">
                                        <label for="text-input" class=" form-control-label">Designation Name</label>
                                        <input type="text" id="text-input" value="<?php echo $row['designation'] ?>" name="designation" placeholder="" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label for="select" class=" form-control-label">Company Name</label>
                                        <input type="text" id="text-input" value="<?php echo $row['company'] ?>" name="company" placeholder="" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label for="select" class=" form-control-label">Business Category</label>
                                        <input type="text" id="text-input" value="<?php echo $row['business_category'] ?>" name="business_category" placeholder="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12 col-md-4">
                                        <label for="text-input" class=" form-control-label">Logo</label>
                                        <div id="preview1"><img src="images/logo/<?php echo $row['logo'] ?>" width="150px" height="150px" alt="" /></div>
                                        <input type="file" value="<?php echo $row['logo'] ?>" name="logo" placeholder="" class="form-control" onchange="getImagePreview1(event)">
                                        <input type="hidden" id="text-input" value="<?php echo $row['logo'] ?>" name="logo_old" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label for="select" class=" form-control-label">Profil Image</label>
                                        <div id="preview2"><img src="images/admin-img/<?php echo $row['image'] ?>" width="150px" height="150px" alt="" /></div>
                                        <input type="file" value="<?php echo $row['image'] ?>" name="image" placeholder="" class="form-control" onchange="getImagePreview2(event)">
                                        <input type="hidden" id="text-input" value="<?php echo $row['image'] ?>" name="image_old" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label for="select" class=" form-control-label">Thumbnail Image</label>
                                        <div id="preview3"><img src="images/thumbnail/<?php echo $row['thumbnail_image'] ?>" width="150px" height="150px" alt="" /></div>
                                        <input type="file" value="<?php echo $row['thumbnail_image'] ?>" name="thumbnail_image" placeholder="" class="form-control" onchange="getImagePreview3(event)">
                                        <input type="hidden" id="text-input" value="<?php echo $row['thumbnail_image'] ?>" name="thumbnail_image_old" placeholder="" class="form-control">
                                    </div>
                                </div>



                                <div class="text-center">
                                    <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                    </button>
                                </div>


                            </form>
                        </div>
                        
                    </div>
                   
                </div>
        
        
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

<script>
 function getImagePreview1(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview1');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>

<script>
 function getImagePreview2(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview2');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>

<script>
 function getImagePreview3(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview3');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>

<!-- END MAIN CONTENT-->
<?php include 'footer.php' ?>
