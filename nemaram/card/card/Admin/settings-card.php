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


<div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                   <p><b>Domain Settings</b></p>
                   <p>Change your personlized link or connect custom domain with your digital business card.</p>
                   <form action="" method="post">
                    <div class="mb-3"> 
                      <input type="email" class="form-control" name="message" id="" value="nemara14751.wcard.io">
                    </div>
                    <div class="mb-3">
                    <button type="button" class="btn btn-warning w-100">Submit</button>
                    </div>
                    </form>
                  </div>

                  <div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                   <p><b>Connect Custom Domain</b></p>
                   <p>Connect your own Custom Domain with Free SSL to your wcard page.</p>
                   <div style="background-color: #f3f4f6;" class="p-3">
                   <p><b>Add CNAME</b></p>
                    <ul>
                      <li>Login to the domain registrar website from where you registered your domain. Example: GoDaddy</li>
                      <li>Select your domain to access the Domain Settings page.</li>
                      <li>Under Additional Settings, select Manage DNS.</li>
                      <li>Add a new CNAME Record with following details.</li>
                    </ul>
                   </div>
                   <form action="" method="post">
                   <div class="mb-3"> 
                      <label for="" class="form-label">Subdomain (optional)</label>
                      <input type="email" class="form-control" name="whatsapp" id="" aria-describedby="emailHelpId">
                      </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Domain</label>
                      <input type="email" class="form-control" name="message" id="" aria-describedby="emailHelpId">
                    </div>
                    <div class="mb-3">
                    <button type="button" class="btn btn-warning w-100">Verify</button>
                    </div>
                    </form>
                  </div>

                   <div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                   <p><b>Copyright Text</b></p>
                   <p>Add custom copy right text at bottom of your card.</p>
                   <form action="" method="post">
                    <div class="mb-3"> 
                      <input type="email" class="form-control" name="message" id="" value="© 2023 nemaram choudhary. All Rights Reserved.">
                    </div>
                    <div class="mb-3">
                    <button type="button" class="btn btn-warning w-100">Submit</button>
                    </div>
                    </form>
                   </div>


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