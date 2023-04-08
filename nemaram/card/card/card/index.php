
<?php 
error_reporting(0);
session_start();
include("../config.php");

if(!empty($_GET['file']))
{
$filename = basename($_GET['file']);
$filepath = '../Admin/assets/img/pdf/' . $filename;
if(!empty($filename) && file_exists($filepath)){
  header("Cache-Control: public");
	header("Content-Description: FIle Transfer");
	header("Content-Disposition: attachment; filename=$filename");
	header("Content-Type: application/zip");
	header("Content-Transfer-Emcoding: binary");
    readfile($filepath);
	exit;
    }
	else{
    echo "<script>alert('This File Does not exist'); window.location = 'index.php';</script>";
	}
}


$mobile_number=$_SESSION['mobile_number'];
$row_adm=mysqli_fetch_assoc(mysqli_query($db, "select * from profile where mobile_number='$mobile_number'"));
$id = $row_adm['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color:#f59e0b;">


  
<div class="container pt-2">
  <div class="row justify-content-center">


    <div class="col-md-7 col-lg-7">
      <div class="bg-white">

    <div class="">
    <div><img src="../Admin/assets/img/banner/<?php echo $row_adm['banner'] ?> " style="width: 100%;"></div>
    </div>
     
    <style>
      .profile-box{width: 170px;height: 170px;border-radius: 50%;border: 3px solid #f59e0b;}
    </style>
    <div>
    <div style="margin-top: -80px;"><center><img src="../Admin/assets/img/photo/<?php echo $row_adm['photo'] ?> " class="profile-box"></center></div>
    <div class="text-center">
      <h2 class="m-0"><?php echo $row_adm['username']?></h2>
      <p class="m-0"><?php echo $row_adm['job_title']?></p>
      <p class="m-0"><?php echo $row_adm['location_address']?></p>
    </div>
    </div>
  
    <div class="">
    <ul class="list-unstyled d-flex justify-content-center">

      <li class="p-2"><a href="https://wa.me/91<?php echo $row_adm['whatsapp_number']?>" class="btn btn-warning">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m0 512 35.31-128C12.359 344.276 0 300.138 0 254.234 0 114.759 114.759 0 255.117 0S512 114.759 512 254.234 395.476 512 255.117 512c-44.138 0-86.51-14.124-124.469-35.31L0 512z" style="" fill="#ffffff" data-original="#ededed" class=""></path><path d="m137.71 430.786 7.945 4.414c32.662 20.303 70.621 32.662 110.345 32.662 115.641 0 211.862-96.221 211.862-213.628S371.641 44.138 255.117 44.138 44.138 137.71 44.138 254.234c0 40.607 11.476 80.331 32.662 113.876l5.297 7.945-20.303 74.152 75.916-19.421z" style="" fill="#55cd6c" data-original="#55cd6c" class=""></path><path d="m187.145 135.945-16.772-.883c-5.297 0-10.593 1.766-14.124 5.297-7.945 7.062-21.186 20.303-24.717 37.959-6.179 26.483 3.531 58.262 26.483 90.041s67.09 82.979 144.772 105.048c24.717 7.062 44.138 2.648 60.028-7.062 12.359-7.945 20.303-20.303 22.952-33.545l2.648-12.359c.883-3.531-.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-.883-10.593 2.648l-22.069 28.248c-1.766 1.766-4.414 2.648-7.062 1.766-15.007-5.297-65.324-26.483-92.69-79.448-.883-2.648-.883-5.297.883-7.062l21.186-23.834c1.766-2.648 2.648-6.179 1.766-8.828l-25.6-57.379c-.884-2.649-3.532-5.297-7.063-5.297" style="" fill="#fefefe" data-original="#fefefe" class=""></path></g></svg>
      </a></li>

      <li class="p-2"><a href="tel:<?php echo $row_adm['mobile_number']?>" class="btn btn-warning">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="30" height="30" x="0" y="0" viewBox="0 0 58 58" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g fill="none" fill-rule="nonzero"><path fill="#ffffff" d="M24.077 33.983c-5.536-5.536-6.786-11.072-7.069-13.29a1.992 1.992 0 0 1 .572-1.664l4.478-4.478a2 2 0 0 0 .282-2.475L15.209 1a2 2 0 0 0-2.591-.729L1.167 5.664a1.989 1.989 0 0 0-1.1 1.987c.6 5.7 3.084 19.712 16.855 33.483s27.783 16.255 33.487 16.855a1.989 1.989 0 0 0 1.987-1.1l5.393-11.451a2 2 0 0 0-.729-2.591L45.983 35.72a2 2 0 0 0-2.474.28l-4.478 4.48a1.989 1.989 0 0 1-1.665.571c-2.217-.282-7.753-1.532-13.289-7.068z" data-original="#2fa8cc" class=""></path><g fill="#f0c419"><path d="M46 31a2 2 0 0 1-2-2c-.01-8.28-6.72-14.99-15-15a2 2 0 1 1 0-4c10.489.012 18.988 8.511 19 19a2 2 0 0 1-2 2z" fill="#ffffff" data-original="#f0c419" class=""></path><path d="M56 31a2 2 0 0 1-2-2C53.985 15.2 42.8 4.015 29 4a2 2 0 1 1 0-4c16.009.018 28.982 12.991 29 29a2 2 0 0 1-2 2z" fill="#ffffff" data-original="#f0c419" class=""></path></g></g></g></svg>
      </a></li>

      <li class="p-2"><a href="<?php echo $row_adm['email']?>" class="btn btn-warning">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M7.5 211.909v256.516c0 8.854 7.178 16.032 16.032 16.032h464.935c8.854 0 16.032-7.178 16.032-16.032V211.909H7.5z" style="" fill="#ffe077" data-original="#ffe077" class=""></path><path d="M291.364 40.025c-20.638-16.644-50.089-16.644-70.727 0L7.5 211.909 256 412.317 504.5 211.91 291.364 40.025z" style="" fill="#ffd05b" data-original="#ffd05b" class=""></path><path d="M432.355 67.627c0-9.933-8.94-17.475-18.73-15.803l-309.931 52.915c-12.358 1.823-24.048 10.767-24.048 24.048v110.41l96.834 94.155 44.156-35.61c20.639-16.644 50.089-16.644 70.728 0l44.155 35.61 96.835-63.262V67.627z" style="" fill="#eceaec" data-original="#eceaec" class=""></path><path d="m413.624 51.824-309.93 52.915a31.155 31.155 0 0 1 25.351 13.046l23.372 32.72a16.032 16.032 0 0 0 19.15 5.505l159.492-65.693 49.154-8.391c14.687-2.507 28.096 8.807 28.096 23.706v133.792a40.078 40.078 0 0 1-14.92 31.199l-42.769 34.491c-8.811 7.106-21.384 7.105-30.195-.001l-13.96-11.26c-29.451-23.754-71.481-23.753-100.931.003l-13.954 11.256c-8.81 7.107-21.384 7.108-30.196.002l-81.737-65.916v30.894l96.834 78.093 44.157-35.611c20.638-16.644 50.09-16.644 70.728 0l44.155 35.61 96.835-78.093V67.628c-.001-9.933-8.941-17.476-18.732-15.804z" style="" fill="#dbd8db" data-original="#dbd8db"></path><path d="M488.468 484.458c4.2 0 7.991-1.651 10.848-4.293L291.365 312.462c-20.557-16.579-49.893-16.579-70.45 0L12.822 480.279c2.844 2.571 6.575 4.179 10.711 4.179h464.935z" style="" fill="#ffe077" data-original="#ffe077" class=""></path><path d="M480.452 460.413H95.673c-13.279 0-24.044 10.765-24.044 24.044h416.839c8.854 0 16.032-7.178 16.032-16.032V211.909h-24.048v248.504z" style="" fill="#ffd05b" data-original="#ffd05b" class=""></path><path d="M504.5 211.909v256.516c0 8.854-7.178 16.032-16.032 16.032H23.532c-8.854 0-16.032-7.178-16.032-16.032V211.909" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000" class=""></path><path d="m432.355 153.727 72.145 58.182-143.393 115.64M151.79 95.546l68.846-55.521c20.638-16.644 50.089-16.644 70.727 0l30.839 24.87M176.118 347.892 7.5 211.909l70.448-56.813M496.76 478.216 291.364 312.573c-20.638-16.644-50.089-16.644-70.727 0L14.04 479.183" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000" class=""></path><path d="m103.694 104.735 309.93-52.915c9.791-1.672 18.73 5.871 18.73 15.804v202.618" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000" class=""></path><path d="M421.349 53.153 171.565 156.006a16.032 16.032 0 0 1-19.15-5.506l-23.371-32.719a31.155 31.155 0 0 0-25.351-13.046h0c-13.282 0-24.048 10.767-24.048 24.048v99.163" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000" class=""></path><path d="m135.758 195.877 24.048 24.048 40.081-40.08M247.984 179.845h128.258M247.984 211.909h128.258M135.758 268.022l24.048 24.049 40.081-40.081M247.984 260.006h128.258" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000" class=""></path></g></svg>
      </a></li>

      <li class="p-2"><a href="<?php echo $row_adm['website']?>" class="btn btn-warning">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><circle cx="256" cy="256" r="225.229" fill="#a3defe" data-original="#a3defe"></circle><path fill="#7acefa" d="M178.809 44.35C92.438 75.858 30.771 158.727 30.771 256c0 124.39 100.838 225.229 225.229 225.229 57.256 0 109.512-21.377 149.251-56.569C139.58 395.298 125.639 142.906 178.809 44.35z" data-original="#7acefa" class=""></path><path fill="#f7ef87" d="M476.093 194.583H35.907c-15.689 0-28.407 12.718-28.407 28.407v66.02c0 15.689 12.718 28.407 28.407 28.407h440.186c15.689 0 28.407-12.718 28.407-28.407v-66.02c0-15.689-12.718-28.407-28.407-28.407z" data-original="#f7ef87" class=""></path><path fill="#efd176" d="M35.907 194.583c-15.688 0-28.407 12.718-28.407 28.407v66.02c0 15.689 12.718 28.407 28.407 28.407H275.1c-30.164-19.995-42.899-74.938-30.332-122.834z" data-original="#efd176" class=""></path><path d="M478.365 187.162c-7.871-25.404-20.202-49.361-36.162-70.662a7.54 7.54 0 0 0-1.274-1.69c-12.438-16.293-27.011-30.994-43.35-43.536-40.914-31.404-89.87-48.003-141.576-48.004H256c-37.727 0-75.195 9.237-108.352 26.712a7.501 7.501 0 0 0 6.993 13.27c25.118-13.237 52.887-21.417 81.291-24.048-20.694 20.712-39.721 45.999-55.546 73.422H92.203a217.914 217.914 0 0 1 32.761-30.524 7.5 7.5 0 0 0-9.037-11.973C98.942 82.95 83.84 98.072 71.012 114.886c-.424.434-.792.92-1.101 1.446-16.016 21.332-28.38 45.339-36.276 70.83C14.891 188.339 0 203.954 0 222.989v66.02c0 19.036 14.891 34.651 33.635 35.828 7.87 25.402 20.201 49.359 36.16 70.659a7.515 7.515 0 0 0 1.277 1.694c12.438 16.293 27.01 30.993 43.35 43.534 40.915 31.404 89.871 48.004 141.578 48.004 41.421 0 82.096-11.021 117.626-31.872a7.502 7.502 0 0 0 2.673-10.265 7.502 7.502 0 0 0-10.265-2.673c-27.467 16.12-58.229 25.95-89.957 28.878 20.689-20.713 39.715-46.003 55.539-73.424h88.276a220.539 220.539 0 0 1-25.259 24.523 7.5 7.5 0 0 0 4.782 13.281 7.47 7.47 0 0 0 4.775-1.72c35.239-29.132 60.797-67.287 74.178-110.619C497.11 323.659 512 308.045 512 289.01v-66.02c0-19.036-14.892-34.651-33.635-35.828zm-46.581-59.535c13.235 18.111 23.688 38.206 30.796 59.456h-98.057c-6.252-20.083-14.64-40.166-24.673-59.456zm-43.34-44.452a217.733 217.733 0 0 1 31.348 29.452h-88.177c-15.831-27.434-34.867-52.729-55.57-73.445 40.938 3.694 79.458 18.708 112.399 43.993zM256 40.77c21.52 19.485 41.514 44.384 58.222 71.857H197.777C214.485 85.154 234.479 60.255 256 40.77zm-66.878 86.857h133.756c10.472 19.162 19.286 39.271 25.896 59.456H163.226c6.61-20.185 15.424-40.294 25.896-59.456zm-108.911 0h91.938c-10.033 19.29-18.421 39.372-24.673 59.456H49.419c7.111-21.266 17.56-41.352 30.792-59.456zm.005 256.746c-13.235-18.111-23.688-38.207-30.796-59.456h98.058c6.252 20.083 14.639 40.166 24.672 59.456zm43.34 44.452c-11.42-8.765-21.915-18.657-31.348-29.452h88.177c15.829 27.43 34.862 52.728 55.558 73.444-40.933-3.696-79.449-18.709-112.387-43.992zM256 471.23c-21.521-19.485-41.515-44.384-58.223-71.858h116.445C297.514 426.846 277.52 451.745 256 471.23zm66.878-86.857H189.122c-10.472-19.162-19.288-39.272-25.9-59.456h185.556c-6.612 20.184-15.428 40.294-25.9 59.456zm109.049 0H339.85c10.033-19.29 18.42-39.372 24.672-59.456h98.067a216.097 216.097 0 0 1-30.662 59.456zM497 289.01c0 11.528-9.379 20.907-20.907 20.907H35.906C24.379 309.917 15 300.538 15 289.01v-66.02c0-11.527 9.379-20.906 20.907-20.906h3.319l.028.002.024-.002h319.653l.024.002.028-.002h113.74l.024.002.028-.002h3.318c11.528 0 20.907 9.379 20.907 20.906zm-308.316-68.473a7.502 7.502 0 0 0-9.613 4.482l-13.636 37.467-13.637-37.467a7.5 7.5 0 0 0-14.096 0l-13.637 37.467-13.636-37.467a7.5 7.5 0 0 0-14.096 5.131l20.684 56.83a7.5 7.5 0 0 0 14.096 0l13.637-37.467 13.637 37.467a7.5 7.5 0 0 0 14.096 0l20.684-56.83a7.501 7.501 0 0 0-4.483-9.613zm222.501 0a7.496 7.496 0 0 0-9.613 4.482l-13.637 37.467-13.637-37.467a7.499 7.499 0 0 0-14.096 0l-13.637 37.467-13.637-37.467a7.5 7.5 0 0 0-14.095 5.131l20.685 56.83a7.5 7.5 0 0 0 14.096 0l13.637-37.467 13.637 37.467a7.5 7.5 0 0 0 14.096 0l20.685-56.83a7.504 7.504 0 0 0-4.484-9.613zm-111.25 0a7.496 7.496 0 0 0-9.613 4.482l-13.637 37.467-13.637-37.467a7.499 7.499 0 0 0-14.096 0l-13.637 37.467-13.636-37.467a7.5 7.5 0 0 0-14.096 5.131l20.684 56.83a7.5 7.5 0 0 0 14.096 0L256 249.514l13.637 37.467a7.5 7.5 0 0 0 14.096 0l20.685-56.83a7.503 7.503 0 0 0-4.483-9.614z" fill="#ffffff" data-original="#000000" class=""></path></g></svg>
     </a></li>

    </ul>
    </div>
    <hr>
    <div>
      <div class="shadow p-3 mb-4 bg-body rounded border border-warning m-4">
        <h4 class="text-center">Contact Us</h4>
        <div>
          <div>
            <p class="m-0"><b>Call Us</b></p>
            <p><?php echo $row_adm['mobile_number']?></p>
          </div>
          <hr>
          <div>
            <p class="m-0"><b>Email</b></p>
            <p><?php echo $row_adm['email']?></p>
          </div>
          <hr>
          <div>
            <p class="m-0"><b>Address</b></p>
            <p><?php echo $row_adm['location_address']?></p>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="shadow p-3 mb-4 bg-body border border-warning rounded m-4">
        <h4 class="text-center">Services</h4>
        <div>
          <div>
          <?php
                      $sql =  "SELECT * FROM services WHERE card_id='$id'";
                      $res = mysqli_query($db, $sql);
                      while ($row = mysqli_fetch_assoc($res)) {
                      ?>
                      <div class="row m-0 p-2">
                      <div class="col-8 col-lg-8 my-auto">
                        <p class="m-0">
                            <b><?php echo $row['services'] ?></b>
                            <br><?php echo $row['category'] ?>
                            <br><?php echo $row['services_type'] ?>
                        </p>
                      </div>
                      <div class="col-4 col-lg-4 my-auto"><p><?php echo $row['price_type'] ?> <br>₹<?php echo $row['price'] ?></p></div>
                      </div>
                      <hr>
                      <?php
                      }
                      ?>
          </div>
        </div>
      </div>
    </div>



    <style>
      .btn-nr{
        color: white;
        padding: 7px 15px 10px 15px;
        background: radial-gradient(circle, rgba(40,40,40,1) 0%, rgba(0,0,0,1) 100%);
    border-radius: 20px;
  }
    </style>  
    <div>
    <div><hr></div>
    <div class="row px-4">
    <div class="col-md-3 col-lg-3 p-1"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none;"><div class="text-center btn-nr"><span>Bank</span></div></a></div>
    <div class="col-md-4 col-lg-4 p-1"><a href="index.php?file=<?php echo $row_adm['pdf'] ?>" style="text-decoration: none;"><div class="text-center btn-nr"><span>Download</span></div></a></div>
    <div class="col-md-5 col-lg-5 p-1"><div class="text-center btn-nr"><span>Add Contact</span></div></div>
    </div>
    <div><hr></div>
    </div>

    <div>
      <ul class="list-unstyled d-flex justify-content-center">
        <li class="p-2"><a href="<?php echo $row_adm['facebook_link'] ?>"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="40" height="40" x="0" y="0" viewBox="0 0 176 176" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g data-name="Layer 2"><g data-name="01.facebook"><circle cx="88" cy="88" r="88" fill="#3a559f" data-original="#3a559f" class=""></circle><path fill="#ffffff" d="m115.88 77.58-1.77 15.33a2.87 2.87 0 0 1-2.82 2.57h-16l-.08 45.45a2.05 2.05 0 0 1-2 2.07H77a2 2 0 0 1-2-2.08V95.48H63a2.87 2.87 0 0 1-2.84-2.9l-.06-15.33a2.88 2.88 0 0 1 2.84-2.92H75v-14.8C75 42.35 85.2 33 100.16 33h12.26a2.88 2.88 0 0 1 2.85 2.92v12.9a2.88 2.88 0 0 1-2.85 2.92h-7.52c-8.13 0-9.71 4-9.71 9.78v12.81h17.87a2.88 2.88 0 0 1 2.82 3.25z" data-original="#ffffff" class=""></path></g></g></g></svg></a></li>
        <li class="p-2"><a href="<?php echo $row_adm['instagram_link'] ?>"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="40" height="40" x="0" y="0" viewBox="0 0 152 152" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><linearGradient id="a" x1="22.26" x2="129.74" y1="22.26" y2="129.74" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fae100"></stop><stop offset=".15" stop-color="#fcb720"></stop><stop offset=".3" stop-color="#ff7950"></stop><stop offset=".5" stop-color="#ff1c74"></stop><stop offset="1" stop-color="#6c1cd1"></stop></linearGradient><g data-name="Layer 2"><g data-name="03.Instagram"><rect width="152" height="152" fill="url(#a)" rx="76" data-original="url(#a)" class=""></rect><g fill="#fff"><path d="M133.2 26c-11.08 20.34-26.75 41.32-46.33 60.9S46.31 122.12 26 133.2q-1.91-1.66-3.71-3.46A76 76 0 1 1 129.74 22.26q1.8 1.8 3.46 3.74z" opacity=".1" fill="#ffffff" data-original="#ffffff" class=""></path><path d="M94 36H58a22 22 0 0 0-22 22v36a22 22 0 0 0 22 22h36a22 22 0 0 0 22-22V58a22 22 0 0 0-22-22zm15 54.84A18.16 18.16 0 0 1 90.84 109H61.16A18.16 18.16 0 0 1 43 90.84V61.16A18.16 18.16 0 0 1 61.16 43h29.68A18.16 18.16 0 0 1 109 61.16z" fill="#ffffff" data-original="#ffffff" class=""></path><path d="m90.59 61.56-.19-.19-.16-.16A20.16 20.16 0 0 0 76 55.33 20.52 20.52 0 0 0 55.62 76a20.75 20.75 0 0 0 6 14.61 20.19 20.19 0 0 0 14.42 6 20.73 20.73 0 0 0 14.55-35.05zM76 89.56A13.56 13.56 0 1 1 89.37 76 13.46 13.46 0 0 1 76 89.56zM102.43 54.38a4.88 4.88 0 0 1-4.85 4.92 4.81 4.81 0 0 1-3.42-1.43 4.93 4.93 0 0 1 3.43-8.39 4.82 4.82 0 0 1 3.09 1.12l.1.1a3.05 3.05 0 0 1 .44.44l.11.12a4.92 4.92 0 0 1 1.1 3.12z" fill="#ffffff" data-original="#ffffff" class=""></path></g></g></g></g></svg></a></li>
        <li class="p-2"><a href="<?php echo $row_adm['twitter_link'] ?>"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="40" height="40" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#41a1f2" fill-rule="evenodd" d="M44.724 25.474c.012.282.02.564.02.85 0 8.674-6.604 18.678-18.68 18.678A18.588 18.588 0 0 1 16 42.054c.514.06 1.036.09 1.566.09 3.076 0 5.906-1.048 8.154-2.81a6.57 6.57 0 0 1-6.134-4.558 6.624 6.624 0 0 0 2.966-.114 6.566 6.566 0 0 1-5.266-6.436v-.084a6.533 6.533 0 0 0 2.974.822 6.565 6.565 0 0 1-2.922-5.464 6.53 6.53 0 0 1 .89-3.302 18.64 18.64 0 0 0 13.532 6.86 6.585 6.585 0 0 1-.17-1.496 6.566 6.566 0 0 1 11.356-4.492 13.137 13.137 0 0 0 4.17-1.592 6.598 6.598 0 0 1-2.886 3.632A13.174 13.174 0 0 0 48 22.076a13.364 13.364 0 0 1-3.276 3.398M32 0C14.326 0 0 14.326 0 32c0 17.672 14.326 32 32 32s32-14.328 32-32C64 14.326 49.674 0 32 0" data-original="#41a1f2" class=""></path></g></svg></a></li>
        <li class="p-2"><a href="<?php echo $row_adm['google_maps_link'] ?>"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="40" height="40" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><circle cx="255.722" cy="256" r="255.445" style="" fill="#40a459" data-original="#40a459"></circle><path d="M255.722.555a261.162 261.162 0 0 0-7.286.11c-1.843.051-3.682.119-5.514.209-.474.023-.945.056-1.418.081a261.8 261.8 0 0 0-4.174.264c-.699.05-1.397.098-2.094.153a255.9 255.9 0 0 0-4.82.428c-.829.082-1.654.173-2.479.262-.991.108-1.98.221-2.968.34-.856.103-1.714.202-2.567.313 125.334 16.327 222.126 123.498 222.126 253.282S347.737 492.953 222.403 509.28c.854.111 1.71.211 2.567.313.987.119 1.977.232 2.968.34.826.09 1.652.181 2.479.262 1.603.158 3.209.3 4.82.428.696.056 1.395.104 2.094.153 1.388.099 2.779.188 4.174.264.473.027.945.058 1.418.081a258.174 258.174 0 0 0 6.988.246c1.932.043 3.868.073 5.812.073 141.079 0 255.445-114.367 255.445-255.445S396.801.555 255.722.555z" style="" fill="#378b4e" data-original="#378b4e"></path><path d="m222.403 233.787 106.563-61.152s116.569 24.829 143.473-24.263l8.485-15.483 7.379 16.04c15.321 33.304 23.42 70.329 23.42 107.071 0 84.691-41.95 163.833-112.217 211.703l-7.25 4.94-169.853-238.856z" style="" fill="#898790" data-original="#898790" class=""></path><path d="M511.166 256c0-44.143-11.198-85.671-30.908-121.898l-7.82 14.269c-9.45 17.245-21.888 34.878-34.284 50.741A256.197 256.197 0 0 1 444.528 256c0 71.337-29.248 135.834-76.4 182.176l23.852 34.666C463.639 427.598 511.166 347.012 511.166 256z" style="" fill="#7a797f" data-original="#7a797f"></path><path d="M255.722 512c-87.455 0-168.01-44.081-215.484-117.917l-4.527-7.04 142.267-119.937 163.74 230.122-10.434 3.385C306.874 508.169 281.452 512 255.722 512z" style="" fill="#3d9ae3" data-original="#3d9ae3"></path><path d="m342.752 496.827-17.317-24.795c-30.569 19.333-65.625 32.915-103.137 37.801 10.906 1.42 22.13 1.612 33.424 1.612 30.448 0 59.952-4.845 87.03-14.618z" style="" fill="#1d81ce" data-original="#1d81ce"></path><path d="m177.978 267.106 44.425-33.319 170.805 238.278-8.302 4.872a255.888 255.888 0 0 1-36.69 17.766l-6.499 2.527-163.739-230.124z" style="" fill="#ffffff" data-original="#ffffff" class=""></path><path d="M341.718 497.229a254.46 254.46 0 0 0 51.49-25.164l-24.615-34.338A256.602 256.602 0 0 1 324.3 472.75l17.418 24.479z" style="" fill="#e0e0e3" data-original="#e0e0e3"></path><path d="M31.37 379.188a255.552 255.552 0 0 1-17.696-39.813l-2.112-8.059 299.691-208.592 44.425 33.319L35.712 387.042l-4.342-7.854z" style="" fill="#ffce00" data-original="#ffce00" class=""></path><path d="M382.579 250.216c-15.713-16.41-94.094-100.753-94.094-149.704C288.485 45.089 333.575 0 388.997 0s100.512 45.089 100.512 100.512c0 48.918-78.382 133.287-94.095 149.704-3.497 3.654-9.337 3.655-12.835 0z" style="" fill="#cd2900" data-original="#cd2900"></path><path d="M388.997 134.386c-24.803 0-44.98-20.178-44.98-44.98s20.178-44.98 44.98-44.98c24.803 0 44.98 20.178 44.98 44.98s-20.177 44.98-44.98 44.98z" style="" fill="#891d00" data-original="#891d00"></path><path d="M144.659 186.586c29.088 0 52.755-23.666 52.755-52.755a8.33 8.33 0 0 0-8.33-8.33h-33.319a8.33 8.33 0 0 0 0 16.66h24.018c-3.769 15.901-18.088 27.766-35.125 27.766-19.902 0-36.095-16.193-36.095-36.095s16.193-36.095 36.095-36.095a36.05 36.05 0 0 1 23.865 9.015 8.33 8.33 0 1 0 11.021-12.493 52.698 52.698 0 0 0-34.886-13.181c-29.088 0-52.755 23.666-52.755 52.755s23.667 52.753 52.756 52.753z" style="" fill="#ffffff" data-original="#ffffff" class=""></path></g></svg></a></li>
        </ul>
    </div>
    <div style="background-color: #e3e3e3;">
      <p class="text-center p-2">© 2023  All Rights Reserved.</p>
    </div>
    
    </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bank</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

</body>
</html>
