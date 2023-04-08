<?php 
error_reporting(0);
session_start();
include 'header.php'; 
include("../config.php");
$mobile_number=$_SESSION['mobile_number'];
$row_adm=mysqli_fetch_assoc(mysqli_query($db, "select * from profile where mobile_number='$mobile_number'"));
$id = $row_adm['id'];




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
    
       $sql = "UPDATE profile SET username='$username', email='$email', job_title='$job_title', company='$company', location_address='$location', mobile_number='$mobile_number', website='$website', payment_link='$payment_link', whatsapp_number='$whatsapp_number', google_maps_link='$google_maps_link', facebook_link='$facebook_link', instagram_link='$instagram_link', twitter_link='$twitter_link' WHERE id=$id";
    
       if (mysqli_query($db, $sql)) {
        header("location: Admin/details.php");
         echo "Record updated successfully";
       } else {
         echo "Error updating record: " . mysqli_error($db);
       }
    
      }


}
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
<div class="col-xxl-8 col-md-8"> 
<div class="card">
<div class="card-body">
<h5 class="card-title">Basic Details</h5>


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
                      <input type="tel" class="form-control" name="mobile_number" id="" value="<?php echo $row_adm['mobile_number']?>" aria-describedby="emailHelpId">
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
                      <input type="text" class="form-control" name="location" id="" value="<?php echo $row_adm['location_address']?>" aria-describedby="emailHelpId">
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
                      <input type="tel" class="form-control" name="whatsapp_number" id="" value="<?php echo $row_adm['whatsapp_number']?>" aria-describedby="emailHelpId">
                     </div>
                    <div class="mb-3"> 
                      <label for="" class="form-label">Google Maps Link</label>
                      <input type="text" class="form-control" name="google_maps_link" id="" value="<?php echo $row_adm['google_maps_link']?>" aria-describedby="emailHelpId">
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
</div>
</div>

<div class="col-xxl-4 col-md-4">
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
                  <div class="p-2">  
                  <div class="">
                    <div>
                      <p class="text-center p-2" style="background-color: #e5e7eb;"><a href="http://web.delhi.in/web/card/<?php echo $row_adm['mobile_number']?>" style="color: #000000;">web.delhi.in/web/card/web/card/<?php echo $row_adm['mobile_number']?></a></p>
                    </div>
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