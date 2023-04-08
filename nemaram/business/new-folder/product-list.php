<?php 
include("config.php"); 
session_start();
$admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where username='$admin_user'"));
$adminuser_id = $row['id']; 
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
</style>  

<section id="profile-head" style="background-color: #2b2a2a;">
<div class="container"> 
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

<div class="col-md-8 col-lg-8 p-0 m-auto d-none d-md-block d-lg-block">  
<ul class="d-flex m-auto list-unstyled float-end" id="head-menu-blog">
  <li class="nav-item">
    <a class="nav-link active" href="index.php#contact"><i class="fa-regular fa-address-card m-auto"></i> Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php#business"><i class="fa-solid fa-briefcase m-auto"></i> Business</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php#about"><i class="fa-solid fa-user m-auto"></i> About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php#blog"><i class="fa-brands fa-blogger-b m-auto"></i> Blog</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php#connections"><i class="fa-solid fa-share-from-square m-auto"></i> Connections</a>
  </li>
</ul>
</div>

</div>
    </div>
</section>



<section style="padding-top: 80px;">
        <div class="container">
        <div class="row">
            <div class="col-md-2 col-lg-2 pb-2">
                <div>
                    <select name="sort" id="sort" class="form-control">
                        <option value="0">All of the</option>
                        <option value="marketplace">marketplace</option>
                        <option value="authors">authors</option>
                        <option value="legal">legal</option>
                        <option value="discussion">discussion</option>
                        <option value="affiliates">affiliates</option>
                        <option value="miscellaneous">miscellaneous</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2 col-lg-2 pb-2">
                <div>
                    <select name="category" id="category" class="form-control">
                        <option value="0">All of the</option>
                        <option value="marketplace">Catagories</option>
                        <option value="authors">Shown</option>
                        <option value="legal">here</option>
                        <option value="discussion">which are</option>
                        <option value="affiliates">added</option>
                        <option value="miscellaneous">by the user</option>
                        <option value="ttttt">ttttt</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 pb-2">
                <div>
                    <select name="filter" id="filter" class="form-control">
                        <option value="0">Filter</option>
                        <option value="marketplace">marketplace</option>
                        <option value="authors">authors</option>
                        <option value="legal">legal</option>
                        <option value="discussion">discussion</option>
                        <option value="affiliates">affiliates</option>
                        <option value="miscellaneous">miscellaneous</option>
                        <option value="ttttt">ttttt</option>
                    </select>
                </div>
            </div>
            <div class="col-md-5 col-lg-5 pb-2">
                <div class="form-outline">
                    <input type="search" id="live_search" class="form-control" placeholder="Search" aria-label="Search" />
                </div>
            </div>
        </div>
    </div>
</section>
 
 
 
<section>
<style>
.img-box {
    border: 1px solid #a5a5a5;
    border-radius: 5px;
    padding: 8px;
    background-color: white;
}
</style>      
<div class="container pt-4 pb-4">
<div>
    <div class="row" id="show_data">
        <?php
        $sqlt =  "SELECT * FROM products";
        $rest = mysqli_query($db, $sqlt);
        while ($rowt= mysqli_fetch_assoc($rest)) {
        ?>
       <div class="col-6 col-md-3 col-lg-3 pb-2">
            <div class="text-center img-box">
                <a href="product-details.php?id=<?php echo $rowt['id'] ?>">
                    <img class="" src="admin/images/products/<?php echo $rowt['product_image'] ?>" width="100%">
                    <p class="m-0"><span style="margin-top: 1%; font-size: 26px;"><?php echo $rowt['product'] ?></span> </p>
                    <p class="m-0"><span style="font-size: 20px;">₹ <?php echo $rowt['price'] ?></span></p>
               </a>
            </div>
        </div>
        <?php
        }
        ?>    
             <!--<div class="row" id="show_data">Search Results</div>-->
    </div>
    
</div>
</section> 
 








<footer>
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

<style>
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
    <a class="nav-link active" data-bs-toggle="pill" href="index.php#contact"><div class="d-flex-nr text-center"><p><i class="fa-regular fa-address-card m-auto"></i></p><p class="text">Contact</p></div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="index.php#business"><div class="d-flex-nr text-center"><p><i class="fa-solid fa-briefcase m-auto"></i></p><p class="text">Business</p></div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="index.php#about"><div class="d-flex-nr text-center"><p><i class="fa-solid fa-user m-auto"></i></p><p class="text">About</p></div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="index.php#blog"><div class="d-flex-nr text-center"><p><i class="fa-brands fa-blogger-b m-auto"></i></p><p class="text">Blog</p></div></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="index.php#connections"><div class="d-flex-nr text-center"><p><i class="fa-solid fa-share-from-square m-auto"></i></p><p class="text">Connections</p></div></a>
  </li>
</ul>
    </div>
</div>










<script type="text/javascript">
$(document).ready(function(){
    
$('#sort').on('change',function(){ 
var sort = $(this).val();

$.ajax({
url:"fatch.php",
type:"POST",
data:{sort:sort},

beforeSend:function(){
$("#show_data").html("<span>Working...</span>");
},
success:function(data){
$("#show_data").html(data);
}  

});
});

$('#category').on('change',function(){ 
var category = $(this).val();

$.ajax({
url:"fatch.php",
type:"POST",
data:{category:category},

beforeSend:function(){
$("#show_data").html("<span>Working...</span>");
},
success:function(data){
$("#show_data").html(data);
}  

});
});

$('#filter').on('change',function(){ 
var filter = $(this).val();

$.ajax({
url:"fatch.php",
type:"POST",
data:{filter:filter},

beforeSend:function(){
$("#show_data").html("<span>Working...</span>");
},
success:function(data){
$("#show_data").html(data);
}  
});

});


$("#live_search").keyup(function(){
var search = $(this).val();

$.ajax({
url:"searchpro.php",
type:"POST",
data:{search:search},

beforeSend:function(){
$("#show_data").html("<span>Working...</span>");
},
success:function(data){
$("#show_data").html(data);
}  
});

});



});
</script>


</body>

</html>