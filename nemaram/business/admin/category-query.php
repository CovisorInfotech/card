<?php 
 include("config.php");
 
session_start();
if(!isset($_SESSION['login_user'])){
	header("Location:index.php");
}
$admin_user=$_SESSION['login_user'];

$admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where username='$admin_user'"));
$adminuser_id = $row['id'];

//    blog
   if(!isset($row['blog'])) {
      $blog_category = $_POST['blog_category'];
      $sql = "INSERT INTO products (adminuser_id, blog_category)VALUES ('$adminuser_id', '$blog_category')";
      move_uploaded_file($tempname, $folder);
      
        if (mysqli_query($db, $sql)) {
        echo "New record created successfully";
        header("location: blog_category.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
   }

//    faq
   if(!isset($row['faq'])) {
    $blog_category = $_POST['faq_category'];
    $sql = "INSERT INTO products (adminuser_id, faq_category)VALUES ('$adminuser_id', '$faq_category')";
    move_uploaded_file($tempname, $folder);
    
      if (mysqli_query($db, $sql)) {
      echo "New record created successfully";
      header("location: faq_category.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
 }


 if(!isset($row['blog'])) {
    $blog_category = $_POST['blog_category'];
    $sql = "INSERT INTO products (adminuser_id, blog_category)VALUES ('$adminuser_id', '$blog_category')";
    move_uploaded_file($tempname, $folder);
    
      if (mysqli_query($db, $sql)) {
      echo "New record created successfully";
      header("location: blog_category.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
 }

// about
 if(!isset($row['about'])) {
    $blog_category = $_POST['about_category'];
    $sql = "INSERT INTO products (adminuser_id, about_category)VALUES ('$adminuser_id', '$about_category')";
    move_uploaded_file($tempname, $folder);
    
      if (mysqli_query($db, $sql)) {
      echo "New record created successfully";
      header("location: about_category.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
 }


?>