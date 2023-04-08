<?php 
error_reporting(0);
session_start();
include 'header.php'; 
include("../config.php");
$mobile_number=$_SESSION['mobile_number'];
$row_adm=mysqli_fetch_assoc(mysqli_query($db, "select * from profile where mobile_number='$mobile_number'"));
$id = $row_adm['id'];



if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST['theme_submit'])){
    

        $colors = $_POST['colors'];
        $theme_color = $_POST['theme_color'];
        $photo = $_POST['photo'];
        $banner = $_POST['banner'];

        $tempa = explode(".", $_FILES["pdf"]["name"]);
        $pdf = round(microtime(true)) . '.' . end($tempa);
        $tempname = $_FILES["pdf"]["tmp_name"];
        $folder = "assets/img/pdf/".$pdf;
        move_uploaded_file($tempname, $folder);
       

        

        $new_photo= $_FILES['photo']['tmp_name'];
        $photo_old=$_POST['photo_old'];
        if($new_photo !='')
       {
        list($width,$height)=getimagesize($new_photo);
        $nwidth=400;
        $nheight=400;
        $newimage=imagecreatetruecolor($nwidth,$nheight);
        if($_FILES['photo']['type']=='image/jpeg'){
          $source=imagecreatefromjpeg($new_photo);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $photo=time().'.jpg';
          imagejpeg($newimage,'assets/img/photo/'.$photo);
        }elseif($_FILES['photo']['type']=='image/png'){
          $source=imagecreatefrompng($new_photo);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $photo=time().'.png';
          imagepng($newimage,'assets/img/photo/'.$photo);
        }elseif($_FILES['photo']['type']=='image/gif'){
          $source=imagecreatefromgif($new_photo);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $photo=time().'.gif';
          imagegif($newimage,'assets/img/photo/'.$photo);
        }else{
          echo "Please select images4  jpg, png and gif image";
        }
       }
       else
       {
         $photo=$photo_old;
       }
      
      
       $new_banner= $_FILES['banner']['tmp_name'];
       $banner_old=$_POST['banner_old'];
       if($new_banner !='')
      {
        list($width,$height)=getimagesize($new_banner);
        $nwidth=720;
        $nheight=405;
        $newimage=imagecreatetruecolor($nwidth,$nheight);
        if($_FILES['banner']['type']=='image/jpeg'){
          $source=imagecreatefromjpeg($new_banner);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $banner=time().'.jpg';
          imagejpeg($newimage,'assets/img/banner/'.$banner);
        }elseif($_FILES['banner']['type']=='image/png'){
          $source=imagecreatefrompng($new_banner);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $banner=time().'.png';
          imagepng($newimage,'assets/img/banner/'.$banner);
        }elseif($_FILES['banner']['type']=='image/gif'){
          $source=imagecreatefromgif($new_banner);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $banner=time().'.gif';
          imagegif($newimage,'assets/img/banner/'.$banner);
        }else{
          echo "Please select images5  jpg, png and gif image";
        }
      }
      else
      {
        $banner=$banner_old;
      }



      $sql = "UPDATE profile SET photo = '$photo', banner='$banner', colors='$colors', theme_color='$theme_color', pdf='$pdf' WHERE id=$id";
        if (mysqli_query($db, $sql)) {
            move_uploaded_file($tempname, $folder);
            header("location: Admin/details.php");
            echo "Record updated successfully";
           } else {
             echo "Error updating record: " . mysqli_error($db);
           }

    }
}

?>





<style>
    #photo img{text-align: center;border: 2px solid #9e9e9e;border-radius: 50%;padding: 2px;}
    #file-input3{display: none;}

    #banner img{text-align: center;border: 2px solid #9e9e9e;border-radius: 10px;padding: 2px;width: 100%!important;height: 200px!important;}
    #file-input4{display: none;}


</style>    

<main id="main" class="main">
<section class="section dashboard">
<div class="row">
<div class="col-lg-12 p-0">
<div class="row justify-content-center pb-4">
<div class="col-xxl-7 col-md-7">
</div>    
</div>    
<div class="row justify-content-center">

<div class="col-xxl-7 col-md-7"> 
<div class="card">
<div class="card-body">
<h5 class="card-title">Basic Details</h5>


<div>
<form action="" method="post" enctype="multipart/form-data">
                <div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                   <p><b>Photo/Logo</b></p>
                   <p>Use 400x400 pixel photo for better result.</p>
                   
                    <div class="mb-3 text-center"> 
                    <label for="file-input3" class=" form-control-label"><div id="photo"><img src="<?php if(!empty($row_adm['photo'])) { ?>assets/img/photo/<?php echo $row_adm['photo'] ?> <?php } else { ?> assets/img/user.png <?php } ?>" width="150px" height="150px" alt="" /></div><p class="text-center m-0">Choose photo</p></label>   
                      <input type="file" id="file-input3" value="<?php echo $row_adm['photo'] ?>" name="photo" class="form-control-file" onchange="getImagePhoto(event)">
                      <input type="hidden" id="text-input3" value="<?php echo $row_adm['photo'] ?>" name="photo_old" placeholder="" class="form-control">
                    </div>
                  </div>

                  <div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                   <p><b>Banner Photo</b></p>
                   <p>Use 720x405 pixel photo for better result.</p>
                   <div class="text-center mb-3"> 
                      <label for="file-input4" class=" form-control-label"><div id="banner"><img src="<?php if(!empty($row_adm['banner'])) { ?>assets/img/banner/<?php echo $row_adm['banner'] ?> <?php } else { ?> assets/img/banner.jpg <?php } ?>" width="100%" height="200px" alt="" /></div><p class="text-center m-0">Choose banner</p></label>   
                      <input type="file" id="file-input4" value="<?php echo $row_adm['banner'] ?>" name="banner" class="form-control-file" onchange="getImageBanner(event)">
                      <input type="hidden" id="text-input4" value="<?php echo $row_adm['banner'] ?>" name="banner_old" placeholder="" class="form-control">
                    </div>
                  </div>

                  <div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                   <p><b>PDF</b></p>
                   <div class="mb-3"> 
                     <input type="file" id=""  name="pdf" class="form-control-file" >
                      </div>
                  </div>

                  <div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                   <p><b>Theme Color</b></p>
                   <p>Match your card with your brand by choosing colors from eight beautiful color pallets or any color on the rainbow.</p>
                   
                    <div class="row">
                    <div class="col-6 col-md-6">
                    <div class="mb-3"> 
                      <input type="color" class="form-control" name="colors" value="<?php echo $row_adm['colors'] ?>" id="" >
                    </div>
                    </div>
                    <div class="col-6 col-md-6">
                    <div class="mb-3"> 
                      <input type="color" class="form-control" name="theme_color" value="<?php echo $row_adm['theme_color'] ?>" id="" >
                    </div>
                    </div>
                    </div>

                  </div>
                  <div class="mt-3">
                    <button type="submit" name="theme_submit" class="btn btn-warning w-100">Submit</button>
                    </div>
                    </form>
</div>


</div>
</div>
</div>

<div class="col-xxl-5 col-md-5">
              <style>

.wcard-preview {
    width: 100%;
    height: 823px;
    padding: 0;
    display: block;
    transform-origin: top left;
    transform: scale(var(--tw-scale-x))translateX(-50%)translateY(-50%)translateZ(0);
    border: 14px solid #000;
    border-radius: 2rem;
    overflow: hidden;
    margin: 10px auto 0;
}
.h-full {
    height: 100%;
}
              </style>   
              <div class="card info-card sales-card pb-0">
                  <div class="pb-0">  
                  <div class="">
                    <div>
                    <div class="preview-wrap bg-white">
                        <div class="inner-wrap">
                            <div class="wcard-preview scale-60  sm:scale-75">
                                <div class="h-full">
                                    <iframe id="wcard_preview_frame" class="absolute top-0 left-0" src="http://localhost/web/card/" height="100%" width="100%"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  </div>
              </div>
            </div> 


</div>
</div>
</div>
</section>
</main>


<script>
 function getImageBanner(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('banner');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>
<script>
 function getImagePhoto(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('photo');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>


<?php include 'footer.php'; ?>