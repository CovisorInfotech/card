<?php 
error_reporting(0);
session_start();
include 'header.php'; 
include("../config.php");
$profile_name=$_SESSION['profile_name'];
$row_adm=mysqli_fetch_assoc(mysqli_query($db, "select * from profile where profile_name='$profile_name'"));




if($_SERVER["REQUEST_METHOD"] == "POST") {




  if(isset($_POST['details_submit'])){
    $username = $_POST['name'];
    $email = $_POST['email']; 
    $mobile_number = $_POST['mobile_number'];
    $job_title = $_POST['job_title'];
    $company = $_POST['company'];
    $location = $_POST['location'];
    $website = $_POST['website'];
    $payment_link = $_POST['payment_link'];
    $whatsapp_number = $_POST['whatsapp_number'];
    $google_maps_link = $_POST['google_maps_link'];
    $facebook_link = $_POST['facebook_link'];
    $twitter_link = $_POST['twitter_link']; 
    $instagram_link = $_POST['instagram_link'];

   echo $sql = "UPDATE profile SET 
    username = $username', email = $email', mobile = $mobile_number', job_title = $job_title',
    company = $company', location_address = $location', website = $website', payment_link = $payment_link',
    whatsapp_number = $whatsapp_number', google_maps_link = $google_maps_link', facebook_link = $facebook_link',
    twitter_link = $twitter_link', instagram_link = $instagram_link' WHERE id=$profile_name";

    if (mysqli_query($db, $sql)) {
      header("location: Admin/index.php");
    } else {
    }
  }

  if(isset($_POST['services_submit'])){}

  if(isset($_POST['content_submit'])){}

  if(isset($_POST['theme_submit'])){}

  if(isset($_POST['settings_submit'])){}


}
?>





  <main id="main" class="main">

    <!-- <div class="pagetitle">
      <h1>Web Card</h1>
      
    </div> -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
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

              <!-- Default Tabs -->
              <style>
                @media (max-width: 1400px){
                  #myTab .nav-link{padding: 8px!important;font-size: 12px;}
                }
              </style>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Details</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" tabindex="-1">Services</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" tabindex="-1">Content</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="theme-tab" data-bs-toggle="tab" data-bs-target="#theme" type="button" role="tab" aria-controls="theme" aria-selected="false" tabindex="-1">Theme</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false" tabindex="-1">Settings</button>
                </li>
              </ul>

                

              <div class="tab-content pt-2" id="myTabContent">

                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                 <div class="mt-4">
                 <form action="" method="post"> 
                 <p><b>Basic Details</b></p>   
                 <p>This is what people see when they download your contact information.</p> 
                   <div style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                   <div class="mb-3"> 
                      <label for="" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" id="" value="<?php echo $row_adm['username']?>" aria-describedby="emailHelpId">
                     </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="" value="<?php echo $row_adm['email']?>" aria-describedby="emailHelpId">
                      </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Mobile Number</label>
                      <input type="tel" class="form-control" name="mobile_number" id="" value="<?php echo $row_adm['mobile']?>" aria-describedby="emailHelpId">
                      <small id="emailHelpId" class="form-text text-muted">Your mobile number with country code.</small>
                    </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Job Title (optional)</label>
                      <input type="text" class="form-control" name="job_title" id="" value="<?php echo $row_adm['job_title']?>" aria-describedby="emailHelpId">
                      <small id="emailHelpId" class="form-text text-muted">Ex. CEO, CTO, Digital Marketer, Advocate, Manager, Electrician, Unisex Salon, Tour & Travel, Photographer, etc</small>
                    </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Company/Organization (optional)</label>
                      <input type="text" class="form-control" name="company" id="" value="<?php echo $row_adm['company']?>" aria-describedby="emailHelpId">
                    </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Location</label>
                      <input type="text" class="form-control" name="location" id="" value="<?php echo $row_adm['location']?>" aria-describedby="emailHelpId">
                      <small id="emailHelpId" class="form-text text-muted">Mumbai, India</small>
                    </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Website</label>
                      <input type="text" class="form-control" name="website" id="" value="<?php echo $row_adm['website']?>" aria-describedby="emailHelpId">
                      </div>
                   </div>	

                   <div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                   <p><b>Main Button</b></p>
                   <div class="mb-3"> 
                      <label for="" class="form-label">Whatsapp</label>
                      <input type="tel" class="form-control" name="whatsapp" id="" value="<?php echo $row_adm['whatsapp_number']?>" aria-describedby="emailHelpId">
                     </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Google Maps Link</label>
                      <input type="text" class="form-control" name="google_maps" id="" value="<?php echo $row_adm['google_maps_link']?>" aria-describedby="emailHelpId">
                      </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Twitter Link</label>
                      <input type="text" class="form-control" name="twitter_link" id="" value="<?php echo $row_adm['twitter_link']?>" aria-describedby="emailHelpId">
                    </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Instagram Link</label>
                      <input type="text" class="form-control" name="instagram_link" id="" value="<?php echo $row_adm['instagram_link']?>" aria-describedby="emailHelpId">
                    </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Facebook Link</label>
                      <input type="text" class="form-control" name="facebook_link" id="" value="<?php echo $row_adm['facebook_link']?>" aria-describedby="emailHelpId">
                    </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Payment Link</label>
                      <input type="text" class="form-control" name="payment_link" value="<?php echo $row_adm['payment_link']?>" id="" aria-describedby="emailHelpId">
                    </div>
                   </div>
                   <div class="mb-3 mt-3">
                    <button type="submit" name="details_submit" class="btn btn-warning w-100">Submit</button>
                    </div>
                    </form>

                   <!-- <div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                   <p><b>WhatsApp Button</b></p>
                   <p>Enter your whatsapp number to get more leads on your WhatsApp. Number must be with country code.</p>
                   <form action="" method="post">
                   <div class="mb-3 form-check form-switch"> 
                      <label for="" class="form-label">Enable WhatsApp Button</label>
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                     </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Your WhatsApp Number (with country code)</label>
                      <input type="email" class="form-control" name="whatsapp" id="" aria-describedby="emailHelpId">
                      </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Message</label>
                      <input type="email" class="form-control" name="message" id="" aria-describedby="emailHelpId">
                    </div>
                    <div class="mb-3">
                    <button type="button" class="btn btn-warning w-100">Submit</button>
                    </div>
                    </form>
                   </div> -->
                 </div>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div>

                <div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                    <form action="" method="post">
                    <div class=""> 
                      <div class="row">
                      <div class="col-8 col-lg-8"><label for="" class="form-label"><b>Show Services Tab</b></label></div>
                      <div class="col-4 col-lg-4 form-switch"><input class="form-check-input float-end" type="checkbox" id="flexSwitchCheckDefault"></div>
                      </div>
                     </div>
                    </form>
                </div>

                <div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                    <form action="" method="post">
                    <div class=""> 
                      <div class="row m-0 p-2" style="background-color: #e2e2e2;border-radius: 10px 10px 0px 0px;">
                      <div class="col-8 col-lg-8 my-auto"><p class="m-0"><b>Show Services Tab</b><br>Primary Category</p></div>
                      <div class="col-4 col-lg-4 my-auto"><a class="float-end">Delete </a></div>
                      </div>
                      <div class="row m-0 p-2" style="border: 1px solid #e2e2e2;">
                      <div class="col-8 col-lg-8 my-auto">
                        <p class="m-0">
                            <b>Show Services Tab</b>
                            <br>Primary Category
                        </p>
                      </div>
                      <div class="col-4 col-lg-4 my-auto"><a class="float-end">Delete </a></div>
                      </div>
                      <div class="p-2" style="border: 1px solid #e2e2e2;">
                      <button type="button" class="btn btn-warning"><i class="bx bx-plus"></i> Add another service</button>
                      </div>
                     </div>
                    </form>
                </div>

                <div><hr></div>

                <div class="mb-3">
                <button type="button" class="btn btn-warning"><i class="bx bx-plus"></i> Add another category</button>
                </div>

                </div>
                </div>

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <!-- Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam 
                  perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure.
                   Dignissimos fuga tempore dolor. -->
                </div>

                <div class="tab-pane fade" id="theme" role="tabpanel" aria-labelledby="theme-tab">
                <form action="" method="post">
                <div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                   <p><b>Photo/Logo</b></p>
                   <p>Use 400x400 pixel photo for better result.</p>
                   <div style="text-align: center;" class="pb-2">
                    <div><img src="https://wcard.io/images/user.png" style="border-radius: 50%;width: 150px;height: 150px;border: 2px solid #ffc107;"></div>
                   </div>
                    <div class="mb-3"> 
                      <input type="file" class="form-control" name="logo" id="" >
                    </div>
                  </div>

                  <div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                   <p><b>Banner Photo</b></p>
                   <p>Use 720x405 pixel photo for better result.</p>
                   <div style="text-align: center;" class="pb-2">
                    <div style="background-color: #dee2e6;border-radius: 10px;" class="pb-2"><div style="padding: 70px;"></div></div>
                   </div>
                    <div class="mb-3"> 
                      <input type="file" class="form-control" name="banner" id="" >
                    </div>
                  </div>

                  <div class="mt-4" style="border: 1px solid #ced4da;padding: 19px;border-radius: 20px;">
                   <p><b>Theme Color</b></p>
                   <p>Match your card with your brand by choosing colors from eight beautiful color pallets or any color on the rainbow.</p>
                   <div class="mb-3"> 
                      <input type="color" class="form-control" name="banner" id="" >
                    </div>
                  </div>
                  <div class="mt-3">
                    <button type="button" class="btn btn-warning w-100">Submit</button>
                    </div>
                    </form>

                </div>

                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
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

              </div><!-- End Default Tabs -->

            </div>
          </div>
            </div>

            <div class="col-xxl-5 col-md-5">
              <style>

.wcard-preview {
    width: 100%;
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
                  <div class="pb-0">  
                  <div class="">
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