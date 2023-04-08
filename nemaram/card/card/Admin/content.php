<?php 
error_reporting(0);
session_start();
include 'header.php'; 
include("../config.php");
$mobile_number=$_SESSION['mobile_number'];
$row_adm=mysqli_fetch_assoc(mysqli_query($db, "select * from profile where mobile_number='$mobile_number'"));

?>



<main id="main" class="main">
<section class="section dashboard">
<div class="row">
<div class="col-lg-12 p-0">
<div class="row justify-content-center pb-4">
<div class="col-xxl-7 col-md-7">
</div>    
</div>    
<div class="row justify-content-center">

<div class="col-xxl-7 col-md-7"> 
<div class="card">
<div class="card-body">
<h5 class="card-title">Basic Details</h5>





</div>
</div>
</div>

<div class="col-xxl-5 col-md-5">
              <style>

.wcard-preview {
    width: 411px;
    height: 823px;
    padding: 0;
    display: block;
    transform-origin: top left;
    transform: scale(var(--tw-scale-x))translateX(-50%)translateY(-50%)translateZ(0);
    border: 14px solid #000;
    border-radius: 2rem;
    overflow: hidden;
    margin: 10px auto 0;
}
.h-full {
    height: 100%;
}
              </style>   
              <div class="card info-card sales-card pb-0">
                  <div class="card-body pb-0">  
                  <div class="p-3">
                    <div>
                    <div class="preview-wrap bg-white">
                        <div class="inner-wrap">
                            <div class="wcard-preview scale-60  sm:scale-75">
                                <div class="h-full">
                                    <iframe id="wcard_preview_frame" class="absolute top-0 left-0" src="http://localhost/web/card/" height="100%" width="100%"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  </div>
              </div>
            </div> 


</div>
</div>
</div>
</section>
</main>
<?php include 'footer.php'; ?>