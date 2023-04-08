<?php
   include("config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $profile_id = $_POST['profile_id'];
      $username = $_POST['username'];
      $email = $_POST['email']; 
      $password = $_POST['password'];

      $row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where profile_id='$profile_id'"));
      $profile_old_id = $row['profile_id'];
      
      if(isset($profile_old_id))
      {
         $erry="This ID Already tokens Enter Unique ID";  
      }
      else
      {
      $sql = "INSERT INTO useradmin (profile_id, username, password, email)
      VALUES ('$profile_id', '$username', '$password', '$email')";
       move_uploaded_file($tempname, $folder);
      
      if (mysqli_query($db, $sql)) {
        header("location: login.php");
      } 
      }
   }
?>
 




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- OwlCarousel2 -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">

                <div class="row justify-content-center pt-5">
<div class="col-12 col-md-6 col-lg-6">
<div class="card p-4 shadow">
    <h2 class="text-center">Register</h2>
 <form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Profile Id:</label>
    <input type="text" class="form-control" id="Profile_id" placeholder="Enter Username" name="profile_id">
    <p style="color: red;"><?php echo $erry ?></p>
  </div>                        
  <div class="mb-3">
    <label for="email" class="form-label">Username:</label>
    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

                </div>
            </div>
        </div>
</div>
    </div>



</body>

</html>
<!-- end document-->