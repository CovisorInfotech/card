<?php 
error_reporting(0);
session_start();
include 'header.php'; 
include("../config.php");
$mobile_number=$_SESSION['mobile_number'];
$row_adm=mysqli_fetch_assoc(mysqli_query($db, "select * from profile where mobile_number='$mobile_number'"));
$id = $row_adm['id'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['services_button'])) {

$card_id = $id; 
$category = $_POST['category']; 
$services = $_POST['services'];
$price_type = $_POST['price_type'];
$price = $_POST['price'];
$services_type = $_POST['services_type']; 
$service_description = $_POST['service_description'];
$stusts ="1";
  
$sql = "INSERT INTO services (card_id, category, services, price_type, price, services_type, service_description, stusts)
VALUES ('$card_id','$category','$services','$price_type','$price','$services_type','$service_description','$stusts')";
  
  if (mysqli_query($db, $sql)) {
    header("location: services.php");
  } else {
  }
}
}


  // delete
  if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
    $type = $_GET['type'];
    $id = $_GET['id'];
    if ($type == 'delete-cat') {
        mysqli_query($db, "delete from services where id='$id' and mobile_number='$mobile_number'");
        header("location: services.php");
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
<div class="col-xxl-7 col-md-7"> 
<div class="card">
<div class="card-body">
<h5 class="card-title">Basic Details</h5>


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
                      <div class="col-8 col-lg-8 my-auto"><p class="m-0"><b>Show Services</b></p></div>
                      <div class="col-4 col-lg-4 my-auto"><a class="float-end">Delete </a></div>
                      </div>

                      <?php
                      $sql =  "SELECT * FROM services WHERE card_id='$id'";
                      $res = mysqli_query($db, $sql);
                      while ($row = mysqli_fetch_assoc($res)) {
                      ?>
                      <div class="row m-0 p-2" style="border: 1px solid #e2e2e2;">
                      <div class="col-8 col-lg-8 my-auto">
                        <p class="m-0">
                            <b><?php echo $row['services'] ?></b>
                            <br><?php echo $row['category'] ?>
                            <br><?php echo $row['price'] ?>
                        </p>
                      </div>
                      <div class="col-4 col-lg-4 my-auto"><a href="?id=<?php echo $row['id'] ?>&type=delete" class="float-end">Delete </a></div>
                      </div>
                      <?php
                      }
                      ?>

                      <!-- <div class="p-2" style="border: 1px solid #e2e2e2;">
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#nrModal"><i class="bx bx-plus"></i> Add another service</button>
                      </div> -->

                     </div>
                    </form>
                </div>

                <div><hr></div>

                <div class="mb-3">
                <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#catModal"><i class="bx bx-plus"></i> Add another Services</a>
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


<!-- <div class="modal fade" id="nrModal" tabindex="-1" aria-labelledby="nrModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
          <div>
          <p><b>Business</b><br>Add services you offer and get discovered by customers</p>
          </div>
         <div class="mb-3"> 
             <label for="" class="form-label">Custom services</label>
            <input type="text" class="form-control" name="category" id="" aria-describedby="emailHelpId">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->


<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add ategory</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
         <div class="mb-3"> 
             <label for="" class="form-label">Category</label>
            <input type="text" class="form-control" name="category" id="" aria-describedby="emailHelpId">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<!-- Modal -->
<div class="modal fade" id="catModal" tabindex="-1" aria-labelledby="catModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="catModalLabel">Add Service</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 col-lg-6 mb-3"> 
             <label for="" class="form-label">Category</label>
             <input type="text" class="form-control" name="category" id="" aria-describedby="emailHelpId">
          </div>
          <div class="col-md-6 col-lg-6 mb-3"> 
             <label for="" class="form-label">Service Name</label>
            <input type="text" class="form-control" name="services" id="" aria-describedby="emailHelpId">
          </div>
          <div class="col-md-6 col-lg-6 mb-3"> 
             <label for="" class="form-label">Price Type</label>
            <select name="price_type" id="price_type" class="form-control">
              <option value="no">No Price</option>
              <option value="free">FREE</option>
              <option value="fixed">Fixed</option>
              <option value="from">From</option>
            </select>
          </div>
          <div class="col-md-6 col-lg-6 mb-3"> 
             <label for="" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="" aria-describedby="emailHelpId">
          </div>
          <div class="mb-3"> 
             <label for="" class="form-label">Services Type</label>
            <input type="text" class="form-control" name="services_type" id="" aria-describedby="emailHelpId">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Service Description</label>
            <textarea class="form-control" name="service_description" id="" rows="3"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="services_button" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>