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