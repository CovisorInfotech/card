<?php 
error_reporting(0);
include("config.php"); 
session_start();
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
 
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<style>
    a{text-decoration: none;}
 </style>
</head>   
 
    
<body class="" style="background-color: #f9f9fe;">

<style>
p{margin-bottom: 0px;}
#head-menu-blog .nav-link{background-color: #fff4d5;
    margin: 0px 3px 0px 3px;
    display: block;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    color: #000000;
    text-decoration: none;}
    #profile-head{position: fixed;
    z-index: 100;
    width: 100%;}
    
    .cut-text{white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;}
</style>  

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
    <div class="me-2"><span class="text-white"><i class="fa-regular fa-user" style="font-size: 24px;"></i></span></div>
    <a href="login.php"><div class=""><span class="text-white">Sign In</span></div></a>
    <?php
    }
    ?>
</div>
</div>

</div>
</div>
</section> 




  
  
  
  <style>
  .product-feature-slider-section {
    /* background-color: #212529; */
      /* padding: 70px 0 85px; */
      width: 100%;
      overflow: hidden;
  }
  .catalog-product-view.new-pdp-design .product-container {
      max-width: 1280px;
      margin-left: auto;
      margin-right: auto;
      width: 100%;
  } 
  .section-heading {
      font-size: 36px;
      /* margin-bottom: 25px; */
      text-align: center;
      text-transform: uppercase;
      font-weight: 200;
      /* font-family: 'Fedra Sans'; */
      padding-left: 15px;
      padding-right: 15px;
  }
  .feature-slider-wrap {
      position: relative;
      box-shadow: 0px 15px 20px -5px rgb(0 0 0 / 5%);
      min-width: 530px;
      margin-left: -27%;
      background-color: #fffbf1;
      z-index: 0;
  }
  .feature-slider-image img {
      width: 100%;
  }
  .feature-slider-desc-wrap {
      position: absolute;
      text-align: center;
      width: 100%;
      left: 0;
      right: 0;
      max-width: 375px;
      margin: 0 auto;
      z-index: 1;
  }
  .feature-slider-title {
      font-size: 34px;
      line-height: 45px;
      color: #000;
      /* font-family: 'Square Peg',cursive; */
      margin-bottom: 15px;
      letter-spacing: .01em;
  }
  .feature-slider-subtitle {
      font-size: 18px;
      line-height: 30px;
      color: #000;
      font-family: 'Fedra Sans Book 5';
  }
  .feature-slider-desc-bottom .feature-slider-desc-wrap {
      bottom: 35px;
  }
  .feature-slider-desc-wrap {
      position: absolute;
      text-align: center;
      width: 100%;
      left: 0;
      right: 0;
      max-width: 375px;
      margin: 0 auto;
      z-index: 1;
  }
  /* .how-use-section {
      width: 100%;
      padding: 60px 0;
      margin-top: 60px;
  } */
  
  @media only screen and (max-width: 767px){
  .section-heading {
      font-size: 27px;
      line-height: 34px;
  }
  .logo-img{color: white;}
  }
  @media (max-device-width: 991px){
  .product-feature-slider-section {
      padding: 30px 0 0;
      background-color: transparent;
  }
  .feature-slider {
      padding: 10px 20px;
      margin-left: 0;
      display: block;
      max-width: 380px;
      margin-left: auto;
      margin-right: auto;
  }
  feature-slider-wrap:first-child {
      z-index: 1 !important;
  }
  .feature-slider-wrap {
      margin-left: 0;
      box-shadow: none;
      padding-top: 0;
      min-width: auto;
      margin-bottom: 50px;
      z-index: 0 !important;
  }
  .feature-slider-wrap:nth-child(1) .feature-slider-image {
      transform: rotate(0deg);
  }
  .feature-slider-wrap:nth-child(odd) .feature-slider-image {
      transform: rotate(-1deg);
  }
  .feature-slider-image {
      box-shadow: 0px 12px 12px -8px rgb(0 0 0 / 25%);
      z-index: 1;
      position: relative;
  }
  .feature-slider-wrap:nth-child(1) .feature-slider-mobile-cover {
      top: 10px;
  }
  .feature-slider-wrap:nth-child(odd) .feature-slider-mobile-cover {
      transform: rotate(3deg);
      top: 0;
  }
  .feature-slider-wrap .feature-slider-mobile-cover {
      background: #c1cfac;
      border-radius: 6px;
      content: "";
      position: absolute;
      height: 100%;
      width: 100%;
      z-index: 0;
      top: 0;
  }
  .feature-slider-title {
      font-size: 45px;
      line-height: 36px;
  }
  .feature-slider-desc-bottom .feature-slider-desc-wrap {
      bottom: 25px;
  }
  .feature-slider-image img {
      min-height: 385px;
      object-fit: cover;
      border-radius: 6px;
  }
  .feature-slider-desc-top .feature-slider-desc-wrap {
      top: 25px;
  }
  .feature-slider-desc-wrap {
      padding-left: 25px;
      padding-right: 25px;
  }
  .feature-slider-desc-wrap {
      padding-left: 25px;
      padding-right: 25px;
  }
  .feature-slider-title {
      font-size: 45px;
      line-height: 36px;
  }
  .feature-slider-subtitle {
      font-size: 16px;
      line-height: 25px;
  }
  }
  </style>







<style>
    @media only screen and (max-width: 600px) {
        #details h4{font-size: 15px;}
    #details p{    font-size: 13px;}
}
 
 
    #details p{text-align: justify;}
</style>
  <section id="details" class="pb-5" style="padding-top: 90px!important;">
    <h2 class="section-heading">Blog</h2> 
    <?php
    $id=$_GET['id'];
    $row= mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM blog where id='$id'")); 
    $likeClass="far";	
			if(isset($_COOKIE['like_'.$row['id']])){
				$likeClass="fas";
			}		

			$dislikeClass="far";	
			if(isset($_COOKIE['dislike_'.$row['id']])){
				$dislikeClass="fas";
			}	
    ?>
    <div class="container">
        <div class="p-4">
        <div class="row"> 
        <div class="col-md-8 col-lg-8">
            <div style="background: #fff;" class="p-4">
            <div class="text-center">
                 <h3><?php echo $row['blog_title'] ?></h3>
                 <p class="text-center"><?php echo $row['name_client'] ?><br>
                 <?php echo $row['ratings_client'] ?></p>
            </div>        
            <div>
            <img  src="admin/images/blog/<?php echo $row['blog_image'] ?>" class="fullwidth wp-post-image w-100" alt=""  data-lazy="false">
            </div>

           <div class="row pt-2 pb-2">
               <div class="col-6 col-md-6 col-lg-6">
                   <div><p><i class="fa-solid fa-calendar-week"></i> <?php echo $row['blog_date'] ?></p></div>
               </div>
               <div class="col-6 col-md-6 col-lg-6">
                  <div class="">
                 <article id="post<?php echo $row['id']?>">
                  <ul class="list-unstyled d-flex float-end">
                    <li class="p-2"><i class="<?php echo $likeClass?> fa-thumbs-up" onclick="setLikeDislike('like','<?php echo $row['id']?>')" id="like_<?php echo $row['id']?>"></i> <span id="like"><?php echo $row['like_count']?></span></li>
                    <li class="p-2"><i class="<?php echo $dislikeClass?> fa-thumbs-down" onclick="setLikeDislike('dislike','<?php echo $row['id']?>')" id="dislike_<?php echo $row['id']?>"></i> <span id="dislike"><?php echo $row['dislike_count']?></span></li>
                  </ul>
                 </article>    
            </div> 
               </div>
           </div>
            

            
            
            <div>
            <div>
                <p class="text-center m-0"><?php echo $row['blog_description'] ?></p>
            </div>
            <div class="pt-2 pb-2">
                <p class="text-center"><span>Rs. <?php echo $row['amount_work'] ?> | </span> <span><?php echo $row['pincode'] ?>, <?php echo $row['city'] ?>, <?php echo $row['state'] ?>, <?php echo $row['country'] ?></span></p>
            </div>
             
            <style>
                .btn-success1 {
    color: #fff;
    background-color: #198754;
 
    font-size: 20px;
    border-radius: 50%;
    width: 45px;
    height: 44px;
    text-align: center;
    padding: 5px;

}
            </style>
             <div class="pt-4">
                <p class="text-center"><b>Share Article:</b></p>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li class="p-2"><a href="" class="btn btn-success1 "><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="p-2"><a href="" class="btn btn-success1 "><i class="fa-brands fa-instagram"></i></a></li>
                    <li class="p-2"><a href="" class="btn btn-success1 "><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="p-2"><a href="" class="btn btn-success1 "><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
                <!-- <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="https://covisorinfotech.github.io/profile/blog-details.html" aria-label="Recipients username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="fa-regular fa-copy"></i></span>
                  </div> -->
             </div>

            </div>
            </div>

            <div style="background: #fff;" class="mt-4 p-4">


                <div class="pt-4">
                    <div>
                        <h4>Leave a Reply</h4>
                        <div><span></span></div>
                    </div>
                    
                    <div>
                        <?php $id=$_GET['id']; ?>
                        <form action="sql-query.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data" required>
                            <div class="row">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name" required>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email" required>
                            </div>    
                            <div class="mb-3 col-md-12 col-lg-12">
                                <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" placeholder="Comment" rows="3" required></textarea>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                               <button type="submit" name="add_comment" class="btn btn-primary btn-ls">Post Comment</button>
                            </div>
                          </div>
                              
                        </form>
                    </div>

                    <div>
                    <div>
                        <h4>One Comment</h4>
                        <div><span></span></div>
                    </div>
                </div>

                <div>
                <?php
                    $id=$_GET['id'];
                    $sql_com =  "SELECT * FROM blog_comment where adminuser_id='$adminuser_id' and bolg_id='$id' ORDER BY id DESC limit 5";
                    $res_com = mysqli_query($db, $sql_com);
                    while ($row_com= mysqli_fetch_assoc($res_com)) {
                    ?>
                    <div class="d-flex">
                        <!-- <div><img src="" data-lazy="true" width="50" height="50" class="avatar rounded-circle loaded" alt="Avatar" style=""></div> -->
                        <div class="pe-4">
                            <p><b><?php echo $row_com['name'] ?></b> <i><?php echo $row_com['comment_date'] ?></i></p>
                            <p><?php echo $row_com['comment'] ?></p></div>
                    </div>
                    <?php
                    }
                    ?>
                </div>

                </div>
            </div>


        </div>
        <div class="col-md-4 col-lg-4 pt-4">
            <style>
                .p-box{    
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;}
            </style>
            <div>
                <div>
                    <div>
                        <h3>Recent posts</h3>
                        <div><span></span></div>
                    </div>
                    <?php
                    $sql_blog =  "SELECT * FROM blog ORDER BY id DESC limit 5";
                    $res_blog = mysqli_query($db, $sql_blog);
                    while ($row_blog= mysqli_fetch_assoc($res_blog)) {
                    ?>
                    <div class="pt-4">
                    <a href="blog-details.php?id=<?php echo $row_blog['id'] ?>" style="text-decoration: none;color: #41464b;">    
                    <div class="row">
                        <div class="col-4 col-md-4 col-lg-4" style="background-image: url(admin/images/blog/<?php echo $row_blog['blog_image'] ?>);background-position: center;background-size: cover;background-repeat: no-repeat;">
                        </div>
                        <div class="col-8 col-md-8 col-lg-8">
                            <div><h5><?php echo $row_blog['blog_title'] ?></h5></div>
                            <div><p><?php echo $row['name_client'] ?></p> <p><?php echo $row['ratings_client'] ?></p></div>
                            <div class="p-box"><p class="cut-text"><?php echo $row_blog['blog_description'] ?></p></div>
                            <div><p><span>Rs. <?php echo $row['amount_work'] ?> | </span> <span><?php echo $row['pincode'] ?>, <?php echo $row['city'] ?>, <?php echo $row['state'] ?>, <?php echo $row['country'] ?></span></p></div>
                        </div>
                    </div>
                    </a>
                    </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
            
       </div>
        </div>
    </div>
    </div>
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














<script>
    var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>


<script>
    $(document).ready(function() {
        $('.linkBtn').click(function() {
            console.log('aaa');
            // $(this).toggleClass('active');
            // $('.linkBtn').not(this).removeClass('active');
            $(this).parent().find('.meroxPanel').slideToggle();
            $('.linkBtn').not(this).parent().find('.meroxPanel').slideUp();
            $(this).toggleClass('active');
            $('.linkBtn').not(this).removeClass('active');
        });
        $('.m_desktopUL li.desktopMenuItem').hover(function() {
            $(this).addClass('active');
            $('.m_desktopUL li.desktopMenuItem').not(this).removeClass('active');
        });
        $(".m_desktopUL li.desktopMenuItem").mouseleave(function() {
            $(this).removeClass('active');
        });
    });
</script>



<script>

var mySidebar = document.getElementById("mySidebar");

function w3_open() {
if (mySidebar.style.display === 'block') {
mySidebar.style.display = 'none';
} else {
mySidebar.style.display = 'block';
}
}

// Close the sidebar with the close button
function w3_close() {
mySidebar.style.display = "none";
}

// var button = document.querySelector('.ph-menu');
// var items = document.querySelector('.phone-pc');
// var link = document.getElementsByTagName('a');

// button.addEventListener('click', function() {
//   items.classList.toggle('opened');
// }, false);

// for (var i = 0; i < link.length; i++) {
//   link[i].addEventListener('click', function(e) {
//     e.preventDefault();
//     items.classList.remove('opened');
//   }, false);
// }

</script>




<script>
$(".list a.menuitem").click(function(){
  $(this).siblings(".active").removeClass("active");
  $(this).addClass("active");
});
  
</script>




 <script>
    $(window).scroll(function(){
      if ($(this).scrollTop() > 120) {
          $('.header').addClass('fixed');
      } else {
          $('.header').removeClass('fixed');
      }
});
 </script>



<!-- <script>
    window.onscroll = function() {myFunction()};
    
    var header = document.getElementById("head-phone");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
    </script> -->



    <script>
	  function setLikeDislike(type,id){
		  jQuery.ajax({
			  url:'setLikeDislike.php',
			  type:'post',
			  data:'type='+type+'&id='+id,
			  success:function(result){
				  result=jQuery.parseJSON(result);
				  if(result.opertion=='like'){
					  jQuery('#like_'+id).removeClass('far');
					  jQuery('#like_'+id).addClass('fas');
					  jQuery('#dislike_'+id).addClass('far');
					  jQuery('#dislike_'+id).removeClass('fas');
				  }
				  if(result.opertion=='unlike'){
					  jQuery('#like_'+id).addClass('far');
					  jQuery('#like_'+id).removeClass('fas');
				  }
				  
				  if(result.opertion=='dislike'){
					   jQuery('#dislike_'+id).removeClass('far');
					   jQuery('#dislike_'+id).addClass('fas');
					   jQuery('#like_'+id).addClass('far');
					   jQuery('#like_'+id).removeClass('fas');
				  }
				  if(result.opertion=='undislike'){
					  jQuery('#dislike_'+id).addClass('far');
					  jQuery('#dislike_'+id).removeClass('fas');
				  }
				  
				  
				  jQuery('#post'+id+' #like').html(result.like_count);
				  jQuery('#post'+id+' #dislike').html(result.dislike_count);
			  }
			  
		  });
	  }
	  </script>




</body>

</html>