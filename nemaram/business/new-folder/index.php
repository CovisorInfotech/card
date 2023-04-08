<?php 
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

 ?>

<?php
// error_reporting(0);
 include("config.php"); 
 $admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where username='$admin_user'"));
$user_id=$row['id'];
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
 </head>   
 
    
<body class="">

<style>

@media only screen and (max-width: 600px) {
  /* #profile-head .img-pro{width: 20%;}
  #profile-head img{border-radius: 50%;} */
}
@media only screen and (min-width: 600px) {
  /* #profile-head .img-pro{width: 10%;}
  #profile-head img{border-radius: 50%;} */
  #profile-head{padding-left: 7%;
    padding-right: 7%;}
    .top-head-menu{float: right;}
}
#profile-head{position: fixed;z-index: 300; width: 100%; max-width: 100%;}
</style>  

<!-- <section id="profile-head" style="background-color: #2b2a2a;">
    <div class="container">
      <div class="row">
        <div class="col-9 col-md-9 col-lg-9">
          <div class="d-flex pt-2 pb-2">
          <div class="img-pro me-4"><img src="images/profil.jpg" alt="" width="100%"></div>
          <div class="name-pro" style="margin: auto auto auto 0px;color: white;"><h2 class="">Business Name</h2></div>
          </div>
        </div>
        <div class="col-3 col-md-3 col-lg-3 m-auto">
          <div class="float-end">
            <i class="fa-solid fa-ellipsis-vertical" style="color: white;font-size: 25px;"></i>
          </div>
        </div>
      </div>
    </div>
</section> -->








<style>
  @media only screen and (max-width: 600px) {
    .top-head-menu{
    position:fixed;
    bottom:0px;
    background-color: #f1f1f1;
    z-index: 200;
     width: 100%;
    padding: 10px;
    
 }


    #profil-top-menu .text{font-size: 11px;}
    #profil-top-menu li.nav-item {width: 20%;}
    #profil-top-menu .nav-link{padding: 0px!important;}
    #profil-top-menu .nav-link {color: #000;background-color: #f1f1f1!important; margin: 0px!important;}
    .nav-pills .nav-link.active, .show>.nav-link {color: #fe9603!important;}
  }

  @media only screen and (min-width: 600px) {
  
    #profil-top-menu .d-flex-nr{display: flex!important;}
    #profil-top-menu .nav-link{
    color: #000;
    background-color: #fff4d5;
    margin: 0px 3px 0px 3px;
}
.top-head-menu{
    padding: 10px;
 }
#profil-top-menu .text{ padding-left: 6px;}
  }

    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #000;
    background-color: #ffbf00!important;
}

#profil-top-menu p{margin: 0px;}
</style>
<!-- Nav pills -->
<section>
<div class="" id="profil-top-menu">
<div class="container" id="profile-head" style="background-color: #2b2a2a;"> 
<div class="row">

<div class="col-12 col-md-4 col-lg-4 m-auto">
  <div class="d-flex pt-2 pb-2">
    <?php 
    if(!isset($_SESSION['login_user']))
    { ?>
      <div class="me-2"><span class="text-white"><i class="fa-regular fa-user" style="font-size: 24px;"></i></span></div>
      <a href="login.php"><div class=""><span class="text-white">Sign In</span></div></a>
   <?php }
    else{
    ?>
    <div class="img-pro me-4" style="width: 11%;"><img src="admin/images/logo/<?php echo $row['image'] ?>" alt="" width="100%"></div>
    <div class="name-pro" style="margin: auto auto auto 0px;color: white;">
        <div class="btn-group">
         <span type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
         <?php echo $row['username'] ?>
        </span>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="admin/dashboard.php">Account</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout.php">Sign Out</a></li>
        </ul>
        </div>
    </div>
    <?php
    }
    ?>

  </div>
</div>

<div class="col-md-8 col-lg-8 p-0">  
<ul class="nav nav-pills justify-content-center top-head-menu">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="pill" href="#contact"><div class="d-flex-nr text-center"><p><i class="fa-regular fa-address-card m-auto"></i></p><p class="text">Contact</p></div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#business"><div class="d-flex-nr text-center"><p><i class="fa-solid fa-briefcase m-auto"></i></p><p class="text">Business</p></div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#about"><div class="d-flex-nr text-center"><p><i class="fa-solid fa-user m-auto"></i></p><p class="text">About</p></div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#blog"><div class="d-flex-nr text-center"><p><i class="fa-brands fa-blogger-b m-auto"></i></p><p class="text">Blog</p></div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#connections"><div class="d-flex-nr text-center"><p><i class="fa-solid fa-share-from-square m-auto"></i></p><p class="text">Connections</p></div></a>
  </li>
</ul>
</div>

<!-- <div class="col-2 col-md-1 col-lg-1 m-auto">
  <div class="float-end">
    <i class="fa-solid fa-ellipsis-vertical" style="color: white;font-size: 25px;"></i>
  </div>
</div> -->
</div>
</div>

<!-- Tab panes -->
<div class="tab-content">

  <div class="tab-pane active" id="contact">

    <section class="pb-4" style="background-color: white;">      
      <section>
          <div class="">
      
              <style>
                .head-banner{padding-top: 62px;}
                .banner-head{padding-top: 400px;}
                @media only screen and (max-width: 600px) {
                  .banner-head{padding-top: 175px;}
                  
                }
              </style>  
              <div class="head-banner">
              <?php 
              if(!isset($_SESSION['login_user']))
              { 
              ?>          
              <div style="background-image: url(images/black_th.jpg);background-position: center;background-size: cover;background-repeat: no-repeat;">
                  <div class="banner-head">
                  </div>
              </div>
              <?php 
              }
              else
              {
              ?>
               <div style="background-image: url(admin/images/thumbnail/<?php echo $row['thumbnail_image'] ?>);background-position: center;background-size: cover;background-repeat: no-repeat;">
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
                  border: 4px solid #ffbf00;}
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
                            if(!isset($_SESSION['login_user']))
                            { 
                            ?>    
                            <div class="profile me-4"><img src="images/profile.png" alt="" width="100%"></div>
                            <?php
                            }
                            else
                            {
                            ?>  
                            <div class="profile me-4"><img src="admin/images/admin-img/<?php echo $row['image'] ?>" alt="" width="100%"></div>
                            <?php
                            }
                            ?>
                          
                          <div class="" style="margin-top: auto;">
                              <div class="profi-name">
                                  <h2><?php echo $row['username'] ?><br><?php echo $row['last_name'] ?></h2>
                                  <p><?php echo $row['designation'] ?><br><?php echo $row['company'] ?><br><?php echo $row['business_category'] ?></p>
                                  <!-- <p>Leading Business Tycoon</p> -->
                              </div>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-5 col-lg-5 m-auto pt-2">
                          <div class="col-md-12 col-lg-12">
                              <div class="row">
                                  <div class="col-6 col-md-6 col-lg-6 p-2 text-center"><a type="button" class="btn btn-warning w-100">Bookmark</a></div>
                                  <div class="col-6 col-md-6 col-lg-6 p-2 text-center"><a type="button" class="btn btn-warning w-100">Add to Contacts</a></div>
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
                    <div class="testimonial-name mt-2"><?php echo $rowmbr['other'] ?></div>
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
    <!-- <li class="nav-item pay-li">
    <a class="nav-link" data-bs-toggle="tab" href="#other">Other</a>
    </li> -->
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
                <!-- <p><?php echo $probusiness['open_time'] ?></p> -->
              </div>
            </div>

            <div class="col-3 col-lg-3">
              <div>
                <h4>Closed Days</h4>
                <!-- <p><?php echo $probusiness['phonepe'] ?></p> -->
              </div>
           </div>


          </div>
        </div>
        <?php
        }
        ?>
      </section>
</div>






  <div class="tab-pane container fade pt-5" id="business">

    <style>
      a {
        color: #212529;
        text-decoration: none;
    }
    .img-box {
        border: 1px solid #a5a5a5;
        border-radius: 5px;
        padding: 8px;
        background-color: white;
    }
    .product-title{background-color: #fecb30;padding: 20px 0px 130px 0px;}
    .product-list{margin-top: -110px;}
    </style>
    <?php
            $sql_catpr =  "SELECT * FROM cat_product ";
            $res_catpr = mysqli_query($db, $sql_catpr);
            while ($row_catpr= mysqli_fetch_assoc($res_catpr)) {
        ?>
    <section class="pb-2 pt-5" id="products">
      <div class="product-title">
          <div><h2 class="section-heading text-center"><?php echo $row_catpr['product_category'] ?></h2></div>
          <div><center><div style="border-top: 2px solid white;width: 50%;"></div></center></div>
          <div class="text-center p-2"><a href="product-list.php">View More</a></div>
          </div>    
      <div class="container product-list">
          <div>
            <div class="carousel owl-carousel text-white pt-2 pb-2" id="owl-nr1">
            
            <?php
            $sql =  "SELECT * FROM products WHERE catagery='".$row_catpr['product_category']."'";
            $res = mysqli_query($db, $sql);
            while ($row= mysqli_fetch_assoc($res)) {
            ?>
           <div class="item text-center img-box">
              <a href="product-details.php?id=<?php echo $row['id'] ?>">
                <img class="" src="admin/images/products/<?php echo $row['product_image'] ?>" width="100%" data-src="">
                <p class="m-0"><span style="margin-top: 1%; font-size: 26px;"><?php echo $row['product'] ?></span> </p>
                <p class="m-0"><span style="font-size: 20px;">₹ <?php echo $row['price'] ?></span></p>
              </a>
            </div>
            <?php
            }
            ?>

          </div>
          </div>
         </div>
      </section>
        <?php
        }
        ?>
            
      <script>
        $('.carousel').owlCarousel({
    loop:true,
    margin:20,
    responsiveClass:true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:2,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
    })
    
    </script>



<!--<section>-->
<!--  <div class="container  pb-5">-->

<!--      <div><h2 class="text-center pb-4">Reviews</h2></div>-->

<!--      <style>-->
<!--          svg path{fill: #ffc71f;}-->
<!--      </style>-->
<!--      <div class="" id="reviews">-->
<!--          <div class="container">-->
<!--              <div class="row">-->
<!--                  <div class="col-6 col-lg-6"><div>-->
<!--                      <ul class="d-flex list-unstyled" style="color: #f5d538;font-size: 24px;">-->
<!--                          <li> <i class="fa-regular fa-star"></i></li>-->
<!--                          <li> <i class="fa-regular fa-star"></i></li>-->
<!--                          <li> <i class="fa-regular fa-star"></i></li>-->
<!--                          <li> <i class="fa-regular fa-star"></i></li>-->
<!--                          <li> <i class="fa-regular fa-star"></i></li>-->
<!--                      </ul> -->
<!--                     </div></div>-->
<!--                  <div class="col-6 col-lg-6"><div class="float-end d-flex"><button type="button" class="btn btn-outline-warning">Review</button> <button type="button" class="btn btn-outline-warning"><svg data-panel="dropdown" id="menu-icon-svg" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path id="menu-btn-path" data-panel="dropdown" d="M4.17 16.096C4.3766 15.5104 4.75974 15.0034 5.2666 14.6447C5.77346 14.2861 6.37909 14.0935 7 14.0935C7.62091 14.0935 8.22654 14.2861 8.7334 14.6447C9.24026 15.0034 9.6234 15.5104 9.83 16.096H20V18.096H9.83C9.6234 18.6815 9.24026 19.1885 8.7334 19.5472C8.22654 19.9058 7.62091 20.0984 7 20.0984C6.37909 20.0984 5.77346 19.9058 5.2666 19.5472C4.75974 19.1885 4.3766 18.6815 4.17 18.096H0V16.096H4.17ZM10.17 9.09596C10.3766 8.51042 10.7597 8.00339 11.2666 7.64475C11.7735 7.2861 12.3791 7.09351 13 7.09351C13.6209 7.09351 14.2265 7.2861 14.7334 7.64475C15.2403 8.00339 15.6234 8.51042 15.83 9.09596H20V11.096H15.83C15.6234 11.6815 15.2403 12.1885 14.7334 12.5472C14.2265 12.9058 13.6209 13.0984 13 13.0984C12.3791 13.0984 11.7735 12.9058 11.2666 12.5472C10.7597 12.1885 10.3766 11.6815 10.17 11.096H0V9.09596H10.17ZM4.17 2.09596C4.3766 1.51042 4.75974 1.00339 5.2666 0.644746C5.77346 0.286102 6.37909 0.0935059 7 0.0935059C7.62091 0.0935059 8.22654 0.286102 8.7334 0.644746C9.24026 1.00339 9.6234 1.51042 9.83 2.09596H20V4.09596H9.83C9.6234 4.68149 9.24026 5.18852 8.7334 5.54717C8.22654 5.90581 7.62091 6.09841 7 6.09841C6.37909 6.09841 5.77346 5.90581 5.2666 5.54717C4.75974 5.18852 4.3766 4.68149 4.17 4.09596H0V2.09596H4.17ZM7 4.09596C7.26522 4.09596 7.51957 3.9906 7.70711 3.80306C7.89464 3.61553 8 3.36117 8 3.09596C8 2.83074 7.89464 2.57639 7.70711 2.38885C7.51957 2.20131 7.26522 2.09596 7 2.09596C6.73478 2.09596 6.48043 2.20131 6.29289 2.38885C6.10536 2.57639 6 2.83074 6 3.09596C6 3.36117 6.10536 3.61553 6.29289 3.80306C6.48043 3.9906 6.73478 4.09596 7 4.09596ZM13 11.096C13.2652 11.096 13.5196 10.9906 13.7071 10.8031C13.8946 10.6155 14 10.3612 14 10.096C14 9.83074 13.8946 9.57639 13.7071 9.38885C13.5196 9.20131 13.2652 9.09596 13 9.09596C12.7348 9.09596 12.4804 9.20131 12.2929 9.38885C12.1054 9.57639 12 9.83074 12 10.096C12 10.3612 12.1054 10.6155 12.2929 10.8031C12.4804 10.9906 12.7348 11.096 13 11.096ZM7 18.096C7.26522 18.096 7.51957 17.9906 7.70711 17.8031C7.89464 17.6155 8 17.3612 8 17.096C8 16.8307 7.89464 16.5764 7.70711 16.3888C7.51957 16.2013 7.26522 16.096 7 16.096C6.73478 16.096 6.48043 16.2013 6.29289 16.3888C6.10536 16.5764 6 16.8307 6 17.096C6 17.3612 6.10536 17.6155 6.29289 17.8031C6.48043 17.9906 6.73478 18.096 7 18.096Z" fill="black"></path></svg></button></div></div>-->
                  <!-- <div><p class="text-center rev-p">Be the first to <a href="#">write a review</a></p></div> -->
      
<!--              </div>-->
<!--          </div>-->
<!--      </div>-->

<!--      <div class="carousel-1 owl-carousel pt-2 owl-loaded owl-drag">-->
 
<!--<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1316px, 0px, 0px); transition: all 1s ease 0s; width: 5264px;"><div class="owl-item cloned" style="width: 638px; margin-right: 20px;"><div class="items"><div>-->
<!--          <div class="card testimonial-card mb-3 p-0">-->
<!--              <div class="row g-0 p-3">-->
<!--                  <div class="col-12">-->
<!--                  <div class="row">-->
<!--                      <div class="col-2 col-md-2 col-lg-2">-->
<!--                          <div class="card-body p-0">-->
<!--                          <svg width="40" height="40" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-none d-md-block replaced-svg"><path d="M65.3107 61.6185C69.1005 57.0587 71.7363 51.6532 72.9952 45.8593C74.2541 40.0654 74.0991 34.0535 72.5431 28.3322C70.9872 22.6109 68.0761 17.3485 64.0563 12.9902C60.0364 8.6319 55.026 5.30588 49.4488 3.29352C43.8717 1.28116 37.8919 0.641655 32.0153 1.42911C26.1387 2.21656 20.5382 4.40781 15.6876 7.81748C10.837 11.2271 6.879 15.7549 4.14837 21.0178C1.41773 26.2807 -0.00517913 32.1238 1.41648e-05 38.0529C0.00200701 46.6721 3.03938 55.0153 8.57915 61.6185L8.52637 61.6633C8.71109 61.885 8.92221 62.075 9.11221 62.294C9.34971 62.5658 9.60569 62.8218 9.85111 63.0857C10.59 63.8879 11.35 64.6585 12.147 65.3816C12.3897 65.6032 12.6404 65.8091 12.8859 66.0202C13.7303 66.7485 14.5985 67.4399 15.4984 68.0838C15.6145 68.163 15.7201 68.2659 15.8362 68.3477V68.316C22.0168 72.6654 29.39 74.9997 36.9476 74.9997C44.5051 74.9997 51.8783 72.6654 58.0589 68.316V68.3477C58.175 68.2659 58.278 68.163 58.3967 68.0838C59.2939 67.4373 60.1648 66.7485 61.0092 66.0202C61.2547 65.8091 61.5054 65.6006 61.7481 65.3816C62.5451 64.6559 63.3051 63.8879 64.044 63.0857C64.2894 62.8218 64.5428 62.5658 64.7829 62.294C64.9703 62.075 65.184 61.885 65.3687 61.6607L65.3107 61.6185ZM36.9449 16.9415C39.2936 16.9415 41.5895 17.638 43.5424 18.9429C45.4952 20.2477 47.0173 22.1024 47.9161 24.2723C48.8149 26.4422 49.0501 28.8298 48.5919 31.1334C48.1337 33.437 47.0027 35.5529 45.3419 37.2137C43.6811 38.8744 41.5652 40.0054 39.2616 40.4636C36.9581 40.9218 34.5704 40.6867 32.4005 39.7879C30.2306 38.8891 28.3759 37.367 27.0711 35.4141C25.7662 33.4613 25.0698 31.1654 25.0698 28.8167C25.0698 25.6672 26.3209 22.6467 28.5479 20.4197C30.7749 18.1927 33.7954 16.9415 36.9449 16.9415V16.9415ZM15.852 61.6185C15.8978 58.1535 17.3059 54.8458 19.7718 52.4111C22.2376 49.9764 25.5629 48.6104 29.0281 48.6086H44.8617C48.327 48.6104 51.6522 49.9764 54.1181 52.4111C56.5839 54.8458 57.992 58.1535 58.0378 61.6185C52.2502 66.8338 44.7357 69.7201 36.9449 69.7201C29.1541 69.7201 21.6396 66.8338 15.852 61.6185V61.6185Z" fill="#01635D"></path></svg>-->
<!--                          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-block d-md-none replaced-svg"><path d="M43.5405 41.0791C46.067 38.0393 47.8242 34.4356 48.6635 30.573C49.5028 26.7104 49.3994 22.7025 48.3621 18.8883C47.3248 15.0741 45.3841 11.5658 42.7042 8.6603C40.0243 5.75476 36.684 3.53742 32.9659 2.19584C29.2478 0.854268 25.2613 0.427932 21.3435 0.952902C17.4258 1.47787 13.6922 2.9387 10.4584 5.21181C7.22469 7.48493 4.586 10.5034 2.76558 14.012C0.945152 17.5206 -0.00345275 21.416 9.4432e-06 25.3688C0.00133801 31.1149 2.02625 36.677 5.71943 41.0791L5.68425 41.109C5.8074 41.2568 5.94814 41.3835 6.07481 41.5295C6.23314 41.7107 6.40379 41.8814 6.5674 42.0573C7.06 42.5921 7.56668 43.1058 8.09798 43.5879C8.25983 43.7357 8.42696 43.8729 8.59058 44.0136C9.15355 44.4992 9.73235 44.9601 10.3323 45.3894C10.4097 45.4422 10.48 45.5108 10.5575 45.5653V45.5442C14.6779 48.4438 19.5933 50 24.6317 50C29.6701 50 34.5855 48.4438 38.7059 45.5442V45.5653C38.7834 45.5108 38.852 45.4422 38.9311 45.3894C39.5293 44.9583 40.1099 44.4992 40.6728 44.0136C40.8364 43.8729 41.0036 43.7339 41.1654 43.5879C41.6967 43.1041 42.2034 42.5921 42.696 42.0573C42.8596 41.8814 43.0285 41.7107 43.1886 41.5295C43.3135 41.3835 43.456 41.2568 43.5792 41.1073L43.5405 41.0791ZM24.6299 11.2945C26.1957 11.2945 27.7264 11.7588 29.0283 12.6287C30.3302 13.4986 31.3449 14.7351 31.9441 16.1817C32.5433 17.6283 32.7001 19.2201 32.3946 20.7558C32.0891 22.2915 31.3351 23.7021 30.2279 24.8093C29.1208 25.9165 27.7101 26.6705 26.1744 26.9759C24.6387 27.2814 23.0469 27.1246 21.6003 26.5254C20.1537 25.9262 18.9173 24.9115 18.0474 23.6096C17.1775 22.3077 16.7132 20.7771 16.7132 19.2113C16.7132 17.1116 17.5473 15.098 19.0319 13.6133C20.5166 12.1286 22.5303 11.2945 24.6299 11.2945V11.2945ZM10.568 41.0791C10.5985 38.7691 11.5373 36.564 13.1812 34.9409C14.8251 33.3177 17.0419 32.4071 19.3521 32.4059H29.9078C32.218 32.4071 34.4348 33.3177 36.0787 34.9409C37.7226 36.564 38.6614 38.7691 38.6919 41.0791C34.8335 44.5561 29.8238 46.4803 24.6299 46.4803C19.4361 46.4803 14.4264 44.5561 10.568 41.0791V41.0791Z" fill="#01635D"></path></svg>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <div class="col-10 col-md-10 col-lg-10 m-auto">-->
<!--                          <div>-->
<!--                              <h5 class="card-title sub-heading2 mb-0">Shruti Bansal</h5>-->
<!--                              <p class="mb-0">1 review</p>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                  </div>-->
<!--                  </div>-->

<!--                  <div class="col-12 p-2">-->
<!--                      <div class="">-->
                              
<!--                              <div class="text-start text-md-end">-->
<!--                                  <ul class="d-flex list-unstyled mb-0" style="color: #f5d538;">-->
<!--                                      <li><i class="fa-solid fa-star"></i></li>-->
<!--                                      <li><i class="fa-solid fa-star"></i></li>-->
<!--                                      <li><i class="fa-solid fa-star"></i></li>-->
<!--                                      <li><i class="fa-solid fa-star"></i></li>-->
<!--                                      <li class="pe-4"><i class="fa-solid fa-star"></i></li>-->
<!--                                      <li><span class="">2 months ago</span></li>-->
<!--                                  </ul>-->
<!--                              </div>-->
<!--                          <p class="card-text-nr pt-2">A really good place to get experience and enhance your skills especially for freshers. As digital marketing plays an important role in today's world so you should definitely give it a start.</p>-->
<!--                      </div>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div>-->
<!--      </div>-->
<!--  </div></div><div class="owl-item cloned" style="width: 638px; margin-right: 20px;"><div class="items"><div>-->
<!--      <div class="card testimonial-card mb-3 p-0">-->
<!--          <div class="row g-0 p-3">-->
<!--              <div class="col-12">-->
<!--              <div class="row">-->
<!--                  <div class="col-2 col-md-2 col-lg-2">-->
<!--                      <div class="card-body p-0">-->
<!--                      <svg width="40" height="40" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-none d-md-block replaced-svg"><path d="M65.3107 61.6185C69.1005 57.0587 71.7363 51.6532 72.9952 45.8593C74.2541 40.0654 74.0991 34.0535 72.5431 28.3322C70.9872 22.6109 68.0761 17.3485 64.0563 12.9902C60.0364 8.6319 55.026 5.30588 49.4488 3.29352C43.8717 1.28116 37.8919 0.641655 32.0153 1.42911C26.1387 2.21656 20.5382 4.40781 15.6876 7.81748C10.837 11.2271 6.879 15.7549 4.14837 21.0178C1.41773 26.2807 -0.00517913 32.1238 1.41648e-05 38.0529C0.00200701 46.6721 3.03938 55.0153 8.57915 61.6185L8.52637 61.6633C8.71109 61.885 8.92221 62.075 9.11221 62.294C9.34971 62.5658 9.60569 62.8218 9.85111 63.0857C10.59 63.8879 11.35 64.6585 12.147 65.3816C12.3897 65.6032 12.6404 65.8091 12.8859 66.0202C13.7303 66.7485 14.5985 67.4399 15.4984 68.0838C15.6145 68.163 15.7201 68.2659 15.8362 68.3477V68.316C22.0168 72.6654 29.39 74.9997 36.9476 74.9997C44.5051 74.9997 51.8783 72.6654 58.0589 68.316V68.3477C58.175 68.2659 58.278 68.163 58.3967 68.0838C59.2939 67.4373 60.1648 66.7485 61.0092 66.0202C61.2547 65.8091 61.5054 65.6006 61.7481 65.3816C62.5451 64.6559 63.3051 63.8879 64.044 63.0857C64.2894 62.8218 64.5428 62.5658 64.7829 62.294C64.9703 62.075 65.184 61.885 65.3687 61.6607L65.3107 61.6185ZM36.9449 16.9415C39.2936 16.9415 41.5895 17.638 43.5424 18.9429C45.4952 20.2477 47.0173 22.1024 47.9161 24.2723C48.8149 26.4422 49.0501 28.8298 48.5919 31.1334C48.1337 33.437 47.0027 35.5529 45.3419 37.2137C43.6811 38.8744 41.5652 40.0054 39.2616 40.4636C36.9581 40.9218 34.5704 40.6867 32.4005 39.7879C30.2306 38.8891 28.3759 37.367 27.0711 35.4141C25.7662 33.4613 25.0698 31.1654 25.0698 28.8167C25.0698 25.6672 26.3209 22.6467 28.5479 20.4197C30.7749 18.1927 33.7954 16.9415 36.9449 16.9415V16.9415ZM15.852 61.6185C15.8978 58.1535 17.3059 54.8458 19.7718 52.4111C22.2376 49.9764 25.5629 48.6104 29.0281 48.6086H44.8617C48.327 48.6104 51.6522 49.9764 54.1181 52.4111C56.5839 54.8458 57.992 58.1535 58.0378 61.6185C52.2502 66.8338 44.7357 69.7201 36.9449 69.7201C29.1541 69.7201 21.6396 66.8338 15.852 61.6185V61.6185Z" fill="#01635D"></path></svg>-->
<!--                      <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-block d-md-none replaced-svg"><path d="M43.5405 41.0791C46.067 38.0393 47.8242 34.4356 48.6635 30.573C49.5028 26.7104 49.3994 22.7025 48.3621 18.8883C47.3248 15.0741 45.3841 11.5658 42.7042 8.6603C40.0243 5.75476 36.684 3.53742 32.9659 2.19584C29.2478 0.854268 25.2613 0.427932 21.3435 0.952902C17.4258 1.47787 13.6922 2.9387 10.4584 5.21181C7.22469 7.48493 4.586 10.5034 2.76558 14.012C0.945152 17.5206 -0.00345275 21.416 9.4432e-06 25.3688C0.00133801 31.1149 2.02625 36.677 5.71943 41.0791L5.68425 41.109C5.8074 41.2568 5.94814 41.3835 6.07481 41.5295C6.23314 41.7107 6.40379 41.8814 6.5674 42.0573C7.06 42.5921 7.56668 43.1058 8.09798 43.5879C8.25983 43.7357 8.42696 43.8729 8.59058 44.0136C9.15355 44.4992 9.73235 44.9601 10.3323 45.3894C10.4097 45.4422 10.48 45.5108 10.5575 45.5653V45.5442C14.6779 48.4438 19.5933 50 24.6317 50C29.6701 50 34.5855 48.4438 38.7059 45.5442V45.5653C38.7834 45.5108 38.852 45.4422 38.9311 45.3894C39.5293 44.9583 40.1099 44.4992 40.6728 44.0136C40.8364 43.8729 41.0036 43.7339 41.1654 43.5879C41.6967 43.1041 42.2034 42.5921 42.696 42.0573C42.8596 41.8814 43.0285 41.7107 43.1886 41.5295C43.3135 41.3835 43.456 41.2568 43.5792 41.1073L43.5405 41.0791ZM24.6299 11.2945C26.1957 11.2945 27.7264 11.7588 29.0283 12.6287C30.3302 13.4986 31.3449 14.7351 31.9441 16.1817C32.5433 17.6283 32.7001 19.2201 32.3946 20.7558C32.0891 22.2915 31.3351 23.7021 30.2279 24.8093C29.1208 25.9165 27.7101 26.6705 26.1744 26.9759C24.6387 27.2814 23.0469 27.1246 21.6003 26.5254C20.1537 25.9262 18.9173 24.9115 18.0474 23.6096C17.1775 22.3077 16.7132 20.7771 16.7132 19.2113C16.7132 17.1116 17.5473 15.098 19.0319 13.6133C20.5166 12.1286 22.5303 11.2945 24.6299 11.2945V11.2945ZM10.568 41.0791C10.5985 38.7691 11.5373 36.564 13.1812 34.9409C14.8251 33.3177 17.0419 32.4071 19.3521 32.4059H29.9078C32.218 32.4071 34.4348 33.3177 36.0787 34.9409C37.7226 36.564 38.6614 38.7691 38.6919 41.0791C34.8335 44.5561 29.8238 46.4803 24.6299 46.4803C19.4361 46.4803 14.4264 44.5561 10.568 41.0791V41.0791Z" fill="#01635D"></path></svg>-->
<!--                      </div>-->
<!--                  </div>-->
<!--                  <div class="col-10 col-md-10 col-lg-10 m-auto">-->
<!--                      <div>-->
<!--                          <h5 class="card-title sub-heading2 mb-0">Shruti Bansal</h5>-->
<!--                          <p class="mb-0">1 review</p>-->
<!--                      </div>-->
<!--                  </div>-->
<!--              </div>-->
<!--              </div>-->

<!--              <div class="col-12 p-2">-->
<!--                  <div class="">-->
                          
<!--                          <div class="text-start text-md-end">-->
<!--                              <ul class="d-flex list-unstyled mb-0" style="color: #f5d538;">-->
<!--                                  <li><i class="fa-solid fa-star"></i></li>-->
<!--                                  <li><i class="fa-solid fa-star"></i></li>-->
<!--                                  <li><i class="fa-solid fa-star"></i></li>-->
<!--                                  <li><i class="fa-solid fa-star"></i></li>-->
<!--                                  <li class="pe-4"><i class="fa-solid fa-star"></i></li>-->
<!--                                  <li><span class="">2 months ago</span></li>-->
<!--                              </ul>-->
<!--                          </div>-->
<!--                      <p class="card-text-nr pt-2">A really good place to get experience and enhance your skills especially for freshers. As digital marketing plays an important role in today's world so you should definitely give it a start.</p>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div>-->
<!--      </div>-->
<!--  </div>-->
<!--</div></div><div class="owl-item active" style="width: 638px; margin-right: 20px;"><div class="items"><div>-->
<!--                  <div class="card testimonial-card mb-3 p-0">-->
<!--                      <div class="row g-0 p-3">-->
<!--                          <div class="col-12">-->
<!--                          <div class="row">-->
<!--                              <div class="col-2 col-md-2 col-lg-2">-->
<!--                                  <div class="card-body p-0">-->
<!--                                  <svg width="40" height="40" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-none d-md-block replaced-svg"><path d="M65.3107 61.6185C69.1005 57.0587 71.7363 51.6532 72.9952 45.8593C74.2541 40.0654 74.0991 34.0535 72.5431 28.3322C70.9872 22.6109 68.0761 17.3485 64.0563 12.9902C60.0364 8.6319 55.026 5.30588 49.4488 3.29352C43.8717 1.28116 37.8919 0.641655 32.0153 1.42911C26.1387 2.21656 20.5382 4.40781 15.6876 7.81748C10.837 11.2271 6.879 15.7549 4.14837 21.0178C1.41773 26.2807 -0.00517913 32.1238 1.41648e-05 38.0529C0.00200701 46.6721 3.03938 55.0153 8.57915 61.6185L8.52637 61.6633C8.71109 61.885 8.92221 62.075 9.11221 62.294C9.34971 62.5658 9.60569 62.8218 9.85111 63.0857C10.59 63.8879 11.35 64.6585 12.147 65.3816C12.3897 65.6032 12.6404 65.8091 12.8859 66.0202C13.7303 66.7485 14.5985 67.4399 15.4984 68.0838C15.6145 68.163 15.7201 68.2659 15.8362 68.3477V68.316C22.0168 72.6654 29.39 74.9997 36.9476 74.9997C44.5051 74.9997 51.8783 72.6654 58.0589 68.316V68.3477C58.175 68.2659 58.278 68.163 58.3967 68.0838C59.2939 67.4373 60.1648 66.7485 61.0092 66.0202C61.2547 65.8091 61.5054 65.6006 61.7481 65.3816C62.5451 64.6559 63.3051 63.8879 64.044 63.0857C64.2894 62.8218 64.5428 62.5658 64.7829 62.294C64.9703 62.075 65.184 61.885 65.3687 61.6607L65.3107 61.6185ZM36.9449 16.9415C39.2936 16.9415 41.5895 17.638 43.5424 18.9429C45.4952 20.2477 47.0173 22.1024 47.9161 24.2723C48.8149 26.4422 49.0501 28.8298 48.5919 31.1334C48.1337 33.437 47.0027 35.5529 45.3419 37.2137C43.6811 38.8744 41.5652 40.0054 39.2616 40.4636C36.9581 40.9218 34.5704 40.6867 32.4005 39.7879C30.2306 38.8891 28.3759 37.367 27.0711 35.4141C25.7662 33.4613 25.0698 31.1654 25.0698 28.8167C25.0698 25.6672 26.3209 22.6467 28.5479 20.4197C30.7749 18.1927 33.7954 16.9415 36.9449 16.9415V16.9415ZM15.852 61.6185C15.8978 58.1535 17.3059 54.8458 19.7718 52.4111C22.2376 49.9764 25.5629 48.6104 29.0281 48.6086H44.8617C48.327 48.6104 51.6522 49.9764 54.1181 52.4111C56.5839 54.8458 57.992 58.1535 58.0378 61.6185C52.2502 66.8338 44.7357 69.7201 36.9449 69.7201C29.1541 69.7201 21.6396 66.8338 15.852 61.6185V61.6185Z" fill="#01635D"></path></svg>-->
<!--                                  <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-block d-md-none replaced-svg"><path d="M43.5405 41.0791C46.067 38.0393 47.8242 34.4356 48.6635 30.573C49.5028 26.7104 49.3994 22.7025 48.3621 18.8883C47.3248 15.0741 45.3841 11.5658 42.7042 8.6603C40.0243 5.75476 36.684 3.53742 32.9659 2.19584C29.2478 0.854268 25.2613 0.427932 21.3435 0.952902C17.4258 1.47787 13.6922 2.9387 10.4584 5.21181C7.22469 7.48493 4.586 10.5034 2.76558 14.012C0.945152 17.5206 -0.00345275 21.416 9.4432e-06 25.3688C0.00133801 31.1149 2.02625 36.677 5.71943 41.0791L5.68425 41.109C5.8074 41.2568 5.94814 41.3835 6.07481 41.5295C6.23314 41.7107 6.40379 41.8814 6.5674 42.0573C7.06 42.5921 7.56668 43.1058 8.09798 43.5879C8.25983 43.7357 8.42696 43.8729 8.59058 44.0136C9.15355 44.4992 9.73235 44.9601 10.3323 45.3894C10.4097 45.4422 10.48 45.5108 10.5575 45.5653V45.5442C14.6779 48.4438 19.5933 50 24.6317 50C29.6701 50 34.5855 48.4438 38.7059 45.5442V45.5653C38.7834 45.5108 38.852 45.4422 38.9311 45.3894C39.5293 44.9583 40.1099 44.4992 40.6728 44.0136C40.8364 43.8729 41.0036 43.7339 41.1654 43.5879C41.6967 43.1041 42.2034 42.5921 42.696 42.0573C42.8596 41.8814 43.0285 41.7107 43.1886 41.5295C43.3135 41.3835 43.456 41.2568 43.5792 41.1073L43.5405 41.0791ZM24.6299 11.2945C26.1957 11.2945 27.7264 11.7588 29.0283 12.6287C30.3302 13.4986 31.3449 14.7351 31.9441 16.1817C32.5433 17.6283 32.7001 19.2201 32.3946 20.7558C32.0891 22.2915 31.3351 23.7021 30.2279 24.8093C29.1208 25.9165 27.7101 26.6705 26.1744 26.9759C24.6387 27.2814 23.0469 27.1246 21.6003 26.5254C20.1537 25.9262 18.9173 24.9115 18.0474 23.6096C17.1775 22.3077 16.7132 20.7771 16.7132 19.2113C16.7132 17.1116 17.5473 15.098 19.0319 13.6133C20.5166 12.1286 22.5303 11.2945 24.6299 11.2945V11.2945ZM10.568 41.0791C10.5985 38.7691 11.5373 36.564 13.1812 34.9409C14.8251 33.3177 17.0419 32.4071 19.3521 32.4059H29.9078C32.218 32.4071 34.4348 33.3177 36.0787 34.9409C37.7226 36.564 38.6614 38.7691 38.6919 41.0791C34.8335 44.5561 29.8238 46.4803 24.6299 46.4803C19.4361 46.4803 14.4264 44.5561 10.568 41.0791V41.0791Z" fill="#01635D"></path></svg>-->
<!--                                  </div>-->
<!--                              </div>-->
<!--                              <div class="col-10 col-md-10 col-lg-10 m-auto">-->
<!--                                  <div>-->
<!--                                      <h5 class="card-title sub-heading2 mb-0">Shruti Bansal</h5>-->
<!--                                      <p class="mb-0">1 review</p>-->
<!--                                  </div>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                          </div>-->

<!--                          <div class="col-12 p-2">-->
<!--                              <div class="">-->
                                      
<!--                                      <div class="text-start text-md-end">-->
<!--                                          <ul class="d-flex list-unstyled mb-0" style="color: #f5d538;">-->
<!--                                              <li><i class="fa-solid fa-star"></i></li>-->
<!--                                              <li><i class="fa-solid fa-star"></i></li>-->
<!--                                              <li><i class="fa-solid fa-star"></i></li>-->
<!--                                              <li><i class="fa-solid fa-star"></i></li>-->
<!--                                              <li class="pe-4"><i class="fa-solid fa-star"></i></li>-->
<!--                                              <li><span class="">2 months ago</span></li>-->
<!--                                          </ul>-->
<!--                                      </div>-->
<!--                                  <p class="card-text-nr pt-2">A really good place to get experience and enhance your skills especially for freshers. As digital marketing plays an important role in today's world so you should definitely give it a start.</p>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div></div><div class="owl-item active" style="width: 638px; margin-right: 20px;"><div class="items"><div>-->
<!--              <div class="card testimonial-card mb-3 p-0">-->
<!--                  <div class="row g-0 p-3">-->
<!--                      <div class="col-12">-->
<!--                      <div class="row">-->
<!--                          <div class="col-2 col-md-2 col-lg-2">-->
<!--                              <div class="card-body p-0">-->
<!--                              <svg width="40" height="40" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-none d-md-block replaced-svg"><path d="M65.3107 61.6185C69.1005 57.0587 71.7363 51.6532 72.9952 45.8593C74.2541 40.0654 74.0991 34.0535 72.5431 28.3322C70.9872 22.6109 68.0761 17.3485 64.0563 12.9902C60.0364 8.6319 55.026 5.30588 49.4488 3.29352C43.8717 1.28116 37.8919 0.641655 32.0153 1.42911C26.1387 2.21656 20.5382 4.40781 15.6876 7.81748C10.837 11.2271 6.879 15.7549 4.14837 21.0178C1.41773 26.2807 -0.00517913 32.1238 1.41648e-05 38.0529C0.00200701 46.6721 3.03938 55.0153 8.57915 61.6185L8.52637 61.6633C8.71109 61.885 8.92221 62.075 9.11221 62.294C9.34971 62.5658 9.60569 62.8218 9.85111 63.0857C10.59 63.8879 11.35 64.6585 12.147 65.3816C12.3897 65.6032 12.6404 65.8091 12.8859 66.0202C13.7303 66.7485 14.5985 67.4399 15.4984 68.0838C15.6145 68.163 15.7201 68.2659 15.8362 68.3477V68.316C22.0168 72.6654 29.39 74.9997 36.9476 74.9997C44.5051 74.9997 51.8783 72.6654 58.0589 68.316V68.3477C58.175 68.2659 58.278 68.163 58.3967 68.0838C59.2939 67.4373 60.1648 66.7485 61.0092 66.0202C61.2547 65.8091 61.5054 65.6006 61.7481 65.3816C62.5451 64.6559 63.3051 63.8879 64.044 63.0857C64.2894 62.8218 64.5428 62.5658 64.7829 62.294C64.9703 62.075 65.184 61.885 65.3687 61.6607L65.3107 61.6185ZM36.9449 16.9415C39.2936 16.9415 41.5895 17.638 43.5424 18.9429C45.4952 20.2477 47.0173 22.1024 47.9161 24.2723C48.8149 26.4422 49.0501 28.8298 48.5919 31.1334C48.1337 33.437 47.0027 35.5529 45.3419 37.2137C43.6811 38.8744 41.5652 40.0054 39.2616 40.4636C36.9581 40.9218 34.5704 40.6867 32.4005 39.7879C30.2306 38.8891 28.3759 37.367 27.0711 35.4141C25.7662 33.4613 25.0698 31.1654 25.0698 28.8167C25.0698 25.6672 26.3209 22.6467 28.5479 20.4197C30.7749 18.1927 33.7954 16.9415 36.9449 16.9415V16.9415ZM15.852 61.6185C15.8978 58.1535 17.3059 54.8458 19.7718 52.4111C22.2376 49.9764 25.5629 48.6104 29.0281 48.6086H44.8617C48.327 48.6104 51.6522 49.9764 54.1181 52.4111C56.5839 54.8458 57.992 58.1535 58.0378 61.6185C52.2502 66.8338 44.7357 69.7201 36.9449 69.7201C29.1541 69.7201 21.6396 66.8338 15.852 61.6185V61.6185Z" fill="#01635D"></path></svg>-->
<!--                              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-block d-md-none replaced-svg"><path d="M43.5405 41.0791C46.067 38.0393 47.8242 34.4356 48.6635 30.573C49.5028 26.7104 49.3994 22.7025 48.3621 18.8883C47.3248 15.0741 45.3841 11.5658 42.7042 8.6603C40.0243 5.75476 36.684 3.53742 32.9659 2.19584C29.2478 0.854268 25.2613 0.427932 21.3435 0.952902C17.4258 1.47787 13.6922 2.9387 10.4584 5.21181C7.22469 7.48493 4.586 10.5034 2.76558 14.012C0.945152 17.5206 -0.00345275 21.416 9.4432e-06 25.3688C0.00133801 31.1149 2.02625 36.677 5.71943 41.0791L5.68425 41.109C5.8074 41.2568 5.94814 41.3835 6.07481 41.5295C6.23314 41.7107 6.40379 41.8814 6.5674 42.0573C7.06 42.5921 7.56668 43.1058 8.09798 43.5879C8.25983 43.7357 8.42696 43.8729 8.59058 44.0136C9.15355 44.4992 9.73235 44.9601 10.3323 45.3894C10.4097 45.4422 10.48 45.5108 10.5575 45.5653V45.5442C14.6779 48.4438 19.5933 50 24.6317 50C29.6701 50 34.5855 48.4438 38.7059 45.5442V45.5653C38.7834 45.5108 38.852 45.4422 38.9311 45.3894C39.5293 44.9583 40.1099 44.4992 40.6728 44.0136C40.8364 43.8729 41.0036 43.7339 41.1654 43.5879C41.6967 43.1041 42.2034 42.5921 42.696 42.0573C42.8596 41.8814 43.0285 41.7107 43.1886 41.5295C43.3135 41.3835 43.456 41.2568 43.5792 41.1073L43.5405 41.0791ZM24.6299 11.2945C26.1957 11.2945 27.7264 11.7588 29.0283 12.6287C30.3302 13.4986 31.3449 14.7351 31.9441 16.1817C32.5433 17.6283 32.7001 19.2201 32.3946 20.7558C32.0891 22.2915 31.3351 23.7021 30.2279 24.8093C29.1208 25.9165 27.7101 26.6705 26.1744 26.9759C24.6387 27.2814 23.0469 27.1246 21.6003 26.5254C20.1537 25.9262 18.9173 24.9115 18.0474 23.6096C17.1775 22.3077 16.7132 20.7771 16.7132 19.2113C16.7132 17.1116 17.5473 15.098 19.0319 13.6133C20.5166 12.1286 22.5303 11.2945 24.6299 11.2945V11.2945ZM10.568 41.0791C10.5985 38.7691 11.5373 36.564 13.1812 34.9409C14.8251 33.3177 17.0419 32.4071 19.3521 32.4059H29.9078C32.218 32.4071 34.4348 33.3177 36.0787 34.9409C37.7226 36.564 38.6614 38.7691 38.6919 41.0791C34.8335 44.5561 29.8238 46.4803 24.6299 46.4803C19.4361 46.4803 14.4264 44.5561 10.568 41.0791V41.0791Z" fill="#01635D"></path></svg>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                          <div class="col-10 col-md-10 col-lg-10 m-auto">-->
<!--                              <div>-->
<!--                                  <h5 class="card-title sub-heading2 mb-0">Shruti Bansal</h5>-->
<!--                                  <p class="mb-0">1 review</p>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      </div>-->

<!--                      <div class="col-12 p-2">-->
<!--                          <div class="">-->
                                  
<!--                                  <div class="text-start text-md-end">-->
<!--                                      <ul class="d-flex list-unstyled mb-0" style="color: #f5d538;">-->
<!--                                          <li><i class="fa-solid fa-star"></i></li>-->
<!--                                          <li><i class="fa-solid fa-star"></i></li>-->
<!--                                          <li><i class="fa-solid fa-star"></i></li>-->
<!--                                          <li><i class="fa-solid fa-star"></i></li>-->
<!--                                          <li class="pe-4"><i class="fa-solid fa-star"></i></li>-->
<!--                                          <li><span class="">2 months ago</span></li>-->
<!--                                      </ul>-->
<!--                                  </div>-->
<!--                              <p class="card-text-nr pt-2">A really good place to get experience and enhance your skills especially for freshers. As digital marketing plays an important role in today's world so you should definitely give it a start.</p>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div>-->
<!--      </div></div><div class="owl-item" style="width: 638px; margin-right: 20px;"><div class="items"><div>-->
<!--          <div class="card testimonial-card mb-3 p-0">-->
<!--              <div class="row g-0 p-3">-->
<!--                  <div class="col-12">-->
<!--                  <div class="row">-->
<!--                      <div class="col-2 col-md-2 col-lg-2">-->
<!--                          <div class="card-body p-0">-->
<!--                          <svg width="40" height="40" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-none d-md-block replaced-svg"><path d="M65.3107 61.6185C69.1005 57.0587 71.7363 51.6532 72.9952 45.8593C74.2541 40.0654 74.0991 34.0535 72.5431 28.3322C70.9872 22.6109 68.0761 17.3485 64.0563 12.9902C60.0364 8.6319 55.026 5.30588 49.4488 3.29352C43.8717 1.28116 37.8919 0.641655 32.0153 1.42911C26.1387 2.21656 20.5382 4.40781 15.6876 7.81748C10.837 11.2271 6.879 15.7549 4.14837 21.0178C1.41773 26.2807 -0.00517913 32.1238 1.41648e-05 38.0529C0.00200701 46.6721 3.03938 55.0153 8.57915 61.6185L8.52637 61.6633C8.71109 61.885 8.92221 62.075 9.11221 62.294C9.34971 62.5658 9.60569 62.8218 9.85111 63.0857C10.59 63.8879 11.35 64.6585 12.147 65.3816C12.3897 65.6032 12.6404 65.8091 12.8859 66.0202C13.7303 66.7485 14.5985 67.4399 15.4984 68.0838C15.6145 68.163 15.7201 68.2659 15.8362 68.3477V68.316C22.0168 72.6654 29.39 74.9997 36.9476 74.9997C44.5051 74.9997 51.8783 72.6654 58.0589 68.316V68.3477C58.175 68.2659 58.278 68.163 58.3967 68.0838C59.2939 67.4373 60.1648 66.7485 61.0092 66.0202C61.2547 65.8091 61.5054 65.6006 61.7481 65.3816C62.5451 64.6559 63.3051 63.8879 64.044 63.0857C64.2894 62.8218 64.5428 62.5658 64.7829 62.294C64.9703 62.075 65.184 61.885 65.3687 61.6607L65.3107 61.6185ZM36.9449 16.9415C39.2936 16.9415 41.5895 17.638 43.5424 18.9429C45.4952 20.2477 47.0173 22.1024 47.9161 24.2723C48.8149 26.4422 49.0501 28.8298 48.5919 31.1334C48.1337 33.437 47.0027 35.5529 45.3419 37.2137C43.6811 38.8744 41.5652 40.0054 39.2616 40.4636C36.9581 40.9218 34.5704 40.6867 32.4005 39.7879C30.2306 38.8891 28.3759 37.367 27.0711 35.4141C25.7662 33.4613 25.0698 31.1654 25.0698 28.8167C25.0698 25.6672 26.3209 22.6467 28.5479 20.4197C30.7749 18.1927 33.7954 16.9415 36.9449 16.9415V16.9415ZM15.852 61.6185C15.8978 58.1535 17.3059 54.8458 19.7718 52.4111C22.2376 49.9764 25.5629 48.6104 29.0281 48.6086H44.8617C48.327 48.6104 51.6522 49.9764 54.1181 52.4111C56.5839 54.8458 57.992 58.1535 58.0378 61.6185C52.2502 66.8338 44.7357 69.7201 36.9449 69.7201C29.1541 69.7201 21.6396 66.8338 15.852 61.6185V61.6185Z" fill="#01635D"></path></svg>-->
<!--                          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-block d-md-none replaced-svg"><path d="M43.5405 41.0791C46.067 38.0393 47.8242 34.4356 48.6635 30.573C49.5028 26.7104 49.3994 22.7025 48.3621 18.8883C47.3248 15.0741 45.3841 11.5658 42.7042 8.6603C40.0243 5.75476 36.684 3.53742 32.9659 2.19584C29.2478 0.854268 25.2613 0.427932 21.3435 0.952902C17.4258 1.47787 13.6922 2.9387 10.4584 5.21181C7.22469 7.48493 4.586 10.5034 2.76558 14.012C0.945152 17.5206 -0.00345275 21.416 9.4432e-06 25.3688C0.00133801 31.1149 2.02625 36.677 5.71943 41.0791L5.68425 41.109C5.8074 41.2568 5.94814 41.3835 6.07481 41.5295C6.23314 41.7107 6.40379 41.8814 6.5674 42.0573C7.06 42.5921 7.56668 43.1058 8.09798 43.5879C8.25983 43.7357 8.42696 43.8729 8.59058 44.0136C9.15355 44.4992 9.73235 44.9601 10.3323 45.3894C10.4097 45.4422 10.48 45.5108 10.5575 45.5653V45.5442C14.6779 48.4438 19.5933 50 24.6317 50C29.6701 50 34.5855 48.4438 38.7059 45.5442V45.5653C38.7834 45.5108 38.852 45.4422 38.9311 45.3894C39.5293 44.9583 40.1099 44.4992 40.6728 44.0136C40.8364 43.8729 41.0036 43.7339 41.1654 43.5879C41.6967 43.1041 42.2034 42.5921 42.696 42.0573C42.8596 41.8814 43.0285 41.7107 43.1886 41.5295C43.3135 41.3835 43.456 41.2568 43.5792 41.1073L43.5405 41.0791ZM24.6299 11.2945C26.1957 11.2945 27.7264 11.7588 29.0283 12.6287C30.3302 13.4986 31.3449 14.7351 31.9441 16.1817C32.5433 17.6283 32.7001 19.2201 32.3946 20.7558C32.0891 22.2915 31.3351 23.7021 30.2279 24.8093C29.1208 25.9165 27.7101 26.6705 26.1744 26.9759C24.6387 27.2814 23.0469 27.1246 21.6003 26.5254C20.1537 25.9262 18.9173 24.9115 18.0474 23.6096C17.1775 22.3077 16.7132 20.7771 16.7132 19.2113C16.7132 17.1116 17.5473 15.098 19.0319 13.6133C20.5166 12.1286 22.5303 11.2945 24.6299 11.2945V11.2945ZM10.568 41.0791C10.5985 38.7691 11.5373 36.564 13.1812 34.9409C14.8251 33.3177 17.0419 32.4071 19.3521 32.4059H29.9078C32.218 32.4071 34.4348 33.3177 36.0787 34.9409C37.7226 36.564 38.6614 38.7691 38.6919 41.0791C34.8335 44.5561 29.8238 46.4803 24.6299 46.4803C19.4361 46.4803 14.4264 44.5561 10.568 41.0791V41.0791Z" fill="#01635D"></path></svg>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      <div class="col-10 col-md-10 col-lg-10 m-auto">-->
<!--                          <div>-->
<!--                              <h5 class="card-title sub-heading2 mb-0">Shruti Bansal</h5>-->
<!--                              <p class="mb-0">1 review</p>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                  </div>-->
<!--                  </div>-->

<!--                  <div class="col-12 p-2">-->
<!--                      <div class="">-->
                              
<!--                              <div class="text-start text-md-end">-->
<!--                                  <ul class="d-flex list-unstyled mb-0" style="color: #f5d538;">-->
<!--                                      <li><i class="fa-solid fa-star"></i></li>-->
<!--                                      <li><i class="fa-solid fa-star"></i></li>-->
<!--                                      <li><i class="fa-solid fa-star"></i></li>-->
<!--                                      <li><i class="fa-solid fa-star"></i></li>-->
<!--                                      <li class="pe-4"><i class="fa-solid fa-star"></i></li>-->
<!--                                      <li><span class="">2 months ago</span></li>-->
<!--                                  </ul>-->
<!--                              </div>-->
<!--                          <p class="card-text-nr pt-2">A really good place to get experience and enhance your skills especially for freshers. As digital marketing plays an important role in today's world so you should definitely give it a start.</p>-->
<!--                      </div>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div>-->
<!--      </div>-->
<!--  </div></div><div class="owl-item" style="width: 638px; margin-right: 20px;"><div class="items"><div>-->
<!--      <div class="card testimonial-card mb-3 p-0">-->
<!--          <div class="row g-0 p-3">-->
<!--              <div class="col-12">-->
<!--              <div class="row">-->
<!--                  <div class="col-2 col-md-2 col-lg-2">-->
<!--                      <div class="card-body p-0">-->
<!--                      <svg width="40" height="40" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-none d-md-block replaced-svg"><path d="M65.3107 61.6185C69.1005 57.0587 71.7363 51.6532 72.9952 45.8593C74.2541 40.0654 74.0991 34.0535 72.5431 28.3322C70.9872 22.6109 68.0761 17.3485 64.0563 12.9902C60.0364 8.6319 55.026 5.30588 49.4488 3.29352C43.8717 1.28116 37.8919 0.641655 32.0153 1.42911C26.1387 2.21656 20.5382 4.40781 15.6876 7.81748C10.837 11.2271 6.879 15.7549 4.14837 21.0178C1.41773 26.2807 -0.00517913 32.1238 1.41648e-05 38.0529C0.00200701 46.6721 3.03938 55.0153 8.57915 61.6185L8.52637 61.6633C8.71109 61.885 8.92221 62.075 9.11221 62.294C9.34971 62.5658 9.60569 62.8218 9.85111 63.0857C10.59 63.8879 11.35 64.6585 12.147 65.3816C12.3897 65.6032 12.6404 65.8091 12.8859 66.0202C13.7303 66.7485 14.5985 67.4399 15.4984 68.0838C15.6145 68.163 15.7201 68.2659 15.8362 68.3477V68.316C22.0168 72.6654 29.39 74.9997 36.9476 74.9997C44.5051 74.9997 51.8783 72.6654 58.0589 68.316V68.3477C58.175 68.2659 58.278 68.163 58.3967 68.0838C59.2939 67.4373 60.1648 66.7485 61.0092 66.0202C61.2547 65.8091 61.5054 65.6006 61.7481 65.3816C62.5451 64.6559 63.3051 63.8879 64.044 63.0857C64.2894 62.8218 64.5428 62.5658 64.7829 62.294C64.9703 62.075 65.184 61.885 65.3687 61.6607L65.3107 61.6185ZM36.9449 16.9415C39.2936 16.9415 41.5895 17.638 43.5424 18.9429C45.4952 20.2477 47.0173 22.1024 47.9161 24.2723C48.8149 26.4422 49.0501 28.8298 48.5919 31.1334C48.1337 33.437 47.0027 35.5529 45.3419 37.2137C43.6811 38.8744 41.5652 40.0054 39.2616 40.4636C36.9581 40.9218 34.5704 40.6867 32.4005 39.7879C30.2306 38.8891 28.3759 37.367 27.0711 35.4141C25.7662 33.4613 25.0698 31.1654 25.0698 28.8167C25.0698 25.6672 26.3209 22.6467 28.5479 20.4197C30.7749 18.1927 33.7954 16.9415 36.9449 16.9415V16.9415ZM15.852 61.6185C15.8978 58.1535 17.3059 54.8458 19.7718 52.4111C22.2376 49.9764 25.5629 48.6104 29.0281 48.6086H44.8617C48.327 48.6104 51.6522 49.9764 54.1181 52.4111C56.5839 54.8458 57.992 58.1535 58.0378 61.6185C52.2502 66.8338 44.7357 69.7201 36.9449 69.7201C29.1541 69.7201 21.6396 66.8338 15.852 61.6185V61.6185Z" fill="#01635D"></path></svg>-->
<!--                      <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-block d-md-none replaced-svg"><path d="M43.5405 41.0791C46.067 38.0393 47.8242 34.4356 48.6635 30.573C49.5028 26.7104 49.3994 22.7025 48.3621 18.8883C47.3248 15.0741 45.3841 11.5658 42.7042 8.6603C40.0243 5.75476 36.684 3.53742 32.9659 2.19584C29.2478 0.854268 25.2613 0.427932 21.3435 0.952902C17.4258 1.47787 13.6922 2.9387 10.4584 5.21181C7.22469 7.48493 4.586 10.5034 2.76558 14.012C0.945152 17.5206 -0.00345275 21.416 9.4432e-06 25.3688C0.00133801 31.1149 2.02625 36.677 5.71943 41.0791L5.68425 41.109C5.8074 41.2568 5.94814 41.3835 6.07481 41.5295C6.23314 41.7107 6.40379 41.8814 6.5674 42.0573C7.06 42.5921 7.56668 43.1058 8.09798 43.5879C8.25983 43.7357 8.42696 43.8729 8.59058 44.0136C9.15355 44.4992 9.73235 44.9601 10.3323 45.3894C10.4097 45.4422 10.48 45.5108 10.5575 45.5653V45.5442C14.6779 48.4438 19.5933 50 24.6317 50C29.6701 50 34.5855 48.4438 38.7059 45.5442V45.5653C38.7834 45.5108 38.852 45.4422 38.9311 45.3894C39.5293 44.9583 40.1099 44.4992 40.6728 44.0136C40.8364 43.8729 41.0036 43.7339 41.1654 43.5879C41.6967 43.1041 42.2034 42.5921 42.696 42.0573C42.8596 41.8814 43.0285 41.7107 43.1886 41.5295C43.3135 41.3835 43.456 41.2568 43.5792 41.1073L43.5405 41.0791ZM24.6299 11.2945C26.1957 11.2945 27.7264 11.7588 29.0283 12.6287C30.3302 13.4986 31.3449 14.7351 31.9441 16.1817C32.5433 17.6283 32.7001 19.2201 32.3946 20.7558C32.0891 22.2915 31.3351 23.7021 30.2279 24.8093C29.1208 25.9165 27.7101 26.6705 26.1744 26.9759C24.6387 27.2814 23.0469 27.1246 21.6003 26.5254C20.1537 25.9262 18.9173 24.9115 18.0474 23.6096C17.1775 22.3077 16.7132 20.7771 16.7132 19.2113C16.7132 17.1116 17.5473 15.098 19.0319 13.6133C20.5166 12.1286 22.5303 11.2945 24.6299 11.2945V11.2945ZM10.568 41.0791C10.5985 38.7691 11.5373 36.564 13.1812 34.9409C14.8251 33.3177 17.0419 32.4071 19.3521 32.4059H29.9078C32.218 32.4071 34.4348 33.3177 36.0787 34.9409C37.7226 36.564 38.6614 38.7691 38.6919 41.0791C34.8335 44.5561 29.8238 46.4803 24.6299 46.4803C19.4361 46.4803 14.4264 44.5561 10.568 41.0791V41.0791Z" fill="#01635D"></path></svg>-->
<!--                      </div>-->
<!--                  </div>-->
<!--                  <div class="col-10 col-md-10 col-lg-10 m-auto">-->
<!--                      <div>-->
<!--                          <h5 class="card-title sub-heading2 mb-0">Shruti Bansal</h5>-->
<!--                          <p class="mb-0">1 review</p>-->
<!--                      </div>-->
<!--                  </div>-->
<!--              </div>-->
<!--              </div>-->

<!--              <div class="col-12 p-2">-->
<!--                  <div class="">-->
                          
<!--                          <div class="text-start text-md-end">-->
<!--                              <ul class="d-flex list-unstyled mb-0" style="color: #f5d538;">-->
<!--                                  <li><i class="fa-solid fa-star"></i></li>-->
<!--                                  <li><i class="fa-solid fa-star"></i></li>-->
<!--                                  <li><i class="fa-solid fa-star"></i></li>-->
<!--                                  <li><i class="fa-solid fa-star"></i></li>-->
<!--                                  <li class="pe-4"><i class="fa-solid fa-star"></i></li>-->
<!--                                  <li><span class="">2 months ago</span></li>-->
<!--                              </ul>-->
<!--                          </div>-->
<!--                      <p class="card-text-nr pt-2">A really good place to get experience and enhance your skills especially for freshers. As digital marketing plays an important role in today's world so you should definitely give it a start.</p>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div>-->
<!--      </div>-->
<!--  </div>-->
<!--</div></div><div class="owl-item cloned" style="width: 638px; margin-right: 20px;"><div class="items"><div>-->
<!--                  <div class="card testimonial-card mb-3 p-0">-->
<!--                      <div class="row g-0 p-3">-->
<!--                          <div class="col-12">-->
<!--                          <div class="row">-->
<!--                              <div class="col-2 col-md-2 col-lg-2">-->
<!--                                  <div class="card-body p-0">-->
<!--                                  <svg width="40" height="40" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-none d-md-block replaced-svg"><path d="M65.3107 61.6185C69.1005 57.0587 71.7363 51.6532 72.9952 45.8593C74.2541 40.0654 74.0991 34.0535 72.5431 28.3322C70.9872 22.6109 68.0761 17.3485 64.0563 12.9902C60.0364 8.6319 55.026 5.30588 49.4488 3.29352C43.8717 1.28116 37.8919 0.641655 32.0153 1.42911C26.1387 2.21656 20.5382 4.40781 15.6876 7.81748C10.837 11.2271 6.879 15.7549 4.14837 21.0178C1.41773 26.2807 -0.00517913 32.1238 1.41648e-05 38.0529C0.00200701 46.6721 3.03938 55.0153 8.57915 61.6185L8.52637 61.6633C8.71109 61.885 8.92221 62.075 9.11221 62.294C9.34971 62.5658 9.60569 62.8218 9.85111 63.0857C10.59 63.8879 11.35 64.6585 12.147 65.3816C12.3897 65.6032 12.6404 65.8091 12.8859 66.0202C13.7303 66.7485 14.5985 67.4399 15.4984 68.0838C15.6145 68.163 15.7201 68.2659 15.8362 68.3477V68.316C22.0168 72.6654 29.39 74.9997 36.9476 74.9997C44.5051 74.9997 51.8783 72.6654 58.0589 68.316V68.3477C58.175 68.2659 58.278 68.163 58.3967 68.0838C59.2939 67.4373 60.1648 66.7485 61.0092 66.0202C61.2547 65.8091 61.5054 65.6006 61.7481 65.3816C62.5451 64.6559 63.3051 63.8879 64.044 63.0857C64.2894 62.8218 64.5428 62.5658 64.7829 62.294C64.9703 62.075 65.184 61.885 65.3687 61.6607L65.3107 61.6185ZM36.9449 16.9415C39.2936 16.9415 41.5895 17.638 43.5424 18.9429C45.4952 20.2477 47.0173 22.1024 47.9161 24.2723C48.8149 26.4422 49.0501 28.8298 48.5919 31.1334C48.1337 33.437 47.0027 35.5529 45.3419 37.2137C43.6811 38.8744 41.5652 40.0054 39.2616 40.4636C36.9581 40.9218 34.5704 40.6867 32.4005 39.7879C30.2306 38.8891 28.3759 37.367 27.0711 35.4141C25.7662 33.4613 25.0698 31.1654 25.0698 28.8167C25.0698 25.6672 26.3209 22.6467 28.5479 20.4197C30.7749 18.1927 33.7954 16.9415 36.9449 16.9415V16.9415ZM15.852 61.6185C15.8978 58.1535 17.3059 54.8458 19.7718 52.4111C22.2376 49.9764 25.5629 48.6104 29.0281 48.6086H44.8617C48.327 48.6104 51.6522 49.9764 54.1181 52.4111C56.5839 54.8458 57.992 58.1535 58.0378 61.6185C52.2502 66.8338 44.7357 69.7201 36.9449 69.7201C29.1541 69.7201 21.6396 66.8338 15.852 61.6185V61.6185Z" fill="#01635D"></path></svg>-->
<!--                                  <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-block d-md-none replaced-svg"><path d="M43.5405 41.0791C46.067 38.0393 47.8242 34.4356 48.6635 30.573C49.5028 26.7104 49.3994 22.7025 48.3621 18.8883C47.3248 15.0741 45.3841 11.5658 42.7042 8.6603C40.0243 5.75476 36.684 3.53742 32.9659 2.19584C29.2478 0.854268 25.2613 0.427932 21.3435 0.952902C17.4258 1.47787 13.6922 2.9387 10.4584 5.21181C7.22469 7.48493 4.586 10.5034 2.76558 14.012C0.945152 17.5206 -0.00345275 21.416 9.4432e-06 25.3688C0.00133801 31.1149 2.02625 36.677 5.71943 41.0791L5.68425 41.109C5.8074 41.2568 5.94814 41.3835 6.07481 41.5295C6.23314 41.7107 6.40379 41.8814 6.5674 42.0573C7.06 42.5921 7.56668 43.1058 8.09798 43.5879C8.25983 43.7357 8.42696 43.8729 8.59058 44.0136C9.15355 44.4992 9.73235 44.9601 10.3323 45.3894C10.4097 45.4422 10.48 45.5108 10.5575 45.5653V45.5442C14.6779 48.4438 19.5933 50 24.6317 50C29.6701 50 34.5855 48.4438 38.7059 45.5442V45.5653C38.7834 45.5108 38.852 45.4422 38.9311 45.3894C39.5293 44.9583 40.1099 44.4992 40.6728 44.0136C40.8364 43.8729 41.0036 43.7339 41.1654 43.5879C41.6967 43.1041 42.2034 42.5921 42.696 42.0573C42.8596 41.8814 43.0285 41.7107 43.1886 41.5295C43.3135 41.3835 43.456 41.2568 43.5792 41.1073L43.5405 41.0791ZM24.6299 11.2945C26.1957 11.2945 27.7264 11.7588 29.0283 12.6287C30.3302 13.4986 31.3449 14.7351 31.9441 16.1817C32.5433 17.6283 32.7001 19.2201 32.3946 20.7558C32.0891 22.2915 31.3351 23.7021 30.2279 24.8093C29.1208 25.9165 27.7101 26.6705 26.1744 26.9759C24.6387 27.2814 23.0469 27.1246 21.6003 26.5254C20.1537 25.9262 18.9173 24.9115 18.0474 23.6096C17.1775 22.3077 16.7132 20.7771 16.7132 19.2113C16.7132 17.1116 17.5473 15.098 19.0319 13.6133C20.5166 12.1286 22.5303 11.2945 24.6299 11.2945V11.2945ZM10.568 41.0791C10.5985 38.7691 11.5373 36.564 13.1812 34.9409C14.8251 33.3177 17.0419 32.4071 19.3521 32.4059H29.9078C32.218 32.4071 34.4348 33.3177 36.0787 34.9409C37.7226 36.564 38.6614 38.7691 38.6919 41.0791C34.8335 44.5561 29.8238 46.4803 24.6299 46.4803C19.4361 46.4803 14.4264 44.5561 10.568 41.0791V41.0791Z" fill="#01635D"></path></svg>-->
<!--                                  </div>-->
<!--                              </div>-->
<!--                              <div class="col-10 col-md-10 col-lg-10 m-auto">-->
<!--                                  <div>-->
<!--                                      <h5 class="card-title sub-heading2 mb-0">Shruti Bansal</h5>-->
<!--                                      <p class="mb-0">1 review</p>-->
<!--                                  </div>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                          </div>-->

<!--                          <div class="col-12 p-2">-->
<!--                              <div class="">-->
                                      
<!--                                      <div class="text-start text-md-end">-->
<!--                                          <ul class="d-flex list-unstyled mb-0" style="color: #f5d538;">-->
<!--                                              <li><i class="fa-solid fa-star"></i></li>-->
<!--                                              <li><i class="fa-solid fa-star"></i></li>-->
<!--                                              <li><i class="fa-solid fa-star"></i></li>-->
<!--                                              <li><i class="fa-solid fa-star"></i></li>-->
<!--                                              <li class="pe-4"><i class="fa-solid fa-star"></i></li>-->
<!--                                              <li><span class="">2 months ago</span></li>-->
<!--                                          </ul>-->
<!--                                      </div>-->
<!--                                  <p class="card-text-nr pt-2">A really good place to get experience and enhance your skills especially for freshers. As digital marketing plays an important role in today's world so you should definitely give it a start.</p>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div></div><div class="owl-item cloned" style="width: 638px; margin-right: 20px;"><div class="items"><div>-->
<!--              <div class="card testimonial-card mb-3 p-0">-->
<!--                  <div class="row g-0 p-3">-->
<!--                      <div class="col-12">-->
<!--                      <div class="row">-->
<!--                          <div class="col-2 col-md-2 col-lg-2">-->
<!--                              <div class="card-body p-0">-->
<!--                              <svg width="40" height="40" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-none d-md-block replaced-svg"><path d="M65.3107 61.6185C69.1005 57.0587 71.7363 51.6532 72.9952 45.8593C74.2541 40.0654 74.0991 34.0535 72.5431 28.3322C70.9872 22.6109 68.0761 17.3485 64.0563 12.9902C60.0364 8.6319 55.026 5.30588 49.4488 3.29352C43.8717 1.28116 37.8919 0.641655 32.0153 1.42911C26.1387 2.21656 20.5382 4.40781 15.6876 7.81748C10.837 11.2271 6.879 15.7549 4.14837 21.0178C1.41773 26.2807 -0.00517913 32.1238 1.41648e-05 38.0529C0.00200701 46.6721 3.03938 55.0153 8.57915 61.6185L8.52637 61.6633C8.71109 61.885 8.92221 62.075 9.11221 62.294C9.34971 62.5658 9.60569 62.8218 9.85111 63.0857C10.59 63.8879 11.35 64.6585 12.147 65.3816C12.3897 65.6032 12.6404 65.8091 12.8859 66.0202C13.7303 66.7485 14.5985 67.4399 15.4984 68.0838C15.6145 68.163 15.7201 68.2659 15.8362 68.3477V68.316C22.0168 72.6654 29.39 74.9997 36.9476 74.9997C44.5051 74.9997 51.8783 72.6654 58.0589 68.316V68.3477C58.175 68.2659 58.278 68.163 58.3967 68.0838C59.2939 67.4373 60.1648 66.7485 61.0092 66.0202C61.2547 65.8091 61.5054 65.6006 61.7481 65.3816C62.5451 64.6559 63.3051 63.8879 64.044 63.0857C64.2894 62.8218 64.5428 62.5658 64.7829 62.294C64.9703 62.075 65.184 61.885 65.3687 61.6607L65.3107 61.6185ZM36.9449 16.9415C39.2936 16.9415 41.5895 17.638 43.5424 18.9429C45.4952 20.2477 47.0173 22.1024 47.9161 24.2723C48.8149 26.4422 49.0501 28.8298 48.5919 31.1334C48.1337 33.437 47.0027 35.5529 45.3419 37.2137C43.6811 38.8744 41.5652 40.0054 39.2616 40.4636C36.9581 40.9218 34.5704 40.6867 32.4005 39.7879C30.2306 38.8891 28.3759 37.367 27.0711 35.4141C25.7662 33.4613 25.0698 31.1654 25.0698 28.8167C25.0698 25.6672 26.3209 22.6467 28.5479 20.4197C30.7749 18.1927 33.7954 16.9415 36.9449 16.9415V16.9415ZM15.852 61.6185C15.8978 58.1535 17.3059 54.8458 19.7718 52.4111C22.2376 49.9764 25.5629 48.6104 29.0281 48.6086H44.8617C48.327 48.6104 51.6522 49.9764 54.1181 52.4111C56.5839 54.8458 57.992 58.1535 58.0378 61.6185C52.2502 66.8338 44.7357 69.7201 36.9449 69.7201C29.1541 69.7201 21.6396 66.8338 15.852 61.6185V61.6185Z" fill="#01635D"></path></svg>-->
<!--                              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" id="" class="topicon d-block d-md-none replaced-svg"><path d="M43.5405 41.0791C46.067 38.0393 47.8242 34.4356 48.6635 30.573C49.5028 26.7104 49.3994 22.7025 48.3621 18.8883C47.3248 15.0741 45.3841 11.5658 42.7042 8.6603C40.0243 5.75476 36.684 3.53742 32.9659 2.19584C29.2478 0.854268 25.2613 0.427932 21.3435 0.952902C17.4258 1.47787 13.6922 2.9387 10.4584 5.21181C7.22469 7.48493 4.586 10.5034 2.76558 14.012C0.945152 17.5206 -0.00345275 21.416 9.4432e-06 25.3688C0.00133801 31.1149 2.02625 36.677 5.71943 41.0791L5.68425 41.109C5.8074 41.2568 5.94814 41.3835 6.07481 41.5295C6.23314 41.7107 6.40379 41.8814 6.5674 42.0573C7.06 42.5921 7.56668 43.1058 8.09798 43.5879C8.25983 43.7357 8.42696 43.8729 8.59058 44.0136C9.15355 44.4992 9.73235 44.9601 10.3323 45.3894C10.4097 45.4422 10.48 45.5108 10.5575 45.5653V45.5442C14.6779 48.4438 19.5933 50 24.6317 50C29.6701 50 34.5855 48.4438 38.7059 45.5442V45.5653C38.7834 45.5108 38.852 45.4422 38.9311 45.3894C39.5293 44.9583 40.1099 44.4992 40.6728 44.0136C40.8364 43.8729 41.0036 43.7339 41.1654 43.5879C41.6967 43.1041 42.2034 42.5921 42.696 42.0573C42.8596 41.8814 43.0285 41.7107 43.1886 41.5295C43.3135 41.3835 43.456 41.2568 43.5792 41.1073L43.5405 41.0791ZM24.6299 11.2945C26.1957 11.2945 27.7264 11.7588 29.0283 12.6287C30.3302 13.4986 31.3449 14.7351 31.9441 16.1817C32.5433 17.6283 32.7001 19.2201 32.3946 20.7558C32.0891 22.2915 31.3351 23.7021 30.2279 24.8093C29.1208 25.9165 27.7101 26.6705 26.1744 26.9759C24.6387 27.2814 23.0469 27.1246 21.6003 26.5254C20.1537 25.9262 18.9173 24.9115 18.0474 23.6096C17.1775 22.3077 16.7132 20.7771 16.7132 19.2113C16.7132 17.1116 17.5473 15.098 19.0319 13.6133C20.5166 12.1286 22.5303 11.2945 24.6299 11.2945V11.2945ZM10.568 41.0791C10.5985 38.7691 11.5373 36.564 13.1812 34.9409C14.8251 33.3177 17.0419 32.4071 19.3521 32.4059H29.9078C32.218 32.4071 34.4348 33.3177 36.0787 34.9409C37.7226 36.564 38.6614 38.7691 38.6919 41.0791C34.8335 44.5561 29.8238 46.4803 24.6299 46.4803C19.4361 46.4803 14.4264 44.5561 10.568 41.0791V41.0791Z" fill="#01635D"></path></svg>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                          <div class="col-10 col-md-10 col-lg-10 m-auto">-->
<!--                              <div>-->
<!--                                  <h5 class="card-title sub-heading2 mb-0">Shruti Bansal</h5>-->
<!--                                  <p class="mb-0">1 review</p>-->
<!--                              </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      </div>-->

<!--                      <div class="col-12 p-2">-->
<!--                          <div class="">-->
                                  
<!--                                  <div class="text-start text-md-end">-->
<!--                                      <ul class="d-flex list-unstyled mb-0" style="color: #f5d538;">-->
<!--                                          <li><i class="fa-solid fa-star"></i></li>-->
<!--                                          <li><i class="fa-solid fa-star"></i></li>-->
<!--                                          <li><i class="fa-solid fa-star"></i></li>-->
<!--                                          <li><i class="fa-solid fa-star"></i></li>-->
<!--                                          <li class="pe-4"><i class="fa-solid fa-star"></i></li>-->
<!--                                          <li><span class="">2 months ago</span></li>-->
<!--                                      </ul>-->
<!--                                  </div>-->
<!--                              <p class="card-text-nr pt-2">A really good place to get experience and enhance your skills especially for freshers. As digital marketing plays an important role in today's world so you should definitely give it a start.</p>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div>-->
<!--      </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>-->
<!-- </div>-->
<!-- </section>-->
<!-- <script>-->
<!--  $(".carousel-1").owlCarousel({-->
<!--    margin: 20,-->
<!--    loop: true,-->
<!--    autoplay: true,-->
<!--    smartSpeed: 1000,-->
<!--    autoplayTimeout: 2000,-->
<!--    autoplayHoverPause: true,-->
<!--    responsive: {-->
<!--      0:{-->
<!--        items:1,-->
<!--        nav: false-->
<!--      },-->
<!--      600:{-->
<!--        items:1,-->
<!--        nav: false-->
<!--      },-->
<!--      1000:{-->
<!--        items:2,-->
<!--        nav: false-->
<!--      }-->
<!--    }-->
<!--  });-->
<!--</script>-->




</div>






  <div class="tab-pane container fade pt-5" id="about">
    

    <style>
      .heading{font-weight: 600;
        font-size: 22px;}
    </style>
    <section>
      <div class="pt-5 pb-4">
        <div class="text-center"><h2>About US</h2></div>
        <div style="background-color: #fafafa;" class="p-4 card">
        <div class="row">
          <?php
            $sql =  "SELECT * FROM adout ";
            $res = mysqli_query($db, $sql);
            while ($row= mysqli_fetch_assoc($res)) {
          ?>
          <div class="col-md-4 col-lg-4 p-2 border-bottom border-secondary border-line">
            <div>
              <div><span class="heading"><?php echo $row['title_name'] ?></span></div>
              <div>
                  <p><?php echo $row['adout_name'] ?></p>
              </div>
            </div>
          </div>
          <?php
          }
          ?>


    
        </div>
        </div>
      </div>
    </section>






  <style>
    .count-box{    border: 2px dashed #fe9603;
      padding: 12px;}
    .count-img{width: 25%;}
    .count{width: 75%;padding-left: 13px;}
    .count-img img{    border-radius: 50%;
      border: 4px solid rgb(255, 255, 255);}
     .count-img .img-border:hover{border: 2px solid rgb(255 139 0);border-radius: 50%;}
     .count-img .img-border{border: 2px solid rgb(0, 0, 0);border-radius: 50%;}
  </style>
  <section class="pt-4 pb-4">
    <div class="">
        <div class="bg-white">
            <div class="p-4">
             <h2 class="text-center">Number Counts</h2>   
             <div class="company-count">
              <div class="row pt-3">
  
              <div class="col-12 col-md-3 col-lg-3 pb-4"> 
              <div class="count-box d-flex">
              <div class="count-img"><div class="img-border"><img src="images/profil.jpg" alt="" width="100%"></div></div>  
              <div class="count">
                <h2 data-count="100" class="counter">100</h2>
                <p class="m-0">Speaker</p>
              </div>
              </div>
              </div>
  
              <div class="col-12 col-md-3 col-lg-3 pb-4">
              <div class="count-box d-flex">
              <div class="count-img"><div class="img-border"><img src="images/profil.jpg" alt="" width="100%"></div></div> 
              <div class="count">
                <h2 data-count="30+" class="counter">30+</h2>
                <p class="m-0">Governments &amp; Ministers</p>
              </div>
              </div>
              </div>
  
              <div class="col-12 col-md-3 col-lg-3 pb-4">
              <div class="count-box d-flex"> 
              <div class="count-img"><div class="img-border"><img src="images/profil.jpg" alt="" width="100%"></div></div>   
              <div class="count">
                <h2 data-count="600+" class="counter">600+</h2>
                <p class="m-0">Delegates</p>
              </div>
              </div>
              </div>
  
  
              <div class="col-12 col-md-3 col-lg-3 pb-4">
              <div class="count-box d-flex"> 
              <div class="count-img"><div class="img-border"><img src="images/profil.jpg" alt="" width="100%"></div></div>   
              <div class="count">
                <h2 data-count="2,500+" class="counter">2,500+</h2>
                <p class="m-0">VISITORS</p>
              </div>
              </div>
              </div>
  
            </div> 
          </div>
             </div>
        </div>
     </div>
  </section> 
  
  
  
  
  

  <style>

    .testimonials-card .owl-item .active {
        opacity: 1;
        transform: scale(1);
    }
    
      .carousel-1 img{
        width: 90px!important;
        height: 90px!important;
        border-radius: 50%;}
        .card-text{border: 0;
        box-shadow: 0 0 35px rgb(140 152 164 / 20%);
        border-radius: 0.25rem;
        margin-top: -45px;
        position: relative;
    
        }
        
       
    </style>
    
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
            background: #FE9603;
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
            /* max-width: 90px; */
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
    <style>
      @media only screen and (min-width: 600px) {
      .member{margin-top: 70px;}
      }
    </style>
    <section class="testimonials member pt-4 pb-4">
      <div class="">
        <h2 class="text-center">Member of Communities</h2>
          <div class="row">
            <div class="col-sm-12">
              <div id="achievements" class="owl-carousel">
    
                <!--TESTIMONIAL 1 -->
                <div class="item">
                  <div class="shadow-effect">
                    <img class="img-circle" src="images/profil.jpg" alt="" width="100%" alt="">
                    <p>I am a Proud member of BNI since Dec 2021<br>2022<br>Chapter Amigos</p>
                    <div class="testimonial-name">North West Region</div>
                  </div>
                  
                </div>
                <!--END OF TESTIMONIAL 1 -->
                <!--TESTIMONIAL 2 -->
                <div class="item">
                  <div class="shadow-effect">
                    <img class="img-circle" src="images/profil.jpg" alt="" width="100%" alt="">
                    <p>I am a Proud member of BNI since Dec 2021<br>2022<br>Chapter Amigos</p>
                    <div class="testimonial-name">North West Region</div>
                  </div>
                </div>
                <!--END OF TESTIMONIAL 2 -->
                <!--TESTIMONIAL 3 -->
                <div class="item">
                  <div class="shadow-effect">
                    <img class="img-circle" src="images/profil.jpg" alt="" width="100%" alt="">
                    <p>I am a Proud member of BNI since Dec 2021<br>2022<br>Chapter Amigos</p>
                    <div class="testimonial-name">North West Region</div>
                  </div>
                </div>
               </div>
            </div>
          </div>
          </div>
        </section>
    
    
    
    
    
    
    
    
    
    
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
            background: #FE9603;
            padding: 9px 35px;
            border-radius: 12px;
            text-align: center;
            color: #fff;
            box-shadow: 0 9px 18px rgba(0,0,0,0.12), 0 5px 7px rgba(0,0,0,0.05);
        }
        #customers-testimonials .item {
            text-align: center;
            padding: 50px 25px 50px 25px;
            
            opacity: .2;
            
            -webkit-transform: scale3d(0.8, 0.8, 1);
            transform: scale3d(0.8, 0.8, 1);
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        #customers-testimonials .owl-item.active.center .item {
            opacity: 1;
            -webkit-transform: scale3d(1.0, 1.0, 1);
            transform: scale3d(1.0, 1.0, 1);
        }
        #customers-testimonials img {
            transform-style: preserve-3d;
            max-width: 90px;
            margin: 0 auto 17px;
            border-radius: 50%;
            margin-top: -60px;
        }
        #customers-testimonials.owl-carousel .owl-dots .owl-dot.active span,
    #customers-testimonials.owl-carousel .owl-dots .owl-dot:hover span {
            background: #FE9603;
            transform: translate3d(0px, -50%, 0px) scale(0.7);
        }
    #customers-testimonials.owl-carousel .owl-dots{
      display: inline-block;
      width: 100%;
      text-align: center;
    }
    #customers-testimonials.owl-carousel .owl-dots .owl-dot{
      display: inline-block;
    }
        #customers-testimonials.owl-carousel .owl-dots .owl-dot span {
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
    <section class="testimonials pt-4 pb-4">
      <div class="">
        <h2 class="text-center">Achievements</h2>
          <div class="row">
            <div class="col-sm-12">
              <div id="customers-testimonials" class="owl-carousel">
    
                <!--TESTIMONIAL 1 -->
                <div class="item">
                  <div class="shadow-effect">
                    <img class="img-circle" src="images/profil.jpg" alt="" width="100%" alt="">
                    <p>Awarded and Featured in Taare Zameen Par Magzine<br>January Issue<br>2022</p>
                    <div class="testimonial-name">Umeedon ke Champ</div>
                  </div>
                </div>
                <!--END OF TESTIMONIAL 1 -->
                <!--TESTIMONIAL 2 -->
                <div class="item">
                  <div class="shadow-effect">
                    <img class="img-circle" src="images/profil.jpg" alt="" width="100%" alt="">
                    <p>Awarded and Featured in Taare Zameen Par Magzine<br>January Issue<br>2022</p>
                    <div class="testimonial-name">Umeedon ke Champ</div>
                  </div>
                </div>
                <!--END OF TESTIMONIAL 2 -->
                <!--TESTIMONIAL 3 -->
                <div class="item">
                  <div class="shadow-effect">
                    <img class="img-circle" src="images/profil.jpg" alt="" width="100%" alt="">
                    <p>Awarded and Featured in Taare Zameen Par Magzine<br>January Issue<br>2022</p>
                    <div class="testimonial-name">Umeedon ke Champ</div>
                  </div>
                </div>
                <!--END OF TESTIMONIAL 3 -->
                <!--TESTIMONIAL 4 -->
                <div class="item">
                  <div class="shadow-effect">
                    <img class="img-circle" src="images/profil.jpg" alt="" width="100%" alt="">
                    <p>Awarded and Featured in Taare Zameen Par Magzine<br>January Issue<br>2022</p>
                    <div class="testimonial-name">Umeedon ke Champ</div>
                  </div>
                </div>
                <!--END OF TESTIMONIAL 4 -->
               
              </div>
            </div>
          </div>
          </div>
        </section>
    
  
  
  
  
  
  
  <style>
    .what-slider-column {
    position: relative;
    height: 100%;
    border-radius: 5px;
    overflow: hidden;
  }
  .what-slider-image-wrap {
    border-radius: 5px;
    overflow: hidden;
    height: 100%;
  }
  .what-slider-image-wrap img {
    height: 100%;
    object-fit: cover;
  }
  .what-slider-desc-wrap {
    position: absolute;
    top: 0;
    width: 100%;
    left: 0;
    right: 0;
    margin: 0 auto;
    padding: 45px 45px 0;
  }
  .what-slider-title {
    font-size: 34px;
    line-height: 45px;
    color: #000;
    /* font-family: 'Square Peg',cursive; */
    margin-bottom: 12px;
    letter-spacing: .01em;
  }
  .what-slider-subtitle {
    font-size: 18px;
    line-height: 30px;
    color: #000;
    font-family: 'Fedra Sans Book 5';
  }
  
  @media only screen and (max-width: 767px){
  .what-slider-desc-wrap {
    padding: 35px 30px 0;
  }
  .what-slider-title {
    font-size: 45px;
  }
  .what-slider-subtitle {
    font-size: 17px;
    line-height: 27px;
  }
  }
  </style>
  <section id="achievements-nr" class="pt-4 pb-4">
    <div class="">
        <h2 class="section-heading text-center">Achievements</h2> 
        <div id="owl-nr-3" class="icon-carousel owl-carousel owl-loaded owl-drag"> 
   
  <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1317px;"><div class="owl-item active" style="width: 418.667px; margin-right: 20px;"><div class="items">
            <div class="what-slider-column">
            <div class="what-slider-image-wrap">
  <img src="https://staticinm2.ishalife.com/in/pub/media/pdplayout/what_is_in//cache/400xIngredients_of_ayurvedic_best_Isha_Balm_For_Cold___Headache_20_gms_Isha_Life.3.jpg" alt="">
  </div>
  <div class="what-slider-desc-wrap">
  <h3 class="what-slider-title">Camphor</h3>
  <p class="what-slider-subtitle"> A multi-beneficial ingredient, it is useful in treating chest congestion and muscle pain</p>
  </div>
    </div></div></div><div class="owl-item active" style="width: 418.667px; margin-right: 20px;"><div class="items">
        <div class="what-slider-column">
        <div class="what-slider-image-wrap">
  <img src="https://staticinm2.ishalife.com/in/pub/media/pdplayout/what_is_in//cache/400xIngredients_of_balm_headache_Isha_Balm_For_Cold___Headache_20_gms_Isha_Life.4.jpg" alt="">
  </div>
  <div class="what-slider-desc-wrap">
  <h3 class="what-slider-title">Beeswax</h3>
  <p class="what-slider-subtitle"> A natural moisturizer that soothes, repairs and calms the skin</p>
  </div>
  </div></div></div><div class="owl-item active" style="width: 418.667px; margin-right: 20px;"><div class="items">
    
    <div class="what-slider-column">
    <div class="what-slider-image-wrap">
  <img src="https://staticinm2.ishalife.com/in/pub/media/pdplayout/what_is_in//cache/400xIngredients_of_rheumaheal_pain_Isha_Balm_For_Cold___Headache_20_gms_Isha_Life.5.jpg" alt="">
  </div>
  <div class="what-slider-desc-wrap">
  <h3 class="what-slider-title">Eucalyptus and Lemongrass</h3>
  <p class="what-slider-subtitle">Popular for treating cold and muscle pain, Eucalyptus oil is added with Lemongrass Oil for its fragrant powers of reducing anxiety</p>
  </div>
  </div></div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div>
    </div>
  </section>
  <script>
    $('#owl-nr-3').owlCarousel({
        loop:true,
  margin:20,
  autoplay:true,
  smartSpeed: 1000,
  // autoplayTimeout: 5000,  
  autoplayHoverPause:false,
  responsiveClass:true,
  responsive:{
    0:{
        items:1,
        nav:true
    },
    600:{
        items:1,
        nav:false
    },
    1000:{
        items:3,
        nav:true,
        loop:false
    }
  }
  })
  
  </script>






<style>
  #faq-div li.nav-item {margin: auto;width: 100%!important;margin-top: 6px;text-align: center;}
@media only screen and (max-width: 600px){
#faq-div .nav-link {
    padding: 7px!important;
}

}
    #faq-div .nav-link {
    color: #000!important;
    background-color: #ffffff!important;
    margin: 0px 3px 0px 3px!important;
    border: 1px solid #000000;
    border-radius: 20px;
    
}
#faq-div .nav-link.active{
  color: #fe9603!important;
    background-color: #ffffff!important;
    margin: 0px 3px 0px 3px!important;
    border: 1px solid #fe9603;
    border-radius: 20px;
}
#faq-div .tab-faq-mr{margin-top: 20px;}
</style>
<section>
  <div class="pt-4 pb-4" id="faq-div">

<div><h2 class="text-center">Frequently Asked Questions</h2></div>
<!-- Nav pills -->
<div class="row" style="background-color: #ffbf0085;padding-top: 19px;padding-bottom: 32px;">
<div class="col-lg-4">
<ul class="nav nav-pills d-flex faq-menu justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="pill" href="#all">all</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#marketplace">marketplace</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#authors">authors</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#legal">legal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#item-discussion">Discussion</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#affiliates">affiliates</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#miscellaneous">miscellaneous</a>
  </li>

</ul>
</div>

<!-- Tab panes -->
<div class="col-lg-8 p-0">
<div class="tab-content tab-faq-mr">
  <div class="tab-pane container active" id="all">
  <?php
  $no="1";
  $sqla =  "SELECT * FROM faq";
  $resa = mysqli_query($db, $sqla);
  while ($rowa= mysqli_fetch_assoc($resa)) {
  ?>
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item pb-2">
           <h2 class="accordion-header" id="flush-heading<?php echo $no; ?>">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $no; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $no; ?>">
           <?php echo $rowa['faq_qusan'] ?>
           </button>
           </h2>
          <div id="flush-collapse<?php echo $no; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $no; ?>" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body"> <?php echo $rowa['faq_anser'] ?></div>
          </div>
          </div>
    </div>
    <?php
      $no++;
      }
      ?>
 </div>

 
 
 <div class="tab-pane container fade" id="marketplace">
 <?php
  $no="1";
  $sqlb =  "SELECT * FROM faq WHERE faq_catagery='marketplace'";
  $resb = mysqli_query($db, $sqlb);
  while ($rowb= mysqli_fetch_assoc($resb)) {
  ?>
   <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item pb-2">
        <h2 class="accordion-header" id="flush-heading<?php echo $no; ?>">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $no; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $no; ?>">
          <?php echo $rowb['faq_qusan'] ?>
           </button>
        </h2>
        <div id="flush-collapse<?php echo $no; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $no; ?>" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body"><?php echo $rowb['faq_anser'] ?></div>
        </div>
      </div>
    </div>
    <?php
      $no++;
      }
      ?>
</div>




<div class="tab-pane container fade" id="authors">
<?php
  $no="1";
  $sqlc =  "SELECT * FROM faq WHERE faq_catagery='authors'";
  $resc = mysqli_query($db, $sqlc);
  while ($rowc= mysqli_fetch_assoc($resc)) {
  ?>
  <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item pb-2">
        <h2 class="accordion-header" id="flush-heading<?php echo $no; ?>">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $no; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $no; ?>">
          <?php echo $rowc['faq_qusan'] ?>
          </button>
        </h2>
        <div id="flush-collapse<?php echo $no; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $no; ?>" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body"><?php echo $rowc['faq_anser'] ?></div>
        </div>
      </div>
  </div>
  <?php
  $no++;
  }
  ?>
</div>


<div class="tab-pane container fade" id="legal">
<?php
  $no="1";
  $sqld =  "SELECT * FROM faq WHERE faq_catagery='legal'";
  $resd = mysqli_query($db, $sqld);
  while ($rowd= mysqli_fetch_assoc($resd)) {
  ?>
  <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item pb-2">
        <h2 class="accordion-header" id="flush-heading<?php echo $no; ?>">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $no; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $no; ?>">
          <?php echo $rowd['faq_qusan'] ?>
          </button>
        </h2>
        <div id="flush-collapse<?php echo $no; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $no; ?>" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body"><?php echo $rowd['faq_anser'] ?></div>
        </div>
      </div>
</div>
<?php
  $no++;
  }
  ?>
</div>


<div class="tab-pane container fade" id="item-discussion">
<?php
  $no="1";
  $sqle =  "SELECT * FROM faq WHERE faq_catagery='discussion'";
  $rese = mysqli_query($db, $sqle);
  while ($rowe= mysqli_fetch_assoc($rese)) {
  ?>
  <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item pb-2">
        <h2 class="accordion-header" id="flush-heading<?php echo $no; ?>">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $no; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $no; ?>">
          <?php echo $rowe['faq_qusan'] ?>
          </button>
        </h2>
        <div id="flush-collapse<?php echo $no; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $no; ?>" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body"><?php echo $rowe['faq_anser'] ?></div>
        </div>
      </div>
</div>
<?php
  $no++;
  }
  ?>
</div>


<div class="tab-pane container fade" id="affiliates">
<?php
  $no="1";
  $sqlf =  "SELECT * FROM faq WHERE faq_catagery='affiliates'";
  $resf = mysqli_query($db, $sqlf);
  while ($rowf= mysqli_fetch_assoc($resf)) {
  ?>  
<div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item pb-2">
        <h2 class="accordion-header" id="flush-heading<?php echo $no; ?>">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $no; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $no; ?>">
          <?php echo $rowf['faq_qusan'] ?>
          </button>
        </h2>
        <div id="flush-collapse<?php echo $no; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $no; ?>" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body"><?php echo $rowf['faq_anser'] ?></div>
        </div>
      </div>
</div>
<?php
  $no++;
  }
  ?>
</div>


<div class="tab-pane container fade" id="miscellaneous">
<?php
  $no="1";
  $sqla =  "SELECT * FROM faq WHERE faq_catagery='miscellaneous'";
  $resa = mysqli_query($db, $sqla);
  while ($rowa= mysqli_fetch_assoc($resa)) {
  ?>   
<div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item pb-2">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          <?php echo $rowa['faq_qusan'] ?>
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body"><?php echo $rowa['faq_anser'] ?>.</div>
        </div>
      </div>
</div>
<?php
  $no++;
  }
  ?>
</div>
</div>
</div>
</div>

    </div>
  </section>
  
  
  
  
  
  
  
  
  <style>
    .bg-gradient-primary {
      background: linear-gradient(85deg, rgba(26, 44, 121, 0.8) 30%, rgba(232, 5, 102, 0.9) 100%) !important;
  }
  .section-lg {
      padding-top: 8rem;
      padding-bottom: 8rem;
  }
  .icon i, .icon svg {
      font-size: 2rem;
  }
  .btn.btn-pill {
      border-radius: 2rem;
  }
  .download-btn-wrap a.btn:hover {
      background: #ffffff;
      color: #181C32 !important;
  }
  .mr-3, .mx-3 {
      margin-right: 1rem !important;
  }
  </style>
  <section class="section py-0" style="background: url('images/hero-bg11.jpg')no-repeat center fixed">
    <div class="section-lg section bg-gradient-primary text-white  ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-9 col-md-10 col-lg-9">
                    <div class="section-title text-center mb-5">
                        <h2>Download Our Business Apps</h2>
                        <p class="lead">Building your Apps helps attract more potential clients. Our integrated marketing team will promote enabled internal or work high-impact convergence.</p>
                    </div>
                    <div class="download-btn-wrap text-center">
                        <a class="btn btn-pill border border-variant-light  text-white  shadow-hover mr-md-3 mb-4 mb-md-3 mb-lg-0" href="#">
                            <div class="d-flex align-items-center">
                                <span class="icon icon-md mr-3 h-auto"><i class="fab fa-apple"></i></span>
                                <div class="d-block text-left">
                                    <small class="font-small ">Download on the</small>
                                    <div class="h6 mb-0">App Store</div>
                                </div>
                            </div>
                        </a>
                        <a class="btn btn-pill border border-variant-light  text-white  shadow-hover mr-md-3 mb-4 mb-md-3 mb-lg-0" href="#">
                            <div class="d-flex align-items-center">
                                <span class="icon icon-md mr-3 h-auto"><i class="fab fa-google-play"></i></span>
                                <div class="d-block text-left">
                                    <small class="font-small ">Download on the</small>
                                    <div class="h6 mb-0">Google Play</div>
                                </div>
                            </div>
                        </a>
                        <a class="btn btn-pill border border-variant-light  text-white  shadow-hover" href="#">
                            <div class="d-flex align-items-center">
                                <span class="icon icon-md mr-3 h-auto"><i class="fab fa-windows"></i></span>
                                <div class="d-block text-left">
                                    <small class="font-small ">Download on the</small>
                                    <div class="h6 mb-0">Windows</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>





</div>

  <div class="tab-pane container fade pt-5" id="blog">
    <div class="pt-5">
      <div><h2 class="text-center pb-2">Blog</h2></div>
      <style>
         @media only screen and (max-width: 600px) {
        .blog-page h4{font-size: 16px;}
         }
         .row blog-page img{border-radius: 12px;}
      </style>


      <?php
      $sql =  "SELECT * FROM blog ";
      $res = mysqli_query($db, $sql);
      while ($row= mysqli_fetch_assoc($res)) {
      ?>
      <div class="card p-2 m-2">
      <a href="blog-details.php?id=<?php echo $row['id'] ?>">  
      <div class="row blog-page">
        <div class="col-4 col-md-4 col-lg-4">
          <div><img src="admin/images/blog/<?php echo $row['blog_image'] ?>" alt="" width="100%"></div>
        </div>
        <div class="col-8 col-md-8 col-lg-8 m-auto">
          <div>
            <div><h4><?php echo $row['blog_title'] ?></h4></div>
            <div>
                <p><?php echo $row['name_client'] ?></p>
                <p><?php echo $row['ratings_client'] ?></p>
            </div>
            <div><p class="d-none d-md-block d-lg-block"><?php echo $row['blog_description'] ?></p></div>
            <div><span>Rs. <?php echo $row['amount_work'] ?> | </span> <span><?php echo $row['pincode'] ?>, <?php echo $row['city'] ?>, <?php echo $row['state'] ?>, <?php echo $row['country'] ?></span></div>
          </div>
        </div>
        </div>
        </a>
        </div>
        <?php
        }
        ?>


    </div>
   </div>

  <div class="tab-pane container fade pt-5" id="connections">
    <div class="pt-5">
      <div><h2 class="text-center pb-2">Connections</h2></div>
      <style>
         @media only screen and (max-width: 600px) {
        .connections-page h4{font-size: 16px;}
         }
         .row blog-page img{border-radius: 12px;}
         .img-back{    background-size: cover;
    background-position: center;}
      </style>

      <div class="card m-2">
      <a href="profile.html">  
      <div class="row connections-page m-0">
        <div class="col-4 col-md-4 col-lg-4 p-0 img-back" style="background-image: url(./images/blog.jpg);">
          <div></div>
        </div>
        <div class="col-8 col-md-8 col-lg-8 p-2 m-auto">
          <div>
            <h4>Ukraine war: US says Iran now Russia's 'top military backer'</h4>
            <div class=""><span class="me-2">4.0</span><span class="me-2 star-icon"><svg width="100px" height="100%" viewBox="0 0 1000 200"><polygon id="star749" points="100,10 40,198 190,78 10,78 160,198" fill="#FFE372"></polygon><defs><clipPath id="stars749"><use xlink:href="#star749"></use><use xlink:href="#star749" x="21%"></use><use xlink:href="#star749" x="41%"></use><use xlink:href="#star749" x="61%"></use><use xlink:href="#star749" x="81%"></use></clipPath></defs><rect width="100%" height="100%" clip-path="url(#stars749)" style="fill: rgb(215, 215, 215); stroke: red; stroke-width: 1; height: 100%; width: 100%;"></rect><rect width="80%" height="100%" clip-path="url(#stars749)" style="fill: rgb(255, 110, 0); height: 100%;"></rect></svg></span><span class="">Ratings</span></div>
            <div class=""><span class="me-2"><span class="" style="background-color: white;">10 YRS</span></span><span class="me-2"><img src="images/jdvrsl_verified.svg" alt="" style="width:50px;background-color: white;padding: 4px 6px 6px 6px;"></span><span class=""><img src="images/jdvrsl_trusted.svg" alt="" style="width:50px;"></span><span class="badge-jdpay break-line" style="background-image: url(&quot;https://akam.cdn.jdmagicbox.com/images/icontent/newwap/newprot/ctlgjdpay2x.png&quot;);"></span></div>
            <p class="d-none d-md-block d-lg-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.</p>
          </div>
        </div>
      </div>
     </a>

    </div>
    <div class="card m-2">
      <a href="profile.html">
      <div class="row blog-page m-0">
        <div class="col-4 col-md-4 col-lg-4 p-0 img-back" style="background-image: url(./images/blog.jpg);">
          <div></div>
        </div>
        <div class="col-8 col-md-8 col-lg-8 p-2 m-auto">
          <div>
            <h4>Ukraine war: US says Iran now Russia's 'top military backer'</h4>
            <div class=""><span class="me-2">4.0</span><span class="me-2 star-icon"><svg width="100px" height="100%" viewBox="0 0 1000 200"><polygon id="star749" points="100,10 40,198 190,78 10,78 160,198" fill="#FFE372"></polygon><defs><clipPath id="stars749"><use xlink:href="#star749"></use><use xlink:href="#star749" x="21%"></use><use xlink:href="#star749" x="41%"></use><use xlink:href="#star749" x="61%"></use><use xlink:href="#star749" x="81%"></use></clipPath></defs><rect width="100%" height="100%" clip-path="url(#stars749)" style="fill: rgb(215, 215, 215); stroke: red; stroke-width: 1; height: 100%; width: 100%;"></rect><rect width="80%" height="100%" clip-path="url(#stars749)" style="fill: rgb(255, 110, 0); height: 100%;"></rect></svg></span><span class="">Ratings</span></div>
            <div class=""><span class="me-2"><span class="" style="background-color: white;">10 YRS</span></span><span class="me-2"><img src="images/jdvrsl_verified.svg" alt="" style="width:50px;background-color: white;padding: 4px 6px 6px 6px;"></span><span class=""><img src="images/jdvrsl_trusted.svg" alt="" style="width:50px;"></span><span class="badge-jdpay break-line" style="background-image: url(&quot;https://akam.cdn.jdmagicbox.com/images/icontent/newwap/newprot/ctlgjdpay2x.png&quot;);"></span></div>
            <p class="d-none d-md-block d-lg-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.</p>
          </div>
        </div>
      </div>
      </a>
    </div>

    <div class="card m-2">
      <a href="profile.html">
      <div class="row blog-page m-0">
        <div class="col-4 col-md-4 col-lg-4 p-0 img-back" style="background-image: url(./images/blog.jpg);">
          <div></div>
        </div>
        <div class="col-8 col-md-8 col-lg-8 p-2 m-auto">
          <div>
            <h4>Ukraine war: US says Iran now Russia's 'top military backer'</h4>
            <div class=""><span class="me-2">4.0</span><span class="me-2 star-icon"><svg width="100px" height="100%" viewBox="0 0 1000 200"><polygon id="star749" points="100,10 40,198 190,78 10,78 160,198" fill="#FFE372"></polygon><defs><clipPath id="stars749"><use xlink:href="#star749"></use><use xlink:href="#star749" x="21%"></use><use xlink:href="#star749" x="41%"></use><use xlink:href="#star749" x="61%"></use><use xlink:href="#star749" x="81%"></use></clipPath></defs><rect width="100%" height="100%" clip-path="url(#stars749)" style="fill: rgb(215, 215, 215); stroke: red; stroke-width: 1; height: 100%; width: 100%;"></rect><rect width="80%" height="100%" clip-path="url(#stars749)" style="fill: rgb(255, 110, 0); height: 100%;"></rect></svg></span><span class="">Ratings</span></div>
            <div class=""><span class="me-2"><span class="" style="background-color: white;">10 YRS</span></span><span class="me-2"><img src="images/jdvrsl_verified.svg" alt="" style="width:50px;background-color: white;padding: 4px 6px 6px 6px;"></span><span class=""><img src="images/jdvrsl_trusted.svg" alt="" style="width:50px;"></span><span class="badge-jdpay break-line" style="background-image: url(&quot;https://akam.cdn.jdmagicbox.com/images/icontent/newwap/newprot/ctlgjdpay2x.png&quot;);"></span></div>
            <p class="d-none d-md-block d-lg-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.</p>
          </div>
        </div>
      </div>
      </a>
    </div>

    <div class="card m-2">
      <a href="profile.html">
      <div class="row blog-page m-0">
        <div class="col-4 col-md-4 col-lg-4 p-0 img-back" style="background-image: url(./images/blog.jpg);">
          <div></div>
        </div>
        <div class="col-8 col-md-8 col-lg-8 p-2 m-auto">
          <div>
            <h4>Ukraine war: US says Iran now Russia's 'top military backer'</h4>
            <div class=""><span class="me-2">4.0</span><span class="me-2 star-icon"><svg width="100px" height="100%" viewBox="0 0 1000 200"><polygon id="star749" points="100,10 40,198 190,78 10,78 160,198" fill="#FFE372"></polygon><defs><clipPath id="stars749"><use xlink:href="#star749"></use><use xlink:href="#star749" x="21%"></use><use xlink:href="#star749" x="41%"></use><use xlink:href="#star749" x="61%"></use><use xlink:href="#star749" x="81%"></use></clipPath></defs><rect width="100%" height="100%" clip-path="url(#stars749)" style="fill: rgb(215, 215, 215); stroke: red; stroke-width: 1; height: 100%; width: 100%;"></rect><rect width="80%" height="100%" clip-path="url(#stars749)" style="fill: rgb(255, 110, 0); height: 100%;"></rect></svg></span><span class="">Ratings</span></div>
            <div class=""><span class="me-2"><span class="" style="background-color: white;">10 YRS</span></span><span class="me-2"><img src="images/jdvrsl_verified.svg" alt="" style="width:50px;background-color: white;padding: 4px 6px 6px 6px;"></span><span class=""><img src="images/jdvrsl_trusted.svg" alt="" style="width:50px;"></span><span class="badge-jdpay break-line" style="background-image: url(&quot;https://akam.cdn.jdmagicbox.com/images/icontent/newwap/newprot/ctlgjdpay2x.png&quot;);"></span></div>
            <p class="d-none d-md-block d-lg-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.</p>
          </div>
        </div>
      </div>
      </a>
    </div>
    
    <div class="card m-2">
      <a href="profile.html">
      <div class="row blog-page m-0">
        <div class="col-4 col-md-4 col-lg-4 p-0 img-back" style="background-image: url(./images/blog.jpg);">
          <div></div>
        </div>
        <div class="col-8 col-md-8 col-lg-8 p-2 m-auto">
          <div>
            <h4>Ukraine war: US says Iran now Russia's 'top military backer'</h4>
            <div class=""><span class="me-2">4.0</span><span class="me-2 star-icon"><svg width="100px" height="100%" viewBox="0 0 1000 200"><polygon id="star749" points="100,10 40,198 190,78 10,78 160,198" fill="#FFE372"></polygon><defs><clipPath id="stars749"><use xlink:href="#star749"></use><use xlink:href="#star749" x="21%"></use><use xlink:href="#star749" x="41%"></use><use xlink:href="#star749" x="61%"></use><use xlink:href="#star749" x="81%"></use></clipPath></defs><rect width="100%" height="100%" clip-path="url(#stars749)" style="fill: rgb(215, 215, 215); stroke: red; stroke-width: 1; height: 100%; width: 100%;"></rect><rect width="80%" height="100%" clip-path="url(#stars749)" style="fill: rgb(255, 110, 0); height: 100%;"></rect></svg></span><span class="">Ratings</span></div>
            <div class=""><span class="me-2"><span class="" style="background-color: white;">10 YRS</span></span><span class="me-2"><img src="images/jdvrsl_verified.svg" alt="" style="width:50px;background-color: white;padding: 4px 6px 6px 6px;"></span><span class=""><img src="images/jdvrsl_trusted.svg" alt="" style="width:50px;"></span><span class="badge-jdpay break-line" style="background-image: url(&quot;https://akam.cdn.jdmagicbox.com/images/icontent/newwap/newprot/ctlgjdpay2x.png&quot;);"></span></div>
            <p class="d-none d-md-block d-lg-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi, vel ipsa porro dolor quod temporibus doloribus? Aliquid
               fuga earum perferendis sunt ipsa. Accusamus repudiandae architecto deleniti. Ea, illum nemo.</p>
          </div>
        </div>
      </div>
      </a>
    </div>
</div>

  </div>

</div>
</div>
</section>








<!-- <style>
  .teble-company th{background-color: #e9e9e9;}
  table{border-color: #fe9603!important ;}
</style>
<section class="pt-4 pb-4" style="background-color: #fff0c1;">
  <div class="container">
    <h2 class="text-center pb-2">About Us</h2>
      <div class="bg-white">
          <div class="">  
           <div>
            <table class="table table-bordered teble-company">
              <thead>
                <tr>
                  <th scope="col">Type</th>
                  <th scope="col">Public company</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Traded as</th>
                  <td>NYSE: MCD<br>
                      DJIA component<br>
                      S&amp;P 100 component<br>
                      S&amp;P 500 component
                  </td>
                </tr>
                <tr>
                  <th scope="row">ISIN</th>
                  <td>US5801351017</td>
                </tr>
                <tr>
                  <th scope="row">Industry</th>
                  <td colspan="2">Restaurants, real estate[1][2]</td>
                </tr>
                <tr>
                  <th scope="row">Genre</th>
                  <td colspan="2">Fast food restaurant</td>
                </tr>
                <tr>
                  <th scope="row">Founded</th>
                  <td colspan="2">May 15, 1940; 82<br> years ago in San<br> Bernardino, California</td>
                </tr>
                <tr>
                  <th scope="row">Founders</th>
                  <td colspan="2">Richard McDonald<br>
                      Maurice McDonald<br>
                      Ray Kroc</td>
                </tr>
                <tr>
                  <th scope="row">Headquarters</th>
                  <td colspan="2">Chicago, Illinois, U.S.[3]</td>
                </tr>
                <tr>
                  <th scope="row">Number of locations</th>
                  <td colspan="2">Increase 40,031 restaurants (2021)[4]</td>
                </tr>
                <tr>
                  <th scope="row">Area served</th>
                  <td colspan="2">Worldwide (119+ countries)</td>
                </tr>
                <tr>
                  <th scope="row">Key people</th>
                  <td colspan="2">Enrique Hernandez Jr. (Chairman)[5]
                      Chris Kempczinski (President &amp; CEO)</td>
                </tr>
                <tr>
                  <th scope="row">Products</th>
                  <td colspan="2">Hamburgers
                      chicken<br>
                      french<br> 
                      friessoft<br> 
                      drinks<br>
                      soft serves<br>
                      milkshakes<br>
                      salads<br>
                      desserts<br>
                      hotcake<br>
                      coffee<br>
                      breakfast<br>
                      wraps
                  </td>
                </tr>
                <tr>
                  <th scope="row">Revenue</th>
                  <td colspan="2">Increase US$23.223 billion (2021)[4]</td>
                </tr>
                <tr>
                  <th scope="row">Operating income</th>
                  <td colspan="2">Increase US$10.356 billion (2021)[4]</td>
                </tr>
                <tr>
                  <th scope="row">Net income</th>
                  <td colspan="2">
                      Increase US$7.545 billion (2021)[4]</td>
                </tr>
                <tr>
                  <th scope="row">Total assets</th>
                  <td colspan="2">
                      Increase US$53.854 billion (2021)[4]</td>
                </tr>
                <tr>
                  <th scope="row">Total equity</th>
                  <td colspan="2">
                      Positive decrease −US$4.601 billion (2021)[4]</td>
                </tr>
                <tr>
                  <th scope="row">Number of employees</th>
                  <td colspan="2">
                      Approx. 200,000 (2021)[4]</td>
                </tr>
                
              </tbody>
            </table>
           </div> 
           </div>
      </div>
   </div>
</section>  -->


















<!-- <section id="details" class="pt-4 pb-2" style="">
  <div class="container">
      <h2 class="section-heading text-center">About Us</h2>
      <div class="p-4" style="background: linear-gradient(to top left, #ffd692 0%, #f7f6f4 100%);">
      <div class="row"> 
      <div class="col-5 col-md-3 col-lg-3 m-auto"><img src="images/about2.svg" alt=""></div>
      <div class="col-7 col-md-9 col-lg-9 m-auto">
          <h4>Repairs Damaged Hair</h4>
          <p class="text-justify m-0">
              With the goodness of Ayurvedic herbs and natural oils, BhringAmla Shampoo effectively works to repair hair damage. Amla and Bhringraj make the hair healthier and stronger from root to tip.
          </p>
     </div>
     </div>


     <div class="row pt-4">
      <div class="col-7 col-md-9 col-lg-9 m-auto">
          <h4>Promotes Hair Growth</h4>
          <p class="text-justify m-0">
              When you have a hair care recipe that’s 4000 years old, you can expect exceptional results. The oils present in the shampoo penetrate deep within the roots and stimulate the hair follicles, leading to increased hair growth.
          </p>
     </div>
     <div class="col-5 col-md-3 col-lg-3 m-auto"><img src="images/about1.svg" alt=""></div>
     </div>
    

  </div>
  </div>
</section>
<section id="details" class="pt-2 pb-4" style="">
  <div class="container">
      <div class="p-4" style="background: linear-gradient(to top left, #ffd692 0%, #f7f6f4 100%);">
      <div class="row"> 
      <div class="col-5 col-md-3 col-lg-3 m-auto"><img src="images/about2.svg" alt=""></div>
      <div class="col-7 col-md-9 col-lg-9 m-auto">
          <h4>Repairs Damaged Hair</h4>
          <p class="text-justify m-0">
              With the goodness of Ayurvedic herbs and natural oils, BhringAmla Shampoo effectively works to repair hair damage. Amla and Bhringraj make the hair healthier and stronger from root to tip.
          </p>
     </div>
     </div>


     <div class="row pt-4">
      <div class="col-7 col-md-9 col-lg-9 m-auto">
          <h4>Promotes Hair Growth</h4>
          <p class="text-justify m-0">
              When you have a hair care recipe that’s 4000 years old, you can expect exceptional results. The oils present in the shampoo penetrate deep within the roots and stimulate the hair follicles, leading to increased hair growth.
          </p>
     </div>
     <div class="col-5 col-md-3 col-lg-3 m-auto"><img src="images/about1.svg" alt=""></div>
     </div>


  </div>
  </div>
</section> -->













<!-- <footer>
  <div>
    <img src="images/footer.png" alt="" width="100%">
  </div>
  <div class="pt-2 pb-2 text-center" style="background-color: #fff0c1;"><p class="m-0">© Copyright All Rights Reserved By Sirvi 2022</p></div>
</footer>


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
  </style>
<div class="d-block d-sm-block d-md-none d-lg-none position-fixed w-100 bottom-manu">
  <div class="back-color">
  <div class="row m-auto pt-1 pb-1">
      <div class="col-2 col-sm-2 m-auto">
          <a href="index.html"><div class="text-center"><span class="footer-icon" style="font-size: 25px;"><i class="fa-solid fa-phone"></i></span></div></a>
      </div>
      <div class="col-2 col-sm-2 m-auto">
          <div class="text-center" data-bs-toggle="modal" data-bs-target="#link"><span class="footer-icon" style="font-size: 25px;"><i class="fa-brands fa-whatsapp"></i></span></div>
      </div>
      <div class="col-2 col-sm-2 m-auto">
          <a href=""><div class="text-center"><span class="footer-icon" style="font-size: 25px;"><i class="fa-regular fa-heart"></i></span></div></a>
      </div>
      <div class="col-2 col-sm-2 m-auto">
          <a href=""><div class="text-center"><span class="footer-icon" style="font-size: 25px;"><i class="fa-sharp fa-solid fa-location-dot"></i></span></div></a>
      </div>
      <div class="col-2 col-sm-2 m-auto">
          <a href=""><div class="text-center"><span class="footer-icon" style="font-size: 25px;"><i class="fa-solid fa-share-nodes"></i></span></div></a>
      </div>
      <div class="col-2 col-sm-2 m-auto">
          <a href=""><div class="text-center"><span class="footer-icon" style="font-size: 25px;"><i class="fa-solid fa-comment"></i></span></div></a>
      </div>
      
     
     
  </div>
  </div>
</div> -->





<script>
  $(".carousel-1").owlCarousel({
    margin: 10,
    loop: true,
    // autoplay: true,
    // smartSpeed: 1000,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0:{
        items:2,
        nav: false
      },
      600:{
        items:2,
        nav: false
      },
      1000:{
        items:3,
        nav: false
      }
    }
  });
</script>



<script>
  $(document).ready(function(){
$('.count h2').each(function() {
    var $this = $(this);
    if ($this.attr('data-count').indexOf('+') > -1) {
        countTo = $this.attr('data-count').replace(/[,+]/g, "");
        
        $({ countNum: $this.text() }).animate({
                countNum: countTo
            },

            {
                duration: 5000,
                easing: 'linear',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text($this.attr('data-count'));
                    //alert('finished');
                }

            });

    } else {
        countTo = $this.attr('data-count');
        $(this).prop('countTo', 0).animate({
            countTo: $(this).text()
        }, {
            duration: 600,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });


    }
});
});
</script>


<script>jQuery(document).ready(function($) {
  "use strict";
  //  TESTIMONIALS CAROUSEL HOOK
  $('#customers-testimonials').owlCarousel({
      loop: true,
      center: true,
      items: 3,
      margin: 0,
      // autoplay: true,
      dots:true,
      autoplayTimeout: 8500,
      smartSpeed: 450,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1170: {
          items: 1
        }
      }
  });
});</script>



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

</body>

</html>