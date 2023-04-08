<?php 
session_start();
include 'header.php'; 
include("../config.php");
$profile_name=$_SESSION['profile_name'];
$row_adm=mysqli_fetch_assoc(mysqli_query($db, "select * from profile where profile_name='$profile_name'"));
?>



<style>
  .p-box {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    line-clamp: 2;
    -webkit-box-orient: vertical;
}
.card-img{
  width: 80px;
    height: 80px;
    border-radius: 50%;
    border: 2px solid darkgrey;
    padding: 2px;
}
</style>




  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Web Card</h1>
      <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Web Card</li>
        </ol>
      </nav> -->
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card pb-0">


                <div class="card-body pb-0">
                 <div class="row pt-2">

                  <div class="col-8 col-md-8 col-lg-8">
                  <p class="text-sm mb-1 p-box" style="font-size: 13px;"><b><?php echo $row_adm['username']?></b></p>
                  <p class="text-sm m-0 p-box" style="font-size: 13px;"><?php echo $row_adm['email']?></p>
                  <p class="text-sm m-0 p-box" style="font-size: 13px;"><?php echo $row_adm['profile_name']?> (Change)</p>
                  <p><b>DRAFT</b></p>
                  </div>

                  <div class="col-4 col-md-4 col-lg-4">
                  <div class="align-items-center">
                    <div class="text-center"><p class="m-0" style="font-size: 13px;">WID: 14803</p></div>
                    <div>
                    <center>
                      <?php if(isset($row_adm['email'])) { ?> 
                        <div><img src="assets/img/photo/<?php echo $row_adm['photo'] ?>" class="card-img"></div>
                        
                        <?php } else { ?>
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="bx bxs-user-circle"></i></div>
                    <?php } ?>
                  </center>
                    </div>
                    <!-- <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                    </div> -->
                  </div>
                  </div>


                </div>


                <div class="row pt-2 pb-2 border-top">
                <div class="col-4 col-md-4 col-lg-4 border-end text-center"><a href="details.php"><span class="ml-3"  style="font-size: 13px;"><i class="bx bx-edit"></i></i> Edit</span></a></div>
                <div class="col-4 col-md-4 col-lg-4 border-end text-center"><span class="ml-3"  style="font-size: 13px;"><i class="bx bx-show"></i></i> View</span></div>
                <div class="col-4 col-md-4 col-lg-4 text-center"><span class="ml-3" style="font-size: 13px;"><i class="bi bi-link"></i> Copy Link</span></div>
                </div>


                </div>

              </div>
            </div><!-- End Sales Card -->
        </div>
    </div><!-- End Left side columns -->




      </div>
    </section>

  </main>


<?php include 'footer.php'; ?>