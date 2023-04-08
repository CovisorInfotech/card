<?php 
error_reporting(0);
session_start();
include("config.php"); 
$admin_user=$_SESSION['login_user'];
$row_adm=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where profile_id='$admin_user'"));
$user_id=$row_adm['id'];

if(isset($_POST['connections'])) {
  if(isset($_SESSION['login_user'])){
    
  $adminuser_id = $_POST['adminuser_id'];  
  $connections_id = $_POST['connections_id'];
  $connections_status="1";


 echo $sql = "INSERT INTO connections (adminuser_id, connections_id, connections_status)
  VALUES ('$adminuser_id','$connections_id','$connections_status')";
  
  if (mysqli_query($db, $sql)) {
    echo "<script>alert('Add connections successfully'); window.location = 'connections.php';</script>";
  } else {
  }
}
else
{
  header("Location:login.php");
}
}

if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
  $type = $_GET['type'];
  $id = $_GET['id'];
  if(isset($_SESSION['login_user'])){
  if ($type == 'conn' || $type == 'add') {
      $connections_status = 1;
      if ($type == 'conn') {
          $connections_status = 0;
      }
      mysqli_query($db, "update connections set connections_status='$connections_status' where id='$id'");
      echo "<script>alert('Update successfully'); window.location = 'connections.php';</script>";
  }
}
else
{
  header("Location:login.php");
}
}  
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- OwlCarousel2 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    a{text-decoration: none;}
 </style>
</head>   
<body class="">



<section id="profile-head"  class="position-fixed w-100" style="z-index: 100;
<?php 
if(isset($row_adm['thames_color']))
{
?> 
background-color:<?php echo $row_adm['thames_color']?>!important; 
<?php 
} 
else 
{ 
?>
background-color:#232323!important;
<?php } ?>
">

<div class="container"> 

<div class="row">
<div class="col-8 col-md-3 col-lg-3 m-auto">
  <div class="d-flex pt-2 pb-2">
    <?php 
    if(isset($_SESSION['login_user']))
    { ?>
      <div class="img-pro me-4" style="width: 27%;"><img src="admin/images/logo/<?php echo $row_adm['image'] ?>" alt="" width="100%"></div>
   <?php }
    else{
    ?>
    <div class="img-pro me-4">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="40" height="40" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m127.08 44.32-62-40a2 2 0 0 0-2.16 0l-62 40a2 2 0 0 0 2.16 3.36L8 44.51V122a2 2 0 0 0 2 2h108a2 2 0 0 0 2-2V44.51l4.92 3.17A1.94 1.94 0 0 0 126 48a2 2 0 0 0 1.08-3.68zM116 42v78H12V41.93L64 8.38l52 33.55V42z" fill="#ffffff" data-original="#000000" class=""></path><path d="M73 85a10 10 0 0 0 10-10 2 2 0 0 0-2-2h-8a2 2 0 0 0 0 4h5.66A6 6 0 1 1 73 69a5.92 5.92 0 0 1 2.59.59A2 2 0 1 0 77.32 66 9.9 9.9 0 0 0 73 65a10 10 0 0 0 0 20zM38 81H28V67a2 2 0 0 0-4 0v16a2 2 0 0 0 2 2h12a2 2 0 0 0 0-4zM50 65a10 10 0 1 0 10 10 10 10 0 0 0-10-10zm0 16a6 6 0 1 1 6-6 6 6 0 0 1-6 6zM96 85a10 10 0 1 0-10-10 10 10 0 0 0 10 10zm0-16a6 6 0 1 1-6 6 6 6 0 0 1 6-6z" fill="#ffffff" data-original="#000000" class=""></path></g></svg>
    </div>
    <?php
    }
    ?>
</div>

</div>

<div class="col-md-6 col-lg-6 p-0 m-auto d-none d-md-block d-lg-block">  
<style>
#head-menu li{margin: auto;}

#head-menu .nav-link {
    color: #000;
    border: 1px solid black;
    background-color: #fff4d5;
    margin: 0px 3px 0px 3px;
    border-radius: 4px;
}
</style>    
<ul class="d-flex m-auto list-unstyled" id="head-menu">
  <li class="nav-item">
    <a class="nav-link active" href="index.php"><i class="fa-regular fa-address-card m-auto"></i> Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="business.php"><i class="fa-solid fa-briefcase m-auto"></i> Business</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="about.php"><i class="fa-solid fa-user m-auto"></i> About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="blog.php"><i class="fa-brands fa-blogger-b m-auto"></i> Blog</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="connections.php"><i class="fa-solid fa-share-from-square m-auto"></i> Connections</a>
  </li>
</ul>
</div>

<div class="col-4 col-md-3 col-lg-3 m-auto">
<div class="d-flex pt-2 pb-2" style="float: right;">
    <?php 
    if(isset($_SESSION['login_user']))
    { ?>
<style>
.dropdown {
  width: 180px;
  display: inline-block;
  margin-right: 10px;
  position: relative;
}

.dropdown ul {
  list-style-type: none;
  display: block;
  margin: 0;
  padding: 0;
  position: absolute;
  width: 100%;
  box-shadow: 0 6px 5px -5px rgba(0,0,0,0.3);
  overflow: hidden;
  margin-top: 39px;
  border-radius: 7px;
}
.dropdown a{
  display: block;
  padding: 0 0 0 10px;
  text-decoration: none;
  line-height: 40px;
  font-size: 13px;
  text-transform: uppercase;
  font-weight: bold;
  color: #000;
  background-color: #FFF;
  color: #000;
  background-color: #ffba20;
}
.dropdown li {
  height: 0;
  overflow: hidden;
  transition: all 500ms;
}

.dropdown li:first-child a::before {
  content: "";
  display: block;
  position: absolute;
  width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #ffc890;
  margin: -9px 0 0 137px;
}

.dropdown.hover:hover li, .dropdown.toggle > input:checked ~ ul li {          
  height: 40px;
}
.dropdown.hover:hover li:first-child, .dropdown.toggle > input:checked ~ ul li:first-child {
  padding-top: 9px;
}

        </style>
      
      <div class="dropdown hover">
      <a href="#" style="background-color: #0000;" class="text-white float-end"><i class="fa-regular fa-user"></i> <?php echo $row_adm['username'] ?></a>
      <ul>
        <li><a href="admin/dashboard.php"><i class="fa-regular fa-user"></i> Account</a></li>
        <li><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Sign Out</a></li>
      </ul>
    </div>
   <?php }
    else{
    ?>
    <div class="me-2"><span class="text-white"><i class="fa-regular fa-user"></i></span></div>
    <a href="login.php"><div class=""><span class="text-white">Sign In</span></div></a>
    <?php
    }
    ?>
</div>
</div>

</div>
</div>
</section>  

<section class="">
<div style="padding-top: 56px;position: fixed;width: 100%;z-index: 50;">
  <div style="background-color: #f1f1f1;padding: 6px;">
    <div class="container">
    <div class="input-group">
    <input type="text" class="form-control" placeholder="Search...">
    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="20" height="20" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m60.08 53.34-16-16a22.57 22.57 0 1 0-6.74 6.74l16 16a4.76 4.76 0 1 0 6.73-6.74zM11.26 39A19.58 19.58 0 1 1 39 39a19.6 19.6 0 0 1-27.74 0zM58 58a1.76 1.76 0 0 1-2.49 0l-15.7-15.7c.44-.38 2.11-2 2.49-2.5L58 55.46A1.77 1.77 0 0 1 58 58z" data-name="Layer 18" fill="#6d6d6d" data-original="#000000" class=""></path></g></svg></span>
    </div>
    </div>
  </div>
  </div>
</section>



<main class="container">




<section class="pt-5">

      <div class="container pt-5 text-center">
       
        <div class="row pt-4">
            <div class="col-sm-12">
              <div id="profile" class="owl-carousel">
    
                <?php
                $sql_profile =  "SELECT * from useradmin";
                $res_profile = mysqli_query($db, $sql_profile);
                while ($row_profile= mysqli_fetch_assoc($res_profile)) {
                ?>
                <div class="item">
                  <div class="shadow-effect">
                  <center><div style="border-radius: 50%!important;width: 80px!important;height: 80px!important;"><div style="background-image: url(admin/images/admin-img/<?php echo $row_profile['image'] ?>);background-position: center;background-repeat: repeat;background-size: cover;height: 80px;width: 80px;border-radius: 50%;border: 3px solid #ff3007;"></div></div></center>
                    <p class="mb-0"><?php echo $row_profile['username'] ?><br>
                    <p style="font-size: 12px;"><?php echo $row_profile['business_category'] ?></p></p>
                    <div class="testimonial-name mt-2" style="color: white;font-weight: 600;<?php if(isset($row_adm['thames_color'])){ ?>background-color:<?php echo $row_adm['thames_color'] ?>!important; <?php } else { ?>background-color: #FE9603!important; <?php } ?>border-radius: 4px;padding-bottom: 4px;">
                    <?php
                    $proconn_id=$row_profile['id'];
                    $sql_proconn =  "SELECT  * from connections where adminuser_id='$proconn_id'";
                    $res_proconn = mysqli_query($db, $sql_proconn);
                    if (mysqli_num_rows($res_proconn) > 0) {
                    while ($row_proconn= mysqli_fetch_assoc($res_proconn)) {
                      if ($row_proconn['connections_status'] == '1') {
                      ?>
                      <a href="?id=<?php echo $row_proconn['id'] ?>&type=conn" style="color: white;text-decoration: none;"><p class="m-0" style="font-size: 13px;"> Connection</p></a>
                      <?php
                      } else {
                      ?>
                      <a href="?id=<?php echo $row_proconn['id'] ?>&type=add" style="color: white;text-decoration: none;"><p class="m-0" style="font-size: 13px;">Add</p></a>
                      <?php
                      }
                    }
                  }
                  else
                  {
                   ?> 
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal m-0">
                    <input type="hidden" value="<?php echo $row_profile['id'] ?>" name="adminuser_id">
                      <input type="hidden" value="<?php echo $row_profile['profile_id'] ?>" name="connections_id">
                    <button type="submit" class="w-100" style="font-size: 13px;background-color: #fe960300;border: none;color: white;"  name="connections">Add</button>
                    </form>
                  <?php
                  }
                  
                      ?>

                    </div>
                  </div>
                </div>
                <?php
                }
                ?>
                
               </div>
            </div>
          </div>
        <div>
      
      </section>    







<section class="mb-5">
    <div class="pt-4 pb-5">
        <div><h2 class="text-center pb-2">Connections</h2></div>
        <style>
            @media only screen and (max-width: 600px) {
                .connections-page h4 {
                    font-size: 16px;
                }
            }
            .row blog-page img {
                border-radius: 12px;
            }
            .img-back {
                background-size: cover;
                background-position: center;
            }
        </style>


        <div class="row justify-content-center">
        <div class="col-md-12"> 
          <div class="row">  
            <?php
    $sql_conne =  "SELECT  * from useradmin INNER JOIN connections on useradmin.id=connections.adminuser_id where  connections_status='1'";
    $res_conne = mysqli_query($db, $sql_conne);
    while ($row_conne = mysqli_fetch_assoc($res_conne)) 
    {
    ?>
    <div class="col-md-3">
                <div class="card m-2">
                    <a href="profile.html" class="text-decoration-none" style="color:black;">
                        <div class="row connections-page m-0">
                            <div class="col-12 col-md-12 col-lg-12 p-0 img-back">
                                <div style="background-image: url(admin/images/admin-img/<?php echo $row_conne['image']?>); background-repeat: no-repeat; background-position: center; height: 200px; background-size: cover;margin: 7px;"></div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 p-2 m-auto">
                                <div style="position: absolute;float: right;right: 7px;top: 7px;background-color: red;padding-right: 7px;padding-left: 7px;color: white;"><span>by</span></div>
                                <div>
                                    <p>
                                        <b><?php echo $row_conne['username'] ?></b><br />
                                        <b><?php echo $row_conne['company'] ?></b><br />
                                        <b><?php echo $row_conne['business_category'] ?></b>
                                    </p>
                                    <p><?php echo $row_conne['designation'] ?></p>
                                    <p class="d-none d-md-block d-lg-block"></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                </div>
    <?php
    }
    ?> 
    </div>
          </div> 

         
    
    </div>
</section>





</main>





<footer>  
<div class="d-none d-sm-none d-md-block d-lg-block">
    <div><img src="images/footer/footer.png" alt="" width="100%" style="opacity: 0.5;"></div>
</div>



<style>
@media only screen and (max-width: 600px){
.bottom-manu {
    bottom: 0px;
    z-index: 200;
}
}
.back-color {
    background-color: #f6f6f6;
}
.footer-icon i {
    color: #6a6a6a!important;
}
.position-fixed {
position: fixed!important;
}

    #bottom_blog_menu .nav-item {
    width: 20%;
}
#bottom_blog_menu .text {
    font-size: 11px;
}
    #bottom_blog_menu .nav-link{color: #000;
    background-color: #f1f1f1!important;
    margin: 0px!important;}
     #bottom_blog_menu .nav-link:hover{ color: #fe9603!important;}
</style>
<div class="d-block d-sm-block d-md-none d-lg-none position-fixed w-100 bottom-manu d-block d-md-none d-lg-none" style="bottom: -2px;background-color: #f1f1f1;">
    <div class="back-color">
<ul class="d-flex m-auto list-unstyled" id="bottom_blog_menu">
  <li class="nav-item">
    <a class="nav-link active" href="index.php"><div class="d-flex-nr text-center"><p class="mb-0"><i class="fa-regular fa-address-card m-auto"></i></p><p class="text">Contact</p></div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="business.php"><div class="d-flex-nr text-center"><p class="mb-0"><i class="fa-solid fa-briefcase m-auto"></i></p><p class="text">Business</p></div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="about.php"><div class="d-flex-nr text-center"><p class="mb-0"><i class="fa-solid fa-user m-auto"></i></p><p class="text">About</p></div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="blog.php"><div class="d-flex-nr text-center"><p class="mb-0"><i class="fa-brands fa-blogger-b m-auto"></i></p><p class="text">Blog</p></div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="connections.php"><div class="d-flex-nr text-center"><p class="mb-0"><i class="fa-solid fa-share-from-square m-auto"></i></p><p class="text">Connections</p></div></a>
  </li>
</ul>
    </div>
</div>


<script>jQuery(document).ready(function($) {

  $('#profile').owlCarousel({
      loop: true,
      center: true,
      items: 3,
      margin: 10,
      // autoplay: true,
      dots:true,
      autoplayTimeout: 8500,
      smartSpeed: 450,
      responsive: {
        0: {
          items: 3
        },
        768: {
          items: 3
        },
        1170: {
          items: 5
        }
      }
  });
});</script>

</footer>