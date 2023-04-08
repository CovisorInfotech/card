<?php 
 include("config.php");
 
session_start();
if(!isset($_SESSION['login_user'])){
	header("Location:index.php");
}

$admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where username='$admin_user'"));
$adminuser_id = $row['id'];

//    product
   if(isset($_POST['product'])) {
      $product = $_POST['name_product'];
      $catagery = $_POST['catagery']; 
      $price = $_POST['price'];
      $description = $_POST['description'];

      

      $product_image = $_FILES["product_image"]["name"];
      $tempname = $_FILES["product_image"]["tmp_name"];
      $folder = "images/products/".$product_image;
     
      
      $sql = "INSERT INTO products (adminuser_id, product, catagery, price, description , product_image)
      VALUES ('$adminuser_id', '$product','$catagery', '$price', '$description', '$product_image')";
       move_uploaded_file($tempname, $folder);
      
      if (mysqli_query($db, $sql)) {
      echo "<script>alert('Add Produc Successfully'); window.location = 'product.php';</script>";
      } else {
      }
   }


// adout
   if(isset($_POST['about'])) {
    $title_name = $_POST['title_name']; 
    $adout_name = $_POST['adout_name'];

    $sql = "INSERT INTO adout (adminuser_id, title_name, adout_name)
    VALUES ('$adminuser_id', '$title_name','$adout_name')";
    
    if (mysqli_query($db, $sql)) {
      echo "<script>alert('Add About Successfully'); window.location = 'about.php';</script>";
    } else {
    }
 }


// blog

 if(isset($_POST["blog"])) {
    $blog_title = $_POST['blog_title']; 
    $blog_description = $_POST['blog_description'];


    $blog_image = $_FILES["blog_image"]["name"];
    $tempname = $_FILES["blog_image"]["tmp_name"];
    $folder = "images/blog/".$blog_image;
   
    
    $sql = "INSERT INTO blog (adminuser_id, blog_title, blog_image, blog_description)
    VALUES ('$adminuser_id', '$blog_title','$blog_image', '$blog_description')";
     move_uploaded_file($tempname, $folder);
    
    if (mysqli_query($db, $sql)) {
      echo "<script>alert('Add Blog successfully'); window.location = 'blog.php';</script>";
    } else {
        
    }
 }


// faq
 if(isset($_POST['faq'])) {
    $faq_catagery = $_POST['faq_catagery'];
    $faq_qusan = $_POST['faq_qusan']; 
    $faq_anser = $_POST['faq_anser'];

    $sql = "INSERT INTO faq (adminuser_id, faq_catagery, faq_qusan, faq_anser)
    VALUES ('$adminuser_id', '$faq_catagery', '$faq_qusan', '$faq_anser')";
    
    if (mysqli_query($db, $sql)) {
      echo "<script>alert('Add Faq successfully'); window.location = 'faq.php';</script>";
    } else {
    }
 }




// Category

//  about_category
 if(isset($_POST['cat_about'])) {
  $about_category = $_POST['about_category'];
  $sql = "INSERT INTO cat_about (adminuser_id, about_category)
  VALUES ('$adminuser_id', '$about_category')";
  
  if (mysqli_query($db, $sql)) {
    echo "<script>alert('Add category successfully'); window.location = 'about.php';</script>";
  } else {
  }
}

if(isset($_POST['cat_product'])) {
   $product_category = $_POST['product_category'];
   $sql = "INSERT INTO cat_product (adminuser_id, product_category)
   VALUES ('$adminuser_id', '$product_category')";
   
   if (mysqli_query($db, $sql)) {
     echo "<script>alert('Add category successfully'); window.location = 'product.php';</script>";
   } else {
   }
 }


 //  pro_business_hours
 if(isset($_POST['pro_business_hours'])) {

  $open_time = $_POST['open_time'];
  $closed_time = $_POST['closed_time'];
  $status="1";
  if(isset($_POST['monday'])) {$monday = $_POST['monday'];}else{$monday ="Closed";}
  if(isset($_POST['tuesday'])) {$tuesday = $_POST['tuesday'];}else{$tuesday ="Closed";}
  if(isset($_POST['wenesday'])) {$wenesday = $_POST['wenesday'];}else{$wenesday ="Closed";}
  if(isset($_POST['thursday'])) {$thursday = $_POST['thursday'];}else{$thursday ="Closed";}
  if(isset($_POST['friday'])) {$friday = $_POST['friday'];}else{$friday ="Closed";}
  if(isset($_POST['saturday'])) {$saturday = $_POST['saturday'];}else{$saturday ="Closed";}

  $sql = "INSERT INTO pro_business_hours (adminuser_id, open_time, closed_time, monday, tuesday, wenesday, thursday, friday, saturday, status)
  VALUES ('$adminuser_id','$open_time','$closed_time','$monday','$tuesday','$wenesday','$thursday','$friday','$saturday','$status')";
  if (mysqli_query($db, $sql)) {
    echo "<script>alert('Add business hours successfully'); window.location = 'about.php';</script>";
  } else {
  }
}

if(isset($_POST['pro_connect'])) {
   $phone = $_POST['phone'];
   $whatsapp = $_POST['whatsapp'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $status="1";

   $download_file = $_FILES["download_file"]["name"];
   $tempname = $_FILES["download_file"]["tmp_name"];
   $folder = "images/download/".$download_file;

   $sql = "INSERT INTO pro_connect (adminuser_id, phone, whatsapp, email, address, download_file, status)
   VALUES ('$adminuser_id','phone','whatsapp','email','address','download_file','status')";
   
   if (mysqli_query($db, $sql)) {
    move_uploaded_file($tempname, $folder);
     echo "<script>alert('Add category successfully'); window.location = 'product.php';</script>";
   } else {
   }
 }

?>

