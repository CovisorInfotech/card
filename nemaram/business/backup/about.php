<?php 
error_reporting(0);
session_start();
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
      <div class="img-pro me-4" style="width: 27%;"><a href="index.php"><img src="admin/images/logo/<?php echo $row_adm['image'] ?>" alt="" width="100%"></a></div>
   <?php }
    else{
    ?>
    <div class="img-pro me-4">
        <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="40" height="40" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m127.08 44.32-62-40a2 2 0 0 0-2.16 0l-62 40a2 2 0 0 0 2.16 3.36L8 44.51V122a2 2 0 0 0 2 2h108a2 2 0 0 0 2-2V44.51l4.92 3.17A1.94 1.94 0 0 0 126 48a2 2 0 0 0 1.08-3.68zM116 42v78H12V41.93L64 8.38l52 33.55V42z" fill="#ffffff" data-original="#000000" class=""></path><path d="M73 85a10 10 0 0 0 10-10 2 2 0 0 0-2-2h-8a2 2 0 0 0 0 4h5.66A6 6 0 1 1 73 69a5.92 5.92 0 0 1 2.59.59A2 2 0 1 0 77.32 66 9.9 9.9 0 0 0 73 65a10 10 0 0 0 0 20zM38 81H28V67a2 2 0 0 0-4 0v16a2 2 0 0 0 2 2h12a2 2 0 0 0 0-4zM50 65a10 10 0 1 0 10 10 10 10 0 0 0-10-10zm0 16a6 6 0 1 1 6-6 6 6 0 0 1-6 6zM96 85a10 10 0 1 0-10-10 10 10 0 0 0 10 10zm0-16a6 6 0 1 1-6 6 6 6 0 0 1 6-6z" fill="#ffffff" data-original="#000000" class=""></path></g></svg></a>
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





<main class="container">


<style>
    .heading {
        font-weight: 600;
        font-size: 22px;
    }
</style>
<section class="pt-5">
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
                        <div>
                            <span class="heading"><?php echo $row['title_name'] ?></span>
                        </div>
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


<!-- <style>
    .count-box {
        border: 2px dashed #fe9603;
        padding: 12px;
    }
    .count-img {
        width: 25%;
    }
    .count {
        width: 75%;
        padding-left: 13px;
    }
    .count-img img {
        border-radius: 50%;
        border: 4px solid rgb(255, 255, 255);
    }
    .count-img .img-border:hover {
        border: 2px solid rgb(255 139 0);
        border-radius: 50%;
    }
    .count-img .img-border {
        border: 2px solid rgb(0, 0, 0);
        border-radius: 50%;
    }
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
                                <div class="count-img">
                                    <div class="img-border"><img src="images/profil.jpg" alt="" width="100%" /></div>
                                </div>
                                <div class="count">
                                    <h2 data-count="100" class="counter">100</h2>
                                    <p class="m-0">Speaker</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 col-lg-3 pb-4">
                            <div class="count-box d-flex">
                                <div class="count-img">
                                    <div class="img-border"><img src="images/profil.jpg" alt="" width="100%" /></div>
                                </div>
                                <div class="count">
                                    <h2 data-count="30+" class="counter">30+</h2>
                                    <p class="m-0">Governments &amp; Ministers</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 col-lg-3 pb-4">
                            <div class="count-box d-flex">
                                <div class="count-img">
                                    <div class="img-border"><img src="images/profil.jpg" alt="" width="100%" /></div>
                                </div>
                                <div class="count">
                                    <h2 data-count="600+" class="counter">600+</h2>
                                    <p class="m-0">Delegates</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 col-lg-3 pb-4">
                            <div class="count-box d-flex">
                                <div class="count-img">
                                    <div class="img-border"><img src="images/profil.jpg" alt="" width="100%" /></div>
                                </div>
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
</section> -->



<style>
    #faq-div li.nav-item {
        margin: auto;
        width: 100% !important;
        margin-top: 6px;
        text-align: center;
    }
    @media only screen and (max-width: 600px) {
        #faq-div .nav-link {
            padding: 7px !important;
        }
    }
    #faq-div .nav-link {
        color: #000 !important;
        background-color: #ffffff !important;
        margin: 0px 3px 0px 3px !important;
        border: 1px solid #000000;
        border-radius: 20px;
    }
    #faq-div .nav-link.active {
        color: #fe9603 !important;
        background-color: #ffffff !important;
        margin: 0px 3px 0px 3px !important;
        border: 1px solid #fe9603;
        border-radius: 20px;
    }
    #faq-div .tab-faq-mr {
        margin-top: 20px;
    }
</style>
<section>
    <div class="pt-4 pb-4" id="faq-div">
        <div><h2 class="text-center">Frequently Asked Questions</h2></div>
        <div class="row" style="background-color: #ffbf0085; padding-top: 19px; padding-bottom: 32px;">
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
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse<?php echo $no; ?>"
                                        aria-expanded="false"
                                        aria-controls="flush-collapse<?php echo $no; ?>"
                                    >
                                        <?php echo $rowa['faq_qusan'] ?>
                                    </button>
                                </h2>
                                <div id="flush-collapse<?php echo $no; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $no; ?>" data-bs-parent="#accordionFlushExample" style="">
                                    <div class="accordion-body"><?php echo $rowa['faq_anser'] ?></div>
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
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse<?php echo $no; ?>"
                                        aria-expanded="false"
                                        aria-controls="flush-collapse<?php echo $no; ?>"
                                    >
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
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse<?php echo $no; ?>"
                                        aria-expanded="false"
                                        aria-controls="flush-collapse<?php echo $no; ?>"
                                    >
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
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse<?php echo $no; ?>"
                                        aria-expanded="false"
                                        aria-controls="flush-collapse<?php echo $no; ?>"
                                    >
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
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse<?php echo $no; ?>"
                                        aria-expanded="false"
                                        aria-controls="flush-collapse<?php echo $no; ?>"
                                    >
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
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse<?php echo $no; ?>"
                                        aria-expanded="false"
                                        aria-controls="flush-collapse<?php echo $no; ?>"
                                    >
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
</footer>