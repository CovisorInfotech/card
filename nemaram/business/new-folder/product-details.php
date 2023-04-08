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
    
    <!--<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>-->
   
<style>
a{color: #212529;text-decoration: none;}
.accordion-item{background-color: #ffffff00;}
.footer-bottom address {
    font-size: 12px;
    line-height: 28px;
    margin-bottom: 22px;
}
.footer{
    color: #ffffff;
}
.site-footer ul li span {
    color: #ffffff!important;
    font-size: 12px;
}
.site-footer h3 span {
    color: #ffc71f!important;
}
.col-footer {
    width: 25%;
}

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

</head>
    
<body>
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
         <span type="button" class="dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
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
    

   


<style>
span {color: #000000;}
a{color: #212529;text-decoration: none;}
img{width: 100%;}
.side-img li {padding: 6px;}

@media only screen and (min-width: 600px){
.slide-img {align-self: flex-start;position: sticky;top: 84px;}
#product-de{padding-top: 70px;}
.nav-link {padding: 4px!important;}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff!important;
    background-color: #ffc107!important;
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
                                    <li class="nav-item"><div class="nav-link active" id="pills-a-tab" data-bs-toggle="pill" data-bs-target="#pills-a" type="button" role="tab" aria-controls="pills-a" aria-selected="true"><img src="admin/images/products/<?php echo $row['product_image'] ?>" alt="" width="100%"></div></li>
                                    <li class="nav-item"><div class="nav-link" id="pills-b-tab" data-bs-toggle="pill" data-bs-target="#pills-b" type="button" role="tab" aria-controls="pills-b" aria-selected="false"><img src="admin/images/products/<?php echo $row['product_image'] ?>" alt="" width="100%"></div></li>
                                    <li class="nav-item"><div class="nav-link" id="pills-c-tab" data-bs-toggle="pill" data-bs-target="#pills-c" type="button" role="tab" aria-controls="pills-c" aria-selected="false"><img src="admin/images/products/<?php echo $row['product_image'] ?>" alt="" width="100%"></div></li>
                                    <li class="nav-item"><div class="nav-link" id="pills-d-tab" data-bs-toggle="pill" data-bs-target="#pills-d" type="button" role="tab" aria-controls="pills-d" aria-selected="false"><img src="admin/images/products/<?php echo $row['product_image'] ?>" alt="" width="100%"></div></li>
                                    <li class="nav-item"><div class="nav-link" id="pills-e-tab" data-bs-toggle="pill" data-bs-target="#pills-e" type="button" role="tab" aria-controls="pills-e" aria-selected="false"><img src="admin/images/products/<?php echo $row['product_image'] ?>" alt="" width="100%"></div></li>
                                    
                                </ul>
                            </div>
                            <div class="col-md-10 col-lg-10 col-xl-10 col-xxl-10 p-0">
                                <div class="tab-content d-none d-sm-none d-md-block d-lg-block" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-a" role="tabpanel" aria-labelledby="pills-a-tab"><img src="admin/images/products/<?php echo $row['product_image'] ?>" alt="" width="100%"></div>
                                    <div  class="tab-pane fade" id="pills-b" role="tabpanel" aria-labelledby="pills-b-tab"><img src="admin/images/products/<?php echo $row['product_image'] ?>" alt="" width="100%"></div>
                                    <div class="tab-pane fade" id="pills-c" role="tabpanel" aria-labelledby="pills-c-tab"><img src="admin/images/products/<?php echo $row['product_image'] ?>" alt="" width="100%"></div>
                                    <div class="tab-pane fade" id="pills-d" role="tabpanel" aria-labelledby="pills-d-tab"><img src="admin/images/products/<?php echo $row['product_image'] ?>" alt="" width="100%"></div>
                                    <div class="tab-pane fade" id="pills-e" role="tabpanel" aria-labelledby="pills-e-tab"><img src="admin/images/products/<?php echo $row['product_image'] ?>" alt="" width="100%"></div> 
                                </div>


                                <div id="owl-carousel-nr" class="owl-carousel d-block d-sm-block d-md-none d-lg-none">
                                    <div class="item"><img src="images/prd1.jpg" alt="" ></div>
                                    <div class="item"><img src="images/prd1.jpg" alt="" ></div>
                                    <div class="item"><img src="images/prd1.jpg" alt="" ></div>
                                    <div class="item"><img src="images/prd1.jpg" alt="" ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                         <div class="container-sirvi">
                            <div class="mb-4">
                                <div class="row mb-1 coat"><span class="col-10 col-sm-10 col-md-10 col-lg-10">
                                    <h2 class="m-auto"><?php echo $row['product'] ?></h2>
                                </div>
                                <div class="mb-1"><span class="">B.A.M.S</span><br></div>
                                <div class="mb-2"><span class="">Janakpuri</span></div>

                                <style>
                                   .star-icon svg{margin-top: -6px;}
                                </style>
                                <div class="mb-3"><span class="me-4">4.0</span><span class="me-4 star-icon"><svg width="100px" height="100%" viewBox="0 0 1000 200"><polygon id="star749" points="100,10 40,198 190,78 10,78 160,198" fill="#FFE372"></polygon><defs><clipPath id="stars749"><use xlink:href="#star749"></use><use xlink:href="#star749" x="21%"></use><use xlink:href="#star749" x="41%"></use><use xlink:href="#star749" x="61%"></use><use xlink:href="#star749" x="81%"></use></clipPath></defs><rect width="100%" height="100%" clip-path="url(#stars749)" style="fill: rgb(215, 215, 215); stroke: red; stroke-width: 1; height: 100%; width: 100%;"></rect><rect width="80%" height="100%" clip-path="url(#stars749)" style="fill: rgb(255, 110, 0); height: 100%;"></rect></svg></span><span class="text-white">450 Ratings</span></div>
                                <div class=""><span class="me-4"><span class="" style="background-color: white;padding: 1px 6px 3px 6px;">10 YRS</span></span><span class="me-4"><img src="images/jdvrsl_verified.svg" alt="" style="width:80px;background-color: white;padding: 4px 6px 6px 6px;"></span><span class=""><img src="images/jdvrsl_trusted.svg" alt="" style="width:80px;"></span><span class="badge-jdpay break-line" style="background-image: url(&quot;https://akam.cdn.jdmagicbox.com/images/icontent/newwap/newprot/ctlgjdpay2x.png&quot;);"></span></div>

                              
                                <style>
.foll-icon i{
    background-color: black;
    color: #ffffff!important;
    width: 44px;
    height: 43px;
    padding: 14px;
    border-radius: 50%;
}

 .tx-icon{font-size: 12px;
    color: #ffffff!important;}
                                </style>
                               <div class="row mt-5 foll-icon d-none d-md-block d-lg-block">
                                <div class="col-md-6 col-lg-6">
                                  <div class="row">
                                  <div class="col-3 co-md-3 col-lg-3"><div class="text-center"><span class=""><i class="fa-solid fa-phone text-white"></i></span><br><span class="text-white tx-icon">Call</span></div></div>
                                  <div class="col-3 co-md-3 col-lg-3"><div class="text-center"><span class=""><i class="fa-brands fa-whatsapp text-white"></i></span><br><span class="text-white tx-icon">WhatsApp</span></div></div>
                                  <div class="col-3 co-md-3 col-lg-3"><div class="text-center"><span class=""><i class="fa-regular fa-heart text-white"></i></span><br><span class="text-white tx-icon">Favorite </span></div></div>
                                  <div class="col-3 co-md-3 col-lg-3"><div class="text-center"><span class=""><i class="fa-sharp fa-solid fa-location-dot text-white"></i></span><br><span class="text-white tx-icon">Location</span></div></div>
                                  </div>
                                </div>
                                <div class="col-md-6 col-lg-6"></div>
                               </div>




                            <div class="mt-4 d-block d-md-none d-lg-none"><button type="button" class="btn btn-warning" style="width: 100%;">Enquire Now</button></div>



                                <style>
                                    .accordion-button{background-color: #ffc71f;margin-bottom: 11px;}
                                    .accordion-button:focus{border: none; box-shadow: none;}
                                    .accordion-button:not(.collapsed) { color: #000000;background-color: #ffc107;}

                                </style>
                                <div class="mt-4 p-4" style="background: linear-gradient(to top left, #ffd692 0%, #f7f6f4 100%);">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                Shipping Detail
                                            </button>
                                          </h2>
                                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Return Policy
                                            </button>
                                          </h2>
                                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                Product
                                            </button>
                                          </h2>
                                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                          </div>
                                        </div>
                                      </div>
                                </div>


                           
                           
                            <hr>
                        </div>





                        <div class="d-none d-sm-none d-md-block d-lg-block d-flex add-cart-pc">
                            <div class="row">
                            

                            
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6"><a href="checkouts.html" class="btn  bg-warning w-100 p-2">Enquire Now</a></div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6"><button class="btn bg-warning w-100 p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Online </button></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

 
    




<section class="mt-4 mb-4">
    <div class="container">
        <div class="p-4" style="background: linear-gradient(to top left, #ffd692 0%, #f7f6f4 100%);">
            <table class="table table-borderless">
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
                        S&P 100 component<br>
                        S&P 500 component
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
                        Chris Kempczinski (President & CEO)</td>
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
</section>


  



 

<style>
    .site-footer, .foot-title {
color: #ffffff;
}
.site-footer {
background: #232323;
}
.site-footer .foot-link {
display: inline-block;
padding: 3px 0;
line-height: 22px;
text-decoration: none;
}
.site-footer a, .header-vertical-tpl .footer-default .newsletter-des {
color: #969696;
}
.site-footer .foot-title {
font-size: 13px;
letter-spacing: .05em;
text-transform: uppercase;
font-weight: 700;
padding-bottom: 12px;
margin: 0;
}
</style>
<footer class="site-footer footer-default pt-4 pb-4  d-none d-sm-none d-md-block d-lg-block" role="contentinfo">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                        <div class="col-md-3 col-lg-3">
                            <h3 class="foot-title dropdow-mb"> <span>category</span> </h3>
                            <ul class="list-unstyled">
                                <li> <a href="" title="" class="foot-link"> <span> Rudraksha </span> </a> </li>
                                <li> <a href="" title="" class="foot-link"> <span> Temple & Consecrated  </span> </a> </li>
                                <li> <a href="" title="" class="foot-link"> <span> Yoga Store </span> </a> </li>
                                <li> <a href="" title="" class="foot-link"> <span> Natural Food </span> </a> </li>
                                <li> <a href="" title="" class="foot-link"> <span> Yoga Store </span> </a> </li>
                                
                            </ul>
                        </div>


                        <div class="col-md-3 col-lg-3">
                            <h3 class="foot-title dropdow-mb"> <span>  Information  </span> </h3>
                            <ul class="list-unstyled">
                                <li> <a href="about-us" title="About us" class="foot-link"> <span> About us </span> </a> </li>
                                <li> <a href="terms-of-service" title="Terms &amp; Conditions" class="foot-link"> <span> Terms &amp; Conditions </span> </a> </li>
                                <li> <a href="contact-us" title="Contact Us" class="foot-link"> <span> Contact Us </span> </a> </li>
                                <li> <a href="refund-policy" title="Return &amp; Refund Policy" class="foot-link"> <span> Return Refund Policy </span> </a> </li>
                                <li> <a href="shipping-policy" title="Shipping Policy" class="foot-link"> <span> Shipping Policy </span> </a> </li>
                                
                            
                            </ul>
                        </div>
                        
                        <div class="col-md-3 col-lg-3">
                            <h3 class="foot-title dropdow-mb"> <span> Modes of Payment </span> </h3>
                            <ul class="list-unstyled">
                                <li> <a href="" title="Wall Shelves" class="foot-link"> <span> Cash </span> </a> </li>
                                <li> <a href="" title="Book Shelves" class="foot-link"> <span> Master Card </span> </a> </li>
                                <li> <a href="" title="3D Light Boxes" class="foot-link"> <span> Visa Card </span> </a> </li>
                                <li> <a href="" title="Wooden Wall Hangings" class="foot-link"> <span> Debit Cards </span> </a> </li>
                                </ul>
                        </div>


                <style>
                   .social-icons li a i {    background-color: white;
color: black;
padding: 10px;
border-radius: 50%;
height: 35px;
width: 35px;
margin-right: 15px;}
                </style>
                <div class="col-md-3 col-lg-3">
                    <div class="footer-social">
                        <h3 class="social-title foot-title"> <span> Connect with Us</span> </h3>
                        <div class="groups-block row">
                            <ul class="social-icons list-unstyled d-flex col-md-6 col-lg-6">
                                <li class="facebook"> <a href="http://facebook.com" title="Facebook" target="_blank"> <i class="fa-brands fa-facebook-f"></i> </a> </li>
                                <li class="twitter"> <a href="https://twitter.com" title="Twitter" target="_blank"> <i class="fa-brands fa-twitter"></i> </a> </li>
                                <li class="instagram"> <a href="https://www.instagram.com/" title="Instagram" target="_blank"> <i class="fa-brands fa-instagram"></i> </a> </li>
                                <li class="youtube"> <a href="https://www.youtube.com/" title="YouTube" target="_blank"> <i class="fa-brands fa-youtube"></i> </a> </li>
                            </ul>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <style>
        .payment-methods li img{width: 70%!important;}
    </style>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-lg-6">    
            <address>
                <div> © 2022 VendMart Retail Pvt. Ltd. . All Rights Reserved. </div>
            </address>
            </div>
            <div class="col-md-6 col-lg-6">
            <ul class="payment-methods list-unstyled d-flex float-end">
                <li> <img src="images/visa-logo-png-transparent_x32.png"> </li>
                <li> <img src="images/mastercard_PNG_x32.png"> </li>
                <!-- <li> <img src="images/Maestro_logo-png_x32.png"> </li> -->
                <li> <img src="images/CG_Logo_copy_x32.png"> </li>
                <li> <img src="images/Paytm_logo_PNG_x32.png"> </li>
                <!-- <li> <img src="image/Google-Pay-Logo-Icon-PNG_x32.png"> </li> -->
                <!-- <li> <img src="images/PayPal_logo-png_x32.png"> </li> -->
                <li> <img src="images/PayPal_logo__png_x32.png"> </li>
            </ul>
          </div>
          </div>
        </div>
    </div>
</footer>



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
                <h6 class="modal-title text-center" id="exampleModalLabel">YOUR CART (6)</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  
                  <div class="bg-dark text-center text-white p-2"><p class="m-0">Order Now & Get Free Shipping</p></div>
                  <div class="row mt-4">
                      <div class="col-3 col-sm-3 col-md-3 col-lg-3"><img src="images/prd1.jpg" width="100%" alt=""></div>
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
                      </div>
                      </div>
                  
              
              </div>
              <div class="modal-footer">
                  <div class="d-flex w-100">
                      <input type="text" class="form-control" placeholder="Discount Coupon" style="margin-right: 20px;"> 
                      <button type="button" class="btn btn-dark">Apply</button>
                   </div>
                  
                  <div class="border-top border-secondary mt-4 pt-3 w-100">
                      <div class="float-start"><h5><b>SUBTOTAL</b></h5></div>
                      <div class="float-end"><span><strike class="text-secondary">₹ 35,988</strike> ₹ 35,39</span></div>
                  </div>
                 <button type="button" class="btn btn-dark w-100 text-white" data-bs-toggle="Modal" data-bs-target="ModalLabel2"> <a href="checkouts.html"><span><span class="text-white">BUY IT NOW</span></span><span class="pay-opt-icon"></span></a></button>
                <button type="button" class="btn btn-danger w-100">Pay Via Credit/Debit Card/Others</button>
                <p class="" style="text-align:center!important">Continue Shopping</p>
              </div>
            </div>
          </div>
        </div>
  </div>
  


  <style>
   #modal-2 .modal-dialog{ 
    position: fixed;       
    bottom: 52px;
    width: 95%;
    margin: 9px!important;}



    #share {
	width: 100%;
  	/* margin: 100px auto; */
  	text-align: center;
}

/* buttons */

#share a {
	width: 50px;
  	height: 50px;
  	display: inline-block;
  	margin: 8px;
  	border-radius: 50%;
  	font-size: 24px;
  	color: #fff;
	opacity: 0.75;
	transition: opacity 0.15s linear;
}

#share a:hover {
	opacity: 1;
}

/* icons */

#share i {
  	position: relative;
  	top: 40%;
  	transform: translateY(-50%);
}

  </style>
  <div id="modal-2">
      <div class="modal fade" id="link" tabindex="-1" aria-labelledby="ModalLabel2" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Share</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div id="share">

                    <!-- facebook -->
                    <a class="facebook" href="https://www.facebook.com/share.php?u={{url}}&title={{title}}" target="blank"><i class="fa-brands fa-facebook-f"></i></a>
                  
                    <!-- twitter -->
                    <a class="twitter" href="https://twitter.com/intent/tweet?status={{title}}+{{url}}" target="blank"><i class="fa-brands fa-twitter"></i></a>
                  
                    <!-- google plus -->
                    <a class="googleplus" href="" target="blank"><i class="fa-brands fa-instagram"></i></a>
                  
                    <!-- linkedin -->
                    <a class="linkedin" href="" target="blank"><i class="fa-brands fa-whatsapp"></i></a>
                   
                  </div>
              </div>
             
            </div>
          </div>
        </div>
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


<script>
    $(document).ready(function ($) {
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
});
</script>
</body>

</html>