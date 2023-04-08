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
 
    <!--<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>-->
    <style>
    a{text-decoration: none;}
 </style>
 
  </head>
    
<body>

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
span {color: #000000;}
a{color: #212529;text-decoration: none;}
img{width: 100%;}
.side-img li {padding: 6px;}

@media only screen and (min-width: 600px){
.slide-img {align-self: flex-start;position: sticky;top: 84px;}
#product-de{padding-top: 70px;}
.nav-pro {padding: 4px!important;}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff!important;
    background-color: #ffc107!important;
}
}

</style>


<style>
 /* #owl-carousel-nr{padding-top: 80px;}*/
#owl-carousel-nr .owl-nav{margin-top: -49px;
    position: sticky;
    padding: 13px;}

    #owl-carousel-nr .owl-prev{    color: rgb(255, 255, 255);
        background-color: #ffc71f;
    position: inherit;}
    #owl-carousel-nr .owl-next{color: rgb(255, 255, 255);
        background-color: #ffc71f;
    position: inherit;
    float: right;}
    .owl-carousel .owl-next,
.owl-carousel .owl-prev {
  width: 30px;
  height: 30px;
	line-height: 50px;
	border-radius: 50%;
  position: absolute;
  top: 30%;
	font-size: 20px;
  color: #fff!important;
	border: 1px solid #ddd;
	text-align: center;
}
</style>




<?php
    $id=$_GET['id'];
    $row= mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM products where id='$id'")); 
    ?>  
    <section id="product-de">
        <div class="product-box">
            <div class="pb-4">
                <div class="row m-auto">
                    <div class=" col-md-6 col-lg-5 col-xl-5 col-xxl-5 p-0 slide-img">
                        <div class="row m-0">
                            <div class="col-md-2 col-lg-2 col-xl-2 col-xxl-2 d-none d-sm-none d-md-block d-lg-block">
                                <ul class="list-unstyled side-img  nav nav-pills" id="pills-tab" role="tablist">
                                    <!-- <li class=" active"><img src="images/prd1.jpg" alt="" width="100%"></li> -->
                                    <li class="nav-item"><div class="nav-link nav-pro active" id="pills-a-tab" data-bs-toggle="pill" data-bs-target="#pills-a" type="button" role="tab" aria-controls="pills-a" aria-selected="true"><img src="admin/images/products/<?php echo $row['product_image'] ?>" alt="" width="100%"></div></li>
                                   
                                    <?php if(isset($row['product_image2'])) { ?><li class="nav-item"><div class="nav-link nav-pro" id="pills-b-tab" data-bs-toggle="pill" data-bs-target="#pills-b" type="button" role="tab" aria-controls="pills-b" aria-selected="false"><img src="admin/images/products2/<?php echo $row['product_image2'] ?>" alt="" width="100%"></div></li><?php } ?>
                                    <?php if(isset($row['product_image3'])) { ?><li class="nav-item"><div class="nav-link nav-pro" id="pills-c-tab" data-bs-toggle="pill" data-bs-target="#pills-c" type="button" role="tab" aria-controls="pills-c" aria-selected="false"><img src="admin/images/products3/<?php echo $row['product_image3'] ?>" alt="" width="100%"></div></li><?php } ?>
                                    <?php if(isset($row['product_image4'])) { ?><li class="nav-item"><div class="nav-link nav-pro" id="pills-d-tab" data-bs-toggle="pill" data-bs-target="#pills-d" type="button" role="tab" aria-controls="pills-d" aria-selected="false"><img src="admin/images/products4/<?php echo $row['product_image4'] ?>" alt="" width="100%"></div></li><?php } ?>
                                    <?php if(isset($row['product_image5'])) { ?><li class="nav-item"><div class="nav-link nav-pro" id="pills-e-tab" data-bs-toggle="pill" data-bs-target="#pills-e" type="button" role="tab" aria-controls="pills-e" aria-selected="false"><img src="admin/images/products5/<?php echo $row['product_image5'] ?>" alt="" width="100%"></div></li><?php } ?>
                                    

                                </ul>
                            </div>
                            <div class="col-md-10 col-lg-10 col-xl-10 col-xxl-10 p-0">
                                <div class="tab-content d-none d-sm-none d-md-block d-lg-block" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-a" role="tabpanel" aria-labelledby="pills-a-tab"><img src="admin/images/products/<?php echo $row['product_image'] ?>" alt="" width="100%"></div>
                                    <?php if(isset($row['product_image2'])) { ?><div  class="tab-pane fade" id="pills-b" role="tabpanel" aria-labelledby="pills-b-tab"><img src="admin/images/products2/<?php echo $row['product_image2'] ?>" alt="" width="100%"></div><?php } ?>
                                    <?php if(isset($row['product_image3'])) { ?><div class="tab-pane fade" id="pills-c" role="tabpanel" aria-labelledby="pills-c-tab"><img src="admin/images/products3/<?php echo $row['product_image3'] ?>" alt="" width="100%"></div><?php } ?>
                                    <?php if(isset($row['product_image4'])) { ?><div class="tab-pane fade" id="pills-d" role="tabpanel" aria-labelledby="pills-d-tab"><img src="admin/images/products4/<?php echo $row['product_image4'] ?>" alt="" width="100%"></div><?php } ?>
                                    <?php if(isset($row['product_image5'])) { ?><div class="tab-pane fade" id="pills-e" role="tabpanel" aria-labelledby="pills-e-tab"><img src="admin/images/products5/<?php echo $row['product_image5'] ?>" alt="" width="100%"></div><?php } ?> 
                                </div>


                                <div id="owl-carousel-nr" class="owl-carousel d-block d-sm-block d-md-none d-lg-none" style="padding-top: 51px;">
                                    <div class="item"><img src="admin/images/products/<?php echo $row['product_image'] ?>" alt="" ></div>
                                    <?php if(isset($row['product_image2'])) { ?><div class="item"><img src="admin/images/products2/<?php echo $row['product_image2'] ?>" alt="" ></div><?php } ?>
                                    <?php if(isset($row['product_image3'])) { ?><div class="item"><img src="admin/images/products3/<?php echo $row['product_image3'] ?>" alt="" ></div><?php } ?>
                                    <?php if(isset($row['product_image4'])) { ?><div class="item"><img src="admin/images/products4/<?php echo $row['product_image4'] ?>" alt="" ></div><?php } ?>
                                    <?php if(isset($row['product_image5'])) { ?><div class="item"><img src="admin/images/products5/<?php echo $row['product_image5'] ?>" alt="" ></div><?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                         <div class="container-sirvi">
                            <div class="mb-4">
                                <div class="row mb-1 coat"><span class="col-10 col-sm-10 col-md-10 col-lg-10">
                                    <h2 class="m-auto"><?php echo $row['product'] ?></h2>
                                    <p class="pt-2"><b>₹ <?php echo $row['price'] ?></b> <strike class="ps-2"><?php echo $row['discount'] ?></strike></p>
                                </div>
                                <div class="mb-1"><p><?php echo $row['description'] ?></p></div>
                            
                               




                           


                                <style>
                                    .accordion-button{background-color: #ffc71f;margin-bottom: 11px;}
                                    .accordion-button:focus{border: none; box-shadow: none;}
                                    .accordion-button:not(.collapsed) { color: #000000;background-color: #ffc107;}

                                </style>
                                <div class="mt-4 p-4" style="background: linear-gradient(to top left, #ffd692 0%, #f7f6f4 100%);">

                                    <div class="accordion accordion-flush" id="accordionFlushExample">

     
     <?php
  $no="1";
  $sqla =  "SELECT * FROM products_qusan_anser where product_tokan='".$row['product_tokan']."'";
  $resa = mysqli_query($db, $sqla);
  while ($rowa= mysqli_fetch_assoc($resa)) {
  ?>
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
           <h2 class="accordion-header" id="flush-heading<?php echo $no; ?>">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $no; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $no; ?>">
           <?php echo $rowa['policy_qu'] ?>
           </button>
           </h2>
          <div id="flush-collapse<?php echo $no; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $no; ?>" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body">  <?php echo $rowa['policy_an'] ?></div>
          </div>
          </div>
    </div>
    <?php
      $no++;
      }
      ?>
                                    </div>
                                       
                                </div>


                           
                           
                            <hr>
                        </div>





                        <div class="add-cart-pc">
                           <?php
                            $row_pro=mysqli_fetch_assoc(mysqli_query($db, "select * from pro_connect where adminuser_id='".$row['adminuser_id']."'"));
                            ?>
                            <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6"><a href="tel:<?php echo $row_pro['phone'] ?>" class="btn  bg-warning w-100 p-2">Enquire Now</a></div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6"><button class="btn bg-warning w-100 p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Online </button></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

 
    




<section class="mt-4 mb-5">
    <div class="container pb-5">
        <div class="p-4" style="background: linear-gradient(to top left, #ffd692 0%, #f7f6f4 100%);">
            <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Product Attributes</th>
                  </tr>
                </thead>
                <tbody>
                <?php
  $patt =  "SELECT * FROM product_attributes where product_tokan='".$row['product_tokan']."'";
  $patt = mysqli_query($db, $patt);
  while ($pat= mysqli_fetch_assoc($patt)) {
  ?>
                <tr>
                    <th scope="row"><?php echo $pat['attributes_title'] ?></th>
                    <td><?php echo $pat['attributes_name'] ?></td>
                  </tr>
               <?php
  }
  ?>
                  
                </tbody>
              </table>
        </div>
    </div>
</section>


  



 



<style>
@media only screen and (min-width: 600px) {
    .modal-dialog {
      margin-right: 0 !important;
      margin-top: 0 !important;
  
  }
  .modal-footer{display: block;}
  #modal-1 .modal-dialog, .modal-content{height: 100% !important;}

}
  </style>
  
  <div id="modal-1">
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title text-center" id="exampleModalLabel">Book Online </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  
                  <div class="bg-dark text-center text-white p-2"><p class="m-0">Order Now & Get Free Shipping</p></div>
                  <div class="row mt-4">
                      <!-- <div class="col-3 col-sm-3 col-md-3 col-lg-3"><img src="images/prd1.jpg" width="100%" alt=""></div>
                      <div class="col-9 col-sm-9 col-md-9 col-lg-9">
                          <div>
                              <div class="float-start"><p>Rich Olive Green Plain Basic Tufted Round Area Carpet<br>
                              <span>3X3ft</span></p>
                              </div>
                              <div class="float-end"><i class="fa-solid fa-xmark"></i></div>
                          </div>
                          <div>
                              <div class="float-start">
                                  <form action="">
                                  <div>
                                      <button class="border border-secondary" aria-hidden="true">−</button>
                                      <input type="number" name="qty" id="qty" min="1" max="10" step="1" value="1">
                                      <button class="border border-secondary" aria-hidden="true">+</button>
                                  </div>
                              </form>
                          </div>
                              <div class="float-end"><span><strike class="text-secondary">₹ 35,988</strike> ₹ 35,39</span></div>
                          </div>
                      </div> -->
                      <div class="col-md-6 col-lg-6 p-2">
                      <!-- <label for="disabledTextInput" class="form-label">Name</label> -->
                      <input type="text" id="disabledTextInput" class="form-control" name="name" placeholder="Name">
                      </div>
                      
                      <div class="col-md-6 col-lg-6 p-2">
                      <!-- <label for="disabledTextInput" class="form-label">Number</label> -->
                      <input type="text" id="disabledTextInput" class="form-control" name="number" placeholder="Number">
                      </div>
                      
                      <div class="col-md-6 col-lg-6 p-2">
                      <!-- <label for="disabledTextInput" class="form-label">State</label> -->
                      <input type="text" id="disabledTextInput" class="form-control" name="state" placeholder="State">
                      </div>

                      <div class="col-md-6 col-lg-6 p-2">
                      <!-- <label for="disabledTextInput" class="form-label">City</label> -->
                      <input type="text" id="disabledTextInput" class="form-control" name="city" placeholder="City">
                      </div>

                      <div class="col-md-6 col-lg-6 p-2">
                      <!-- <label for="disabledTextInput" class="form-label">Pancode</label> -->
                      <input type="text" id="disabledTextInput" class="form-control" name="pancode" placeholder="Pancode">
                      </div>

                      <div class="col-md-6 col-lg-6 p-2">
                      <!-- <label for="disabledTextInput" class="form-label">Adderss</label> -->
                      <input type="text" id="disabledTextInput" class="form-control" name="Adderss" placeholder="Adderss">
                      </div>

                      <div class="col-md-12 col-lg-12 p-2">
                        <img src="images/enq.gif" alt="" width="100%">
                      </div>

                      </div>
                  
              
              </div>
              <div class="modal-footer">
                  <!-- <div class="d-flex w-100">
                      <input type="text" class="form-control" placeholder="Discount Coupon" style="margin-right: 20px;"> 
                      <button type="button" class="btn btn-dark">Apply</button>
                   </div>
                  
                  <div class="border-top border-secondary mt-4 pt-3 w-100">
                      <div class="float-start"><h5><b>SUBTOTAL</b></h5></div>
                      <div class="float-end"><span><strike class="text-secondary">₹ 35,988</strike> ₹ 35,39</span></div>
                  </div> -->
                 <button type="button" class="btn btn-dark w-100 text-white" data-bs-toggle="Modal" data-bs-target="ModalLabel2"> <a href="checkouts.html"><span><span class="text-white">Send</span></span><span class="pay-opt-icon"></span></a></button>
                <!-- <button type="button" class="btn btn-danger w-100">Pay Via Credit/Debit Card/Others</button>
                <p class="" style="text-align:center!important">Continue Shopping</p> -->
              </div>
            </div>
          </div>
        </div>
  </div>
  






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
    $('#owl-carousel-nr').owlCarousel({
    loop:true,
    // margin:10,
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
            items:1,
            nav:true,
            loop:false
        }
    }
});
</script>
</body>

</html>