<?php 
error_reporting(0);
session_start();
if(!empty($_GET['file']))
{
$filename = basename($_GET['file']);
$filepath = 'admin/images/download/' . $filename;
$filepath = 'admin/images/pay/' . $filename;
if(!empty($filename) && file_exists($filepath)){
    header("Cache-Control: public");
	header("Content-Description: FIle Transfer");
	header("Content-Disposition: attachment; filename=$filename");
	header("Content-Type: application/zip");
	header("Content-Transfer-Emcoding: binary");
    readfile($filepath);
	exit;
    }
	else{
    echo "<script>alert('This File Does not exist'); window.location = 'index.php';</script>";
	}
}


include("config.php"); 
$admin_user=$_SESSION['login_user'];
$row_adm=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where profile_id='$admin_user'"));
$user_id=$row_adm['id'];

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





<section class="pb-4" style="background-color: white;">      
      <section>
          <div class="">
      
              <style>
                /* .head-banner{padding-top: 43px;} */
                .banner-head{padding-top: 400px;}
                @media only screen and (max-width: 600px) {
                  .banner-head{padding-top: 175px;}
                  
                }
              </style>  
              <div class="head-banner">
              <?php 
              if(isset($row_adm['thumbnail_image']) && $row_adm['thumbnail_image'] !== '')
              { 
              ?>          
              <div style="background-image: url(admin/images/thumbnail/<?php echo $row_adm['thumbnail_image'] ?>);background-position: center;background-size: cover;background-repeat: no-repeat;">
                  <div class="banner-head">
                  </div>
              </div>
              <?php 
              }
              else
              {
              ?>
               <div style="background-image: url(images/black_th.jpg);background-position: center;background-size: cover;background-repeat: no-repeat;">
                  <div class="banner-head">
                  </div>
              </div>
               <?php
               }
               ?>
              
              </div>
                <style>
                  .profile img{width: 200px;
                  height: 200px;
                  border-radius: 50%;
                  }
                  .business{margin-top: -40px;position: relative;}
                  .profi-name{color: black;}
              
                  @media only screen and (max-width: 600px) {
                    .profile{text-align: center;}
                  .profile img {
                     width: 90px;
                     height: 90px;
                     border-radius: 50%;
                     border: 4px solid #ffbf00;
                     
                  }
                  .profi-name{color:black;}
                  .business {margin-top: -40px;}
                  .profi-name{text-align: center; padding-top: 7px;}
                  }
      
                  @media only screen and (min-width: 600px) {
                    .d-flex-nr{display: flex;}
                  }
    .btn-success1 {
    color: #fff;
    background-color: #198754;
    font-size: 17px;
    border-radius: 50%;
    width: 41px;
    height: 41px;
    text-align: center;
    padding: 7px;
   }
   .btn-success2 {
    color: #fff;
    background-color: #27cc64;
    font-size: 20px;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    text-align: center;
    padding: 7px;
   }
   .btn-success3 {
    color: #fff;
    background-color: #cf2929;
    font-size: 20px;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    text-align: center;
    padding: 7px;
   }
   .btn-success4 {
    color: #fff;
    background-color: #6086de;
    font-size: 20px;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    text-align: center;
    padding: 7px;
   }
              </style>
              <section class="business pb-2">
                  <div class="container">
                      <div class="row">
                       <div class="col-md-7 col-lg-7">
                          <div class="d-flex-nr">
                            <?php 
                            if(isset($row_adm['image']) && $row_adm['image'] !== '')
                            { 
                            ?>    
                            <div class="profile me-4"><img src="admin/images/admin-img/<?php echo $row_adm['image'] ?>" alt="" width="100%" style="border: 4px solid <?php echo $row_adm['thames_color'] ?>!important;"></div>
                            <?php
                            }
                            else
                            {
                            ?> 
                            <div class="profile me-4"><img src="images/profile.png" alt="" width="100%"></div>
                            <?php
                            }
                            ?>
                          
                          <div class="" style="margin-top: auto;">
                              <div class="profi-name">
                                  <h2><?php echo $row_adm['username'] ?><br><?php echo $row_adm['last_name'] ?></h2>
                                  <p><?php echo $row_adm['designation'] ?><br><?php echo $row_adm['company'] ?><br><?php echo $row_adm['business_category'] ?></p>
                                  <!-- <p>Leading Business Tycoon</p> -->
                              </div>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-5 col-lg-5 m-auto pt-2">
                          <div class="col-md-12 col-lg-12">
                              <div class="row">
                                  <div class="col-6 col-md-6 col-lg-6 p-2 text-center">
                                  <form action="bookmark.php" method="post" enctype="multipart/form-data" >
                                  <input type="hidden" value="http://web.delhi.in/<?php echo $row_profile['id'] ?>" name="cookie_value">
                                  <button type="submit" name="bookmark" class="btn btn-warning w-100" style="color: white;font-weight: 600;background-color:<?php echo $row_adm['thames_color'] ?>!important;">Bookmark</button>
                                  </form>
                                 </div>
                                  <div class="col-6 col-md-6 col-lg-6 p-2 text-center"><a type="button" class="btn btn-warning w-100" style="color: white;font-weight: 600;background-color:<?php echo $row_adm['thames_color'] ?>!important;">Add to Contacts</a></div>
                                </div>
                          </div>
                       </div>
                      </div>
                  </div>
              </section>
             
      
          </div>
      </section>
      </section>







<style>
        .widget-title {
    text-align: center;
    padding-top: 15px;
    margin-bottom: 25px;
    }
   .widget-title .box-title {
    color: #2b2a2a;
    font-size: 30px;
    letter-spacing: .05em;
    font-weight: 400;
    text-transform: capitalize;
    position: relative;
    margin-bottom: 15px;
   }
   .widget-title .box-title:before {
    position: absolute;
    content: "";
    height: 1px;
    background-color: #2b2a2a;
    top: -moz-calc(50% - .5px);
    top: -webkit-calc(50% - 0.5px);
    top: -ms-calc(50% - .5px);
    top: calc(50% - 0.5px);
    left: 0;
    right: 0;
    width: 100%;
   }
   .widget-title .box-title .title {
    padding: 0 24px;
    position: relative;
    z-index: 1;
    background-color: #ffffff;
    }
    .btn-size{font-size: 25px;
    border-radius: 10px;
    padding-top: 2px;
    padding-bottom: 4px;}
      </style>
      <section>
        <?php
        
        $proc=mysqli_fetch_assoc(mysqli_query($db, "select * from pro_connect where adminuser_id='$user_id'"));
        if($proc['connect_status']=="1")
        {
        ?>
        <div class="container pb-5 pt-5 text-center">
        <div class="widget-title no-des">   
            <h2 class="box-title"><span class="title"><span>Connect</span></span></h2>
        </div>
          <div class="row justify-content-center">

            <div class="col-2 col-lg-1">
              <div class=""><a href="tel:<?php echo $proc['phone'] ?>" class="btn btn-success btn-size"><i class="fa-solid fa-phone"></i></a></div>
            </div>

            <div class="col-2 col-lg-1">
              <div class=""><a href="http://wa.me/91<?php echo $proc['whatsapp'] ?>" class="btn btn-success btn-size"><i class="fa-brands fa-whatsapp"></i></a></div>
            </div>

            <div class="col-2 col-lg-1">
              <div class=""><a href="mailto:<?php echo $proc['email'] ?>" class="btn btn-success btn-size"><i class="fa-regular fa-envelope"></i></a></div>
            </div>

            <div class="col-2 col-lg-1">
              <div class=""><a class="btn btn-success btn-size"><i class="fa-solid fa-location-dot"></i></a></div>
            </div>

            <div class="col-2 col-lg-1">
              <div class=""><a href="index.php?file=<?php echo $proc['download_file'] ?>" class="btn btn-success btn-size"><i class="fa-solid fa-circle-down"></i></a></div>
            </div>

          </div>
        </div>
        <?php
        }
        ?>
      </section>
    

    
    
    
    



<style>
 .owl-carousel .owl-nav.disabled { display: block;}
.owl-carousel .owl-nav .owl-prev{
    position: absolute;
    top: 50%;
    margin-top: -18px;
    left: 0px;
    zoom: 1;
    opacity: 0;
    width: 36px;
    height: 36px;
    line-height: 32px;
    border: 1px solid rgba(0,0,0,.2)!important;
    color: rgb(0, 0, 0)!important;
    background-color: #fff;
    font-size: 18px!important;
    border-radius: 50%;
    -webkit-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
} 
.owl-carousel .owl-nav .owl-prev:hover{background-color: #FE9603 !important;color: rgb(255, 255, 255)!important;}

.owl-carousel .owl-nav .owl-next{
    position: absolute;
    top: 50%;
    margin-top: -18px;
    right: 0px;
    zoom: 1;
    opacity: 0;
    width: 36px;
    height: 36px;
    line-height: 32px;
    border: 1px solid rgba(0,0,0,.2)!important;
    color: rgb(0, 0, 0)!important;
    background-color: #fff;
    font-size: 18px!important;
    border-radius: 50%;
    -webkit-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}
.owl-carousel .owl-nav .owl-next:hover{background-color: #FE9603 !important;color: rgb(255, 255, 255)!important;}

.owl-carousel:hover .owl-next{
    opacity: 1;
}
.owl-carousel:hover .owl-prev{
    opacity: 1;
}

</style>
      <style>
      .shadow-effect {
            background: #fff;
            padding: 20px;
            border-radius: 4px;
            text-align: center;
      border:1px solid #ECECEC;
            box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02);
        }
    
        .testimonial-name {
            margin: 0px auto 0;
            display: table;
            width: auto;
            padding: 9px 35px;
            border-radius: 12px;
            text-align: center;
            color: #fff;
            box-shadow: 0 9px 18px rgba(0,0,0,0.12), 0 5px 7px rgba(0,0,0,0.05);
        }
        #achievements .item {
            text-align: center;
            padding: 50px 25px 50px 25px;
            
            opacity: .2;
            
            -webkit-transform: scale3d(0.8, 0.8, 1);
            transform: scale3d(0.8, 0.8, 1);
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        #achievements .owl-item.active.center .item {
            opacity: 1;
            -webkit-transform: scale3d(1.0, 1.0, 1);
            transform: scale3d(1.0, 1.0, 1);
        }
        #achievements img {
            transform-style: preserve-3d;
             /*max-width: 90px; */
            margin: 0 auto 17px;
            border-radius: 50%;
            margin-top: -60px;
            width: 150px;
            height: 150px;
        }
        #achievements.owl-carousel .owl-dots .owl-dot.active span,
    #achievements.owl-carousel .owl-dots .owl-dot:hover span {
            background: #FE9603;
            transform: translate3d(0px, -50%, 0px) scale(0.7);
        }
    #achievements.owl-carousel .owl-dots{
      display: inline-block;
      width: 100%;
      text-align: center;
    }
    #achievements.owl-carousel .owl-dots .owl-dot{
      display: inline-block;
    }
        #achievements.owl-carousel .owl-dots .owl-dot span {
            background: #FE9603;
            display: inline-block;
            height: 20px;
            margin: 0 2px 5px;
            transform: translate3d(0px, -50%, 0px) scale(0.3);
            transform-origin: 50% 50% 0;
            transition: all 250ms ease-out 0s;
            width: 20px;
        }
    </style>
    <section>
        <?php
        $sqlmbr =  "SELECT * FROM pro_member";
        $resmbr = mysqli_query($db, $sqlmbr);
        $rowmbr= mysqli_fetch_assoc($resmbr);
        if($rowmbr['member_status']=="1")
        {
        ?>
      <div class="container pb-5 pt-5 text-center">
        <div class="widget-title no-des">   
            <h2 class="box-title"><span class="title"><span>Member</span></span></h2>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <div id="achievements" class="owl-carousel">
    
                <?php
                 $sqlmbr =  "SELECT * FROM pro_member";
                 $resmbr = mysqli_query($db, $sqlmbr);
                while ($rowmbr= mysqli_fetch_assoc($resmbr)) {
                ?>
                <div class="item">
                  <div class="shadow-effect">
                    <img src="admin/images/member/<?php echo $rowmbr['logo_community'] ?>" alt="" width="100%" alt="">
                    <p><?php echo $rowmbr['name_community'] ?><br><?php echo $rowmbr['much_communities'] ?><br><?php echo $rowmbr['year_which'] ?></p>
                    <p><?php echo $rowmbr['area_region'] ?></p>
                    <div class="testimonial-name mt-2" style="color: white;font-weight: 600; <?php if(isset($row_adm['thames_color'])){ ?>background-color:<?php echo $row_adm['thames_color'] ?>!important; <?php } else { ?> background-color:#FE9603!important; <?php } ?>" ><?php echo $rowmbr['other'] ?></div>
                  </div>
                </div>
                <?php
                }
                ?>
                
               </div>
            </div>
          </div>
        <div>
        <?php
        }
        ?>
      </section>     
 






      <style>
        @media only screen and (max-width: 600px) {
          #pay .col-2{flex: 0 0 auto;width: 20%!important;}
          #pay h4{font-size: 14px;}
          #pay p{font-size: 12px;}
        }
      </style>
      <section id="pay">
        <?php
        $propay=mysqli_fetch_assoc(mysqli_query($db, "select * from pro_pay where adminuser_id='$user_id'"));
        if($propay['pay_status']=="1")
        {
        ?>
        <div class="container pb-5 pt-5">
        <div class="widget-title no-des">   
            <h2 class="box-title"><span class="title"><span>Pay</span></span></h2>
        </div>

        <!-- Nav tabs -->
    <style>
    @media only screen and (max-width: 600px) {
   .pay-li {width: max-content!important;}
    #pay-ul .nav-link{ margin: 4px!important;padding: 5px!important;padding-left: 8px!important;
    padding-right: 8px!important;}
    }
    #pay-ul .nav-link.active {
    color: #000000!important;
    background-color: #ffbf00!important;
    border-color: #ffbf00 #dee2e6 #fff!important;
    }
    </style>        
    <ul class="nav nav-tabs justify-content-center" id="pay-ul">
    <li class="nav-item pay-li">
    <a class="nav-link active" data-bs-toggle="tab" href="#paytm">Paytm</a>
    </li>
    <li class="nav-item pay-li">
    <a class="nav-link" data-bs-toggle="tab" href="#google">Google Pay</a>
    </li>
    <li class="nav-item pay-li">
    <a class="nav-link" data-bs-toggle="tab" href="#phonepe">Phone Pay</a>
     </li>
    <li class="nav-item pay-li">
    <a class="nav-link" data-bs-toggle="tab" href="#bank">Bank</a>
    </li>
   </ul>

   <!-- Tab panes -->
   <div class="tab-content">
   <div class="tab-pane container active" id="paytm">
   <div class="row">
       <div class="col-lg-3 p-2 border border-secondary">
       <p><b>Payment Link</b></p>
       <p class="text-muted"><?php echo $propay['paste_payment'] ?></p>
       </div>
       <div class="col-lg-3 p-2 border border-secondary">
       <p><b>UPI ID</b></p>
       <p class="text-muted"><?php echo $propay['upi_paytm'] ?></p>
       </div>
      <div class="col-lg-3 p-2 border border-secondary">
      <p><b>Paytm Number</b></p>
      <p class="text-muted"><?php echo $propay['number_paytm'] ?></p>
      </div>
      <div class="col-lg-3 p-2 border border-secondary">
      <p><b>QR Code</b></p>
      <span><a href="index.php?file=<?php echo $propay['qr_paytm'] ?>"><img src="admin/images/pay/paytm/<?php echo $propay['qr_paytm'] ?>" width="100px" height="100px" alt=""></a></span>
      </div>
  </div>
  </div>

   <div class="tab-pane container fade" id="google"> 
   <div class="row">
       <div class="col-lg-3 p-2 border border-secondary">
       <p><b>Payment Link</b></p>
       <p class="text-muted"><?php echo $propay['paste_googlepay'] ?></p>
       </div>
       <div class="col-lg-3 p-2 border border-secondary">
       <p><b>UPI ID</b></p>
       <p class="text-muted"><?php echo $propay['upi_googlepay'] ?></p>
       </div>
      <div class="col-lg-3 p-2 border border-secondary">
      <p><b>Paytm Number</b></p>
      <p class="text-muted"><?php echo $propay['number_googlepay'] ?></p>
      </div>
      <div class="col-lg-3 p-2 border border-secondary">
      <p><b>QR Code</b></p>
      <span><a href="index.php?file=<?php echo $propay['qr_google'] ?>"><img src="admin/images/pay/google/<?php echo $propay['qr_google'] ?>" width="100px" height="100px" alt=""></a></span>
      </div>
  </div>
  </div>

   <div class="tab-pane container fade" id="phonepe">
       <div class="row">
       <div class="col-lg-3 p-2 border border-secondary">
       <p><b>Payment Link</b></p>
       <p class="text-muted"><?php echo $propay['paste_phonepay'] ?></p>
       </div>
       <div class="col-lg-3 p-2 border border-secondary">
       <p><b>UPI ID</b></p>
       <p class="text-muted"><?php echo $propay['upi_phonepay'] ?></p>
       </div>
      <div class="col-lg-3 p-2 border border-secondary">
      <p><b>Paytm Number</b></p>
      <p class="text-muted"><?php echo $propay['number_phonepay'] ?></p>
      </div>
      <div class="col-lg-3 p-2 border border-secondary">
      <p><b>QR Code</b></p>
      <span><a href="index.php?file=<?php echo $propay['qr_phone'] ?>"><img src="admin/images/pay/phone/<?php echo $propay['qr_phone'] ?>"width="100px" height="100px" alt=""></a></span>
      </div>
      </div>
    </div>

    <div class="tab-pane container" id="bank">
    <div class="row">
    <div class="col-lg-4 p-2 border border-secondary">
    <p><b>Bank branch </b></p>
    <p class="text-muted"><?php echo $propay['bank_branch'] ?></p>
    </div>
    <div class="col-lg-4 p-2 border border-secondary">
    <p><b>Account number </b></p>
    <p class="text-muted"><?php echo $propay['account_number'] ?></p>
    </div>
    <div class="col-lg-4 p-2 border border-secondary">
    <p><b>Ifsc code </b></p>
    <p class="text-muted"><?php echo $propay['ifsc_code'] ?></p>
    </div>
    </div>
    </div>

    </div>
    </div>
    <?php
    }
    ?>
    </section>




     
        <section>
        <style>
        .btn-fallow {
        color: #fff;
        font-size: 26px;
        border-radius: 50%;
        width: 42px;
        height: 41px;
        text-align: center;
        padding: 0px;
        }
       .fallow-go{border: 2px solid red;border-radius: 50%;padding: 2px;margin: 3px;} .fallow-go a{background-color: #ff162c;}
       .fallow-fa{border: 2px solid #031543;border-radius: 50%;padding: 2px;margin: 3px;} .fallow-fa a{background-color: #031543;}
       .fallow-in{border: 2px solid #cf2aa4;border-radius: 50%;padding: 2px;margin: 3px;} .fallow-in a{background-color: #cf2aa4;}
       .fallow-tw{border: 2px solid #27a1d4;border-radius: 50%;padding: 2px;margin: 3px;} .fallow-tw a{background-color: #27a1d4;}
       .fallow-yo{border: 2px solid red;border-radius: 50%;padding: 2px;margin: 3px;} .fallow-yo a{background-color: #ff162c;}
       .fallow-li{border: 2px solid #004dbc;border-radius: 50%;padding: 2px;margin: 3px;} .fallow-li a{background-color: #004dbc;}
       </style>

        <?php
        $profollow=mysqli_fetch_assoc(mysqli_query($db, "select * from pro_follow where adminuser_id='$user_id'"));
        if($profollow['follow_status']=="1")
        {
        ?>
        <div class="container pb-5 pt-5 text-center">
        <div class="widget-title no-des">   
            <h2 class="box-title"><span class="title"><span>Follow</span></span></h2>
        </div>
          <div class="justify-content-center">
          <ul class="list-unstyled d-flex justify-content-center">
                    <li class="fallow-go"><a href="<?php echo $profollow['website'] ?>" class="btn btn-fallow "><i class="fa-brands fa-google"></i></a></li>
                    <li class="fallow-fa"><a href="<?php echo $profollow['facebook'] ?>" class="btn btn-fallow "><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="fallow-in"><a href="<?php echo $profollow['instagram'] ?>" class="btn btn-fallow "><i class="fa-brands fa-instagram"></i></a></li>
                    <li class="fallow-tw"><a href="<?php echo $profollow['twitter'] ?>" class="btn btn-fallow "><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="fallow-yo"><a href="<?php echo $profollow['youtube'] ?>" class="btn btn-fallow "><i class="fa-brands fa-youtube"></i></a></li>
                    <li class="fallow-li"><a href="<?php echo $profollow['linkedIn'] ?>" class="btn btn-fallow "><i class="fa-brands fa-linkedin-in"></i></a></li>
          </ul>
          </div>
        </div>
        <?php
        }
        ?>
        </section>
     
     
     
     
     
     
     <style>
        @media only screen and (max-width: 600px) {
          #bus-hours .col-3{flex: 0 0 auto;width: 33%!important;}
          #bus-hours h4{font-size: 14px;}
          #bus-hours p{font-size: 12px;}
        }
      </style>
      <section id="bus-hours" class="pb-5">
        <?php
        $probusiness=mysqli_fetch_assoc(mysqli_query($db, "select * from pro_business_hours where adminuser_id='$user_id'"));
        if($probusiness['hours_status']=="1")
        {
        ?>
        <div class="container pb-5 pt-5 text-center">
        <div class="widget-title no-des">   
            <h2 class="box-title"><span class="title"><span>Business Hours</span></span></h2>
        </div>
          <div class="row justify-content-center">

            <div class="col-3 col-lg-3">
               <div class="">
                <h4>Working Time</h4>
                <p><span><?php echo $probusiness['open_time']; ?> AM </span> To <span><?php echo $probusiness['closed_time']; ?> PM</span></p>
              </div>
            </div>

            <div class="col-3 col-lg-3">
              <div class="">
                <h4>Working Days</h4>
                  <?php 
                  if(isset($probusiness['monday'])){ echo "Monday | "; }
                  if(isset($probusiness['tuesday'])){ echo "Tuesday | "; }
                  if(isset($probusiness['wenesday'])){ echo "Wenesday | "; }
                  if(isset($probusiness['thursday'])){ echo "Thursday | "; }
                  if(isset($probusiness['friday'])){ echo "Friday | "; }
                  if(isset($probusiness['saturday'])){ echo "Saturday | "; }
                  ?>
              </div>
            </div>

            <div class="col-3 col-lg-3">
              <div>
                <h4>Closed Days</h4>
               <?php 
                  if($probusiness['monday']=="Closed"){ echo "Monday | "; }
                  if($probusiness['tuesday']=="Closed"){ echo "Tuesday | "; }
                  if($probusiness['wenesday']=="Closed"){ echo "Wenesday | "; }
                  if($probusiness['thursday']=="Closed"){ echo "Thursday | "; }
                  if($probusiness['friday']=="Closed"){ echo "Friday | "; }
                  if($probusiness['saturday']=="Closed"){ echo "Saturday | "; }
                  ?>
              </div>
           </div>


          </div>
        </div>
        <?php
        }
        ?>
      </section>


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
  "use strict";
  //  TESTIMONIALS CAROUSEL HOOK
  $('#achievements').owlCarousel({
      loop: true,
      center: true,
      items: 3,
      margin: 0,
      autoplay: true,
      dots:true,
      autoplayTimeout: 8500,
      smartSpeed: 450,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1170: {
          items: 3
        }
      }
  });
});</script>
</footer>