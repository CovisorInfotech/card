<?php 
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
 
    
<body class="">

<section id="profile-head" class="position-fixed w-100" style="z-index: 100;
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
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="50" height="50" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m127.08 44.32-62-40a2 2 0 0 0-2.16 0l-62 40a2 2 0 0 0 2.16 3.36L8 44.51V122a2 2 0 0 0 2 2h108a2 2 0 0 0 2-2V44.51l4.92 3.17A1.94 1.94 0 0 0 126 48a2 2 0 0 0 1.08-3.68zM116 42v78H12V41.93L64 8.38l52 33.55V42z" fill="#ffffff" data-original="#000000" class=""></path><path d="M73 85a10 10 0 0 0 10-10 2 2 0 0 0-2-2h-8a2 2 0 0 0 0 4h5.66A6 6 0 1 1 73 69a5.92 5.92 0 0 1 2.59.59A2 2 0 1 0 77.32 66 9.9 9.9 0 0 0 73 65a10 10 0 0 0 0 20zM38 81H28V67a2 2 0 0 0-4 0v16a2 2 0 0 0 2 2h12a2 2 0 0 0 0-4zM50 65a10 10 0 1 0 10 10 10 10 0 0 0-10-10zm0 16a6 6 0 1 1 6-6 6 6 0 0 1-6 6zM96 85a10 10 0 1 0-10-10 10 10 0 0 0 10 10zm0-16a6 6 0 1 1-6 6 6 6 0 0 1 6-6z" fill="#ffffff" data-original="#000000" class=""></path></g></svg>
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
.dropdown > a::after, .dropdown.toggle > label::after {
  content: "";
  float: right;
  margin: 15px 15px 0 0;
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 10px solid #CCC;
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
  border-bottom: 10px solid #FFF;
  margin: -10px 0 0 30px;
}

.dropdown.hover:hover li, .dropdown.toggle > input:checked ~ ul li {          
  height: 40px;
}
.dropdown.hover:hover li:first-child, .dropdown.toggle > input:checked ~ ul li:first-child {
  padding-top: 15px;
}

        </style>
      
      <div class="dropdown hover">
      <a href="#" style="background-color: #0000;" class="text-white"><?php echo $row_adm['username'] ?></a>
      <ul>
        <li><a href="#">Item</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Text</a></li>
        <li><a href="admin/dashboard.php">Account</a></li>
        <li><a href="logout.php">Sign Out</a></li>
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



<section>
        <div style="padding-top: 56px;position: fixed;width: 100%;z-index: 50;">
        <div style="background-color: #f1f1f1;">
        <div class="container">
        <div class="row justify-content-center p-2">
          
           <div class="col-12 col-md-5 col-lg-5 pt-1 pb-1">
                <div class="form-outline">
                    <input type="search" id="live_search" class="form-control" placeholder="Search" aria-label="Search" />
                </div>
            </div>

              <div class="col-6 col-md-2 col-lg-2 pt-1 pb-1">
                <div>
                    <select name="sort" id="sort" class="form-control">
                        <option value="0">Fliter</option>
                        <option value="az">A - Z</option>
                        <option value="za">Z - A</option>
                        <option value="lh">price low to high</option>
                        <option value="hl">price high to low</option>
                    </select>
                </div>
            </div>
           
            <div class="col-6 col-md-2 col-lg-3 pt-1 pb-1">
                <div>
                    <select name="category" id="category" class="form-control">
                       <option>Category</option>
                       <?php 
                       $sql_cat =  "SELECT * FROM cat_product";
                       $res_cat = mysqli_query($db, $sql_cat);
                       while ($row_cat = mysqli_fetch_assoc($res_cat)) {
                       ?>
                        <option value="<?php echo $row_cat['product_category'] ?>"><?php echo $row_cat['product_category'] ?></option>
                       <?php
                       }
                       ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
 
 
 
<section class="pt-5">
<style>
.img-box {
    border: 1px solid #a5a5a5;
    border-radius: 5px;
    padding: 8px;
    background-color: white;
}

@media (max-width: 992px)
{
.products-box{padding-top: 135px!important;}
}

@media (min-width: 992px)
{
  .products-box{padding-top: 90px!important;}
}

</style>      
<div class="products-box container pb-4">
<div>
    <div class="row" id="show_data">
        <?php
        $sqlt =  "SELECT * FROM products";
        $rest = mysqli_query($db, $sqlt);
        while ($rowt= mysqli_fetch_assoc($rest)) {
        ?>
       <div class="col-6 col-md-3 col-lg-3 pb-2">
            <div class="text-center img-box">
                <a href="product-details.php?id=<?php echo $rowt['id'] ?>" class="text-decoration-none" style="color:black;">
                    <img class="" src="admin/images/products/<?php echo $rowt['product_image'] ?>" width="100%">
                    <p class="m-0"><span style="margin-top: 1%; font-size: 20px;"><?php echo $rowt['product'] ?></span> </p>
                    <p class="m-0"><span style="font-size: 18px;">₹ <?php echo $rowt['price'] ?></span></p>
               </a>
            </div>
        </div>
        <?php
        }
        ?>    
            
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
  <!-- <li class="nav-item">
    <a class="nav-link" href="connections.php"><div class="d-flex-nr text-center"><p class="mb-0"><i class="fa-solid fa-share-from-square m-auto"></i></p><p class="text">Connections</p></div></a>
  </li> -->
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