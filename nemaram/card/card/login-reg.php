<?php
include("config.php");
session_start();
if(isset($_POST['reg_submit'])){
        $username = $_POST['name'];
        $mobile_number = $_POST['mobile_number'];
        $email = $_POST['email']; 
        $userpassword = $_POST['password'];
  
        $row=mysqli_fetch_assoc(mysqli_query($db, "select * from profile where mobile_number='$mobile_number'"));
        $profile_old_id = $row['mobile_number'];
        
        if(isset($profile_old_id))
        {
           $erry="This ID Already tokens Enter Unique ID";  
        }
        else
        {
   $sql = "INSERT INTO profile (username,email,userpassword,mobile_number) VALUES ('$username','$email','$userpassword','$mobile_number')";
        
        if (mysqli_query($db, $sql)) {
          header("location: signin.php");
        } 
        }
}


if(isset($_POST['login_submit'])){
    
    $mynumber = $_POST['mobile_number'];
    $mypassword = $_POST['password']; 
    
    $sql = "SELECT id FROM profile WHERE mobile_number = '$mynumber' and userpassword = '$mypassword'";
    $result = mysqli_query($db, $sql);
 

    $count = mysqli_num_rows($result);
    
      
    if($count == 1) {
       $_SESSION['mobile_number'] = $mynumber;
       header("location: Admin/index.php");
    }else {
        header("location: signin.php");
    }
 }
?>