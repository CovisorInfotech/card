<?php 
 include("config.php");
 
session_start();
if(!isset($_SESSION['login_user'])){
	header("Location:index.php");
}

$admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where profile_id='$admin_user'"));
$adminuser_id = $row['id'];

//    product
   if(isset($_POST['product'])) {
      $update_id=$_GET['update_id'];
      $product = $_POST['name_product'];
      $catagery = $_POST['catagery']; 
      $price_sell = $_POST['price'];
      $discount__sell = $_POST['discount'];
      
      if(isset($discount__sell)) {
      $price = $price_sell - ($price_sell * ($discount__sell / 100));
      $discount = $_POST['price'];
      }else{
        $price = $_POST['price'];  
      }
      
      $description = $_POST['description'];
      
    

      
     $new_product_image= $_FILES['product_image']['tmp_name'];
     $product_image_old=$_POST['product_image_old'];
     if($new_product_image !='')
    {
      list($width,$height)=getimagesize($new_product_image);
      $nwidth=600;
      $nheight=750;
      $newimage=imagecreatetruecolor($nwidth,$nheight);
      if($_FILES['product_image']['type']=='image/jpeg'){
        $source=imagecreatefromjpeg($new_product_image);
        imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
        $product_image=time().'.jpg';
        imagejpeg($newimage,'images/products/'.$product_image);
      }elseif($_FILES['product_image']['type']=='image/png'){
        $source=imagecreatefrompng($new_product_image);
        imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
        $product_image=time().'.png';
        imagepng($newimage,'images/products/'.$product_image);
      }elseif($_FILES['product_image']['type']=='image/gif'){
        $source=imagecreatefromgif($new_product_image);
        imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
        $product_image=time().'.gif';
        imagegif($newimage,'images/products/'.$product_image);
      }else{
        echo "Please select images1  jpg, png and gif image";
      }
    }
    else
    {
      $product_image=$product_image_old;
    }


    $new_product_image2= $_FILES['product_image2']['tmp_name'];
    $product_image_old2=$_POST['product_image_old2'];
    if($new_product_image2 !='')
   {
    list($width,$height)=getimagesize($new_product_image2);
    $nwidth=600;
    $nheight=750;
    $newimage=imagecreatetruecolor($nwidth,$nheight);
    if($_FILES['product_image2']['type']=='image/jpeg'){
      $source=imagecreatefromjpeg($new_product_image2);
      imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
      $product_image2=time().'.jpg';
      imagejpeg($newimage,'images/products2/'.$product_image2);
    }elseif($_FILES['product_image2']['type']=='image/png'){
      $source=imagecreatefrompng($new_product_image2);
      imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
      $product_image2=time().'.png';
      imagepng($newimage,'images/products2/'.$product_image2);
    }elseif($_FILES['product_image2']['type']=='image/gif'){
      $source=imagecreatefromgif($new_product_image2);
      imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
      $product_image2=time().'.gif';
      imagegif($newimage,'images/products2/'.$product_image2);
    }else{
      echo "Please select images2  jpg, png and gif image";
    }
   }
   else
   {
     $product_image2=$product_image_old2;
   }


   $new_product_image3= $_FILES['product_image3']['tmp_name'];
   $product_image_old3=$_POST['product_image_old3'];
   if($new_product_image3 !='')
  {
    list($width,$height)=getimagesize($new_product_image3);
    $nwidth=600;
    $nheight=750;
    $newimage=imagecreatetruecolor($nwidth,$nheight);
    if($_FILES['product_image3']['type']=='image/jpeg'){
      $source=imagecreatefromjpeg($new_product_image3);
      imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
      $product_image3=time().'.jpg';
      imagejpeg($newimage,'images/products3/'.$product_image3);
    }elseif($_FILES['product_image3']['type']=='image/png'){
      $source=imagecreatefrompng($new_product_image3);
      imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
      $product_image3=time().'.png';
      imagepng($newimage,'images/products3/'.$product_image3);
    }elseif($_FILES['product_image3']['type']=='image/gif'){
      $source=imagecreatefromgif($new_product_image3);
      imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
      $product_image3=time().'.gif';
      imagegif($newimage,'images/products3/'.$product_image3);
    }else{
      echo "Please select images3  jpg, png and gif image";
    }
  }
  else
  {
    $product_image3=$product_image_old3;
  }


  $new_product_image4= $_FILES['product_image4']['tmp_name'];
  $product_image_old4=$_POST['product_image_old4'];
  if($new_product_image4 !='')
 {
  list($width,$height)=getimagesize($new_product_image4);
  $nwidth=600;
  $nheight=750;
  $newimage=imagecreatetruecolor($nwidth,$nheight);
  if($_FILES['product_image4']['type']=='image/jpeg'){
    $source=imagecreatefromjpeg($new_product_image4);
    imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
    $product_image4=time().'.jpg';
    imagejpeg($newimage,'images/products4/'.$product_image4);
  }elseif($_FILES['product_image4']['type']=='image/png'){
    $source=imagecreatefrompng($new_product_image4);
    imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
    $product_image4=time().'.png';
    imagepng($newimage,'images/products4/'.$product_image4);
  }elseif($_FILES['product_image4']['type']=='image/gif'){
    $source=imagecreatefromgif($new_product_image4);
    imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
    $product_image4=time().'.gif';
    imagegif($newimage,'images/products4/'.$product_image4);
  }else{
    echo "Please select images4  jpg, png and gif image";
  }
 }
 else
 {
   $product_image4=$product_image_old4;
 }


 $new_product_image5= $_FILES['product_image5']['tmp_name'];
 $product_image_old5=$_POST['product_image_old5'];
 if($new_product_image5 !='')
{
  list($width,$height)=getimagesize($new_product_image5);
  $nwidth=600;
  $nheight=750;
  $newimage=imagecreatetruecolor($nwidth,$nheight);
  if($_FILES['product_image5']['type']=='image/jpeg'){
    $source=imagecreatefromjpeg($new_product_image5);
    imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
    $product_image5=time().'.jpg';
    imagejpeg($newimage,'images/products5/'.$product_image5);
  }elseif($_FILES['product_image5']['type']=='image/png'){
    $source=imagecreatefrompng($new_product_image5);
    imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
    $product_image5=time().'.png';
    imagepng($newimage,'images/products5/'.$product_image5);
  }elseif($_FILES['product_image5']['type']=='image/gif'){
    $source=imagecreatefromgif($new_product_image5);
    imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
    $product_image5=time().'.gif';
    imagegif($newimage,'images/products5/'.$product_image5);
  }else{
    echo "Please select images5  jpg, png and gif image";
  }
}
else
{
  $product_image5=$product_image_old5;
}
     
     
   
      
      $sql = "UPDATE products SET product='$product', catagery='$catagery', price='$price', description='$description', product_image='$product_image', product_image2='$product_image2', product_image3='$product_image3', product_image4='$product_image4', product_image5='$product_image5' WHERE id=$update_id";
     
      
      if (mysqli_query($db, $sql)) {


        if(isset($_POST["attributes_title"])){  
          $attributes_title=$_POST["attributes_title"];	
          $attributes_name=$_POST["attributes_name"];	
          $attributes_name_id=$_POST["attributes_name_id"];	
          foreach($attributes_title as $kay => $value)
         {
         $sql = "UPDATE product_attributes SET attributes_title='".$value."', attributes_name='".$attributes_name."' WHERE id='".$attributes_name_id[$kay]."'";
         mysqli_query($db, $sql);
         } 
          }
          
          if(isset($_POST["policy_qu"])){  
          $policy_qu=$_POST["policy_qu"];	
          $policy_an=$_POST["policy_an"];	
          $policy_an_id=$_POST["policy_an_id"];
          foreach($policy_qu as $kay => $value)
         {
       
        $sql = "UPDATE products_qusan_anser SET policy_qu='".$value."', policy_an='".$policy_an[$kay]."' WHERE id='".$policy_an_id[$kay]."'";
        mysqli_query($db, $sql);
        } 
          }


        echo "<script>alert('Produc Update'); window.location = 'product.php';</script>";
      } else {
       
      }
   }

   if(isset($_POST['cat_product'])) {
    $updatecat_id=$_GET['updatecat_id'];
    $product_category = $_POST['product_category'];
    $color = $_POST['color'];
    
    $sql = "UPDATE  cat_product SET product_category='$product_category', color='$color' WHERE id=$updatecat_id";
    
    if (mysqli_query($db, $sql)) {
      echo "<script>alert('About Update'); window.location = 'product.php';</script>";
    } else {
    }
  }
  
  
  // attributes
   if(isset($_POST['cat_attributes'])) {
    $attributes_id=$_GET['update_attributes_id'];
    $attributes_title = $_POST['attributes_title']; 

    $sql = "UPDATE product_attributes_title SET attributes_title='$attributes_title' WHERE id=$attributes_id";
    
    if (mysqli_query($db, $sql)) {
      echo "<script>alert('About Update'); window.location = 'product.php';</script>";
    } else {
    }
 }
 
 
 // cat_policy
   if(isset($_POST['cat_policy'])) {
    $qusan_id=$_GET['update_qusan_id'];
    $policy_qu = $_POST['policy_qu']; 

    $sql = "UPDATE products_qusan SET policy_qu='$policy_qu' WHERE id=$qusan_id";
    
    if (mysqli_query($db, $sql)) {
      echo "<script>alert('About Update'); window.location = 'product.php';</script>";
    } else {
    }
 }
  
  
  

// adout
   if(isset($_POST['about'])) {
    $update_id=$_GET['update_id'];
    $title_name = $_POST['title_name']; 
    $adout_name = $_POST['adout_name'];

    $sql = "UPDATE adout SET title_name='$title_name', adout_name='$adout_name' WHERE id=$update_id";
    
    if (mysqli_query($db, $sql)) {
      echo "<script>alert('About Update'); window.location = 'about.php';</script>";
    } else {
    }
 }


// blog

 if(isset($_POST["blog"])) {
     
    $update_id=$_GET['update_id'];
    
$name_client = $_POST['name_client'];
$link_client_profile = $_POST['link_client_profile'];
$blog_title = $_POST['blog_title'];
$work_short_discription = $_POST['work_short_discription'];
$ratings_client = $_POST['ratings_client'];
$blog_description = $_POST['blog_description'];
$pincode = $_POST['pincode'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$amount_work = $_POST['amount_work'];
$time_taken_work = $_POST['time_taken_work'];
$tags = $_POST['tags'];

   
    $new_blog_image = $_FILES["blog_image"]["name"];
    $blog_image_old=$_POST['blog_image_old'];
     if($new_blog_image !='')
    {
        $tempa = explode(".", $_FILES["blog_image"]["name"]);
        $blog_image = round(microtime(true)) . '.' . end($tempa);
        $tempname = $_FILES["blog_image"]["tmp_name"];
        $folder = "images/blog/".$blog_image;
        move_uploaded_file($tempname, $folder);
    }
    else
    {
      $blog_image=$blog_image_old;
    }
   

    $blog_date = date("d/m/Y");
    $sql_blog = "UPDATE blog SET name_client='$name_client', link_client_profile='$link_client_profile', blog_title='$blog_title', work_short_discription='$work_short_discription', ratings_client='$ratings_client', blog_image='$blog_image', blog_description='$blog_description', pincode='$pincode', city='$city', state='$state', country='$country', amount_work='$amount_work', time_taken_work='$time_taken_work', tags='$tags', blog_date='$blog_date' WHERE id=$update_id";

     if (mysqli_query($db, $sql_blog)) {
      echo "<script>alert('Blog Update'); window.location = 'blog.php';</script>";
    } else {
    }
 }


// faq
 if(isset($_POST['faq'])) {
    $update_id=$_GET['update_id'];
    $faq_catagery = $_POST['faq_catagery'];
    $faq_qusan = $_POST['faq_qusan']; 
    $faq_anser = $_POST['faq_anser'];

    $sql = "UPDATE faq SET faq_catagery='$faq_catagery', faq_qusan='$faq_qusan', faq_anser='$faq_anser' WHERE id=$update_id";
    if (mysqli_query($db, $sql)) {
      echo "<script>alert('Faq Update'); window.location = 'faq.php';</script>";
    } else {
    }
 }


 //  pro_business_hours
 if(isset($_POST['pro_business_hours'])) {
   $update_id=$_GET['update_id'];
   $open_time = $_POST['open_time'];
   $closed_time = $_POST['closed_time'];
   $status="1";
   if(isset($_POST['monday'])) {$monday = $_POST['monday'];}else{$monday ="Closed";}
   if(isset($_POST['tuesday'])) {$tuesday = $_POST['tuesday'];}else{$tuesday ="Closed";}
   if(isset($_POST['wenesday'])) {$wenesday = $_POST['wenesday'];}else{$wenesday ="Closed";}
   if(isset($_POST['thursday'])) {$thursday = $_POST['thursday'];}else{$thursday ="Closed";}
   if(isset($_POST['friday'])) {$friday = $_POST['friday'];}else{$friday ="Closed";}
   if(isset($_POST['saturday'])) {$saturday = $_POST['saturday'];}else{$saturday ="Closed";}
 
   $sql = "INSERT INTO pro_business_hours (adminuser_id, open_time, closed_time, monday, tuesday, wenesday, thursday, friday, saturday, hours_status)
   VALUES ('$adminuser_id','$open_time','$closed_time','$monday','$tuesday','$wenesday','$thursday','$friday','$saturday','$hours_status')";
   if (mysqli_query($db, $sql)) {
     echo "<script>alert('Add business hours successfully'); window.location = 'pro-business-hours.php';</script>";
   } else {
   }
 }
 
 if(isset($_POST['pro_connect'])) {
    $update_id=$_GET['update_id'];
    $phone = $_POST['phone'];
    $whatsapp = $_POST['whatsapp'];
    $email = $_POST['email'];
    $address = $_POST['address'];
 

    
   $new_download_file= $_FILES["download_file"]["name"];
   $download_file_old=$_POST['download_file_old'];
   if($new_download_file !='')
   {
      $tempa_download_file = explode(".", $_FILES["download_file"]["name"]);
      $download_file = round(microtime(true)) . '.' . end($tempa_download_file);
      $tempname_paytm = $_FILES["download_file"]["tmp_name"];
      $folder_download_file = "images/download/".$download_file;
   }
   else
   {
      $download_file=$download_file_old;
   }
 
    $sql = "UPDATE pro_connect SET phone='$phone', whatsapp='$whatsapp', email='$email', address='$address', download_file='$download_file'  WHERE id=$update_id";

    
    if (mysqli_query($db, $sql)) {
     move_uploaded_file($tempname_paytm, $folder_download_file);
      echo "<script>alert('Edit connect successfully'); window.location = 'pro-connect.php';</script>";
    } else {
    }
  }


    
 
  if(isset($_POST['pro_follow'])) {
   $update_id=$_GET['update_id'];
   $website = $_POST['website'];
   $facebook = $_POST['facebook'];
   $instagram = $_POST['instagram'];
   $twitter = $_POST['twitter'];
   $youtube = $_POST['youtube'];
   $linkedIn = $_POST['linkedIn'];
 
   $sql = "UPDATE pro_follow SET website='$website', facebook='$facebook', instagram='$instagram', twitter='$twitter', youtube='$youtube', linkedIn='$linkedIn'  WHERE id=$update_id";

   if (mysqli_query($db, $sql)) {
     echo "<script>alert('Edit follow successfully'); window.location = 'pro-follow.php';</script>";
   } else {
   }
 }
 
 if(isset($_POST['pro_pay'])) {
   $update_id=$_GET['update_id'];

   $paste_payment = $_POST['paste_payment'];
   $upi_paytm = $_POST['upi_paytm'];
   $number_paytm = $_POST['number_paytm'];
   $paste_googlepay = $_POST['paste_googlepay'];
   $upi_googlepay = $_POST['upi_googlepay'];
   $number_googlepay = $_POST['number_googlepay'];
   $paste_phonepay = $_POST['paste_phonepay'];
   $upi_phonepay = $_POST['upi_phonepay'];
   $number_phonepay = $_POST['number_phonepay'];
   

   $bank = $_POST['bank'];
   $bank_branch = $_POST['bank_branch'];
   $account_number = $_POST['account_number'];
   $ifsc_code = $_POST['ifsc_code'];
   $other = $_POST['other'];
   
   
   
   $new_qr_paytm= $_FILES["qr_paytm"]["name"];
   $qr_paytm_old=$_POST['qr_paytm_old'];
   if($new_qr_paytm !='')
   {
      $tempa_paytm = explode(".", $_FILES["qr_paytm"]["name"]);
      $qr_paytm = round(microtime(true)) . '.' . end($tempa_paytm);
      $tempname_paytm = $_FILES["qr_paytm"]["tmp_name"];
      $folder_paytm = "images/pay/paytm/".$qr_paytm;
   }
   else
   {
      $qr_paytm=$qr_paytm_old;
   }



   $new_qr_google= $_FILES["qr_google"]["name"];
   $qr_google_old=$_POST['qr_google_old'];
   if($new_qr_google !='')
   {
      $tempa_google = explode(".", $_FILES["qr_google"]["name"]);
      $qr_google = round(microtime(true)) . '.' . end($tempa_google);
      $tempname_google = $_FILES["qr_google"]["tmp_name"];
      $folder_google = "images/pay/google/".$qr_google;
   }
   else
   {
      $qr_google=$qr_google_old;
   }
   
   
   
   $new_qr_phone= $_FILES["qr_phone"]["name"];
   $qr_phone_old=$_POST['qr_phone_old'];
   if($new_qr_phone !='')
   {
       $tempa_phone = explode(".", $_FILES["qr_phone"]["name"]);
       $qr_phone = round(microtime(true)) . '.' . end($tempa_phone);
       $tempname_phone = $_FILES["qr_phone"]["tmp_name"];
       $folder_phone = "images/pay/phone/".$qr_phone;
   }
   else
   {
      $qr_phone=$qr_phone_old;
   }
   
 
 
   $sql = "UPDATE pro_pay SET paste_payment='$paste_payment', upi_paytm='$upi_paytm', number_paytm='$number_paytm', qr_paytm='$qr_paytm', paste_googlepay='$paste_googlepay', upi_googlepay='$upi_googlepay', number_googlepay='$number_googlepay', qr_google='$qr_google', paste_phonepay='$paste_phonepay', upi_phonepay='$upi_phonepay', number_phonepay='$number_phonepay', qr_phone='$qr_phone', bank='$bank', bank_branch='$bank_branch', account_number='$account_number', ifsc_code='$ifsc_code', other='$other'  WHERE id=$update_id";
   
   if (mysqli_query($db, $sql)) {
    move_uploaded_file($tempname_paytm, $folder_paytm);
    move_uploaded_file($tempname_google, $folder_google);
    move_uploaded_file($tempname_phone, $folder_phone);
     echo "<script>alert('Edit pay Successfully'); window.location = 'pro-pay.php';</script>";
   } else {
   }
 }

 if(isset($_POST['pro_member'])) {
  $update_id=$_GET['update_id'];
  $much_communities=$_POST['much_communities'];
  $name_community = $_POST['name_community'];
  $year_which = $_POST['year_which'];
  $area_region = $_POST['area_region'];
  $post_link_group = $_POST['post_link_group'];
  $other = $_POST['other'];
  
  
    $new_logo_community= $_FILES["logo_community"]["name"];
    $logo_community_old=$_POST['logo_community_old'];
     if($new_logo_community !='')
    {
      $tempa = explode(".", $_FILES["logo_community"]["name"]);
      $logo_community = round(microtime(true)) . '.' . end($tempa);
      $tempname = $_FILES["logo_community"]["tmp_name"];
      $folder = "images/member/".$logo_community;
    }
    else
    {
      $logo_community=$logo_community_old;
    }


  $sql = "UPDATE pro_member SET  much_communities='$much_communities', name_community='$name_community', year_which='$year_which', area_region='$area_region', post_link_group='$post_link_group', other='$other', logo_community='$logo_community' WHERE id=$update_id";

  if (mysqli_query($db, $sql)) {
   move_uploaded_file($tempname, $folder);
    echo "<script>alert('Edit connect successfully'); window.location = 'pro-member.php';</script>";
  } else {
  }
}


 if(isset($_POST['connections'])) {
    $update_id=$_GET['update_id'];
    $connections_id = $_POST['connections_id'];
    $category_connection = $_POST['category_connection'];

    $sql = "UPDATE connections SET connections_id='$connections_id', category_connection='$category_connection' WHERE id=$update_id";
    if (mysqli_query($db, $sql)) {
      echo "<script>alert('Connections Update'); window.location = 'connections.php';</script>";
    } else {
    }
 }
 
 ?>