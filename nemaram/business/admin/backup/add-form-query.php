<?php 
include("config.php");
session_start();
if(!isset($_SESSION['login_user'])){
	header("Location:index.php");
}

$admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where profile_id='$admin_user'"));
$adminuser_id = $row['id'];


   if(isset($_POST['product'])) {
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

      $image=$_FILES['product_image']['tmp_name'];
      $image2=$_FILES['product_image2']['tmp_name'];
      $image3=$_FILES['product_image3']['tmp_name'];
      $image4=$_FILES['product_image4']['tmp_name'];
      $image5=$_FILES['product_image5']['tmp_name'];
      
       
      if (isset($image) && $image !== '') {    
      list($width,$height)=getimagesize($image);
      $nwidth=600;
      $nheight=750;
      $newimage=imagecreatetruecolor($nwidth,$nheight);
      if($_FILES['product_image']['type']=='image/jpeg'){
        $source=imagecreatefromjpeg($image);
        imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
        $product_image=time().'.jpg';
        imagejpeg($newimage,'images/products/'.$product_image);
      }elseif($_FILES['product_image']['type']=='image/png'){
        $source=imagecreatefrompng($image);
        imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
        $product_image=time().'.png';
        imagepng($newimage,'images/products/'.$product_image);
      }elseif($_FILES['product_image']['type']=='image/gif'){
        $source=imagecreatefromgif($image);
        imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
        $product_image=time().'.gif';
        imagegif($newimage,'images/products/'.$product_image);
      }else{
        echo "Please select images1  jpg, png and gif image";
      }
     }


      if (isset($image2) && $image2 !== '') {
        list($width,$height)=getimagesize($image2);
        $nwidth=600;
        $nheight=750;
        $newimage=imagecreatetruecolor($nwidth,$nheight);
        if($_FILES['product_image2']['type']=='image/jpeg'){
          $source=imagecreatefromjpeg($image2);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $product_image2=time().'.jpg';
          imagejpeg($newimage,'images/products2/'.$product_image2);
        }elseif($_FILES['product_image2']['type']=='image/png'){
          $source=imagecreatefrompng($image2);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $product_image2=time().'.png';
          imagepng($newimage,'images/products2/'.$product_image2);
        }elseif($_FILES['product_image2']['type']=='image/gif'){
          $source=imagecreatefromgif($image2);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $product_image2=time().'.gif';
          imagegif($newimage,'images/products2/'.$product_image2);
        }else{
          echo "Please select images2  jpg, png and gif image";
        }
       }


      if (isset($image3) && $image3 !== '') {
        list($width,$height)=getimagesize($image3);
        $nwidth=600;
        $nheight=750;
        $newimage=imagecreatetruecolor($nwidth,$nheight);
        if($_FILES['product_image3']['type']=='image/jpeg'){
          $source=imagecreatefromjpeg($image3);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $product_image3=time().'.jpg';
          imagejpeg($newimage,'images/products3/'.$product_image3);
        }elseif($_FILES['product_image3']['type']=='image/png'){
          $source=imagecreatefrompng($image3);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $product_image3=time().'.png';
          imagepng($newimage,'images/products3/'.$product_image3);
        }elseif($_FILES['product_image3']['type']=='image/gif'){
          $source=imagecreatefromgif($image3);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $product_image3=time().'.gif';
          imagegif($newimage,'images/products3/'.$product_image3);
        }else{
          echo "Please select images3  jpg, png and gif image";
        }
       }


      if (isset($image4) && $image4 !== '') {
        
        list($width,$height)=getimagesize($image4);
        $nwidth=600;
        $nheight=750;
        $newimage=imagecreatetruecolor($nwidth,$nheight);
        if($_FILES['product_image4']['type']=='image/jpeg'){
          $source=imagecreatefromjpeg($image4);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $product_image4=time().'.jpg';
          imagejpeg($newimage,'images/products4/'.$product_image4);
        }elseif($_FILES['product_image4']['type']=='image/png'){
          $source=imagecreatefrompng($image4);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $product_image4=time().'.png';
          imagepng($newimage,'images/products4/'.$product_image4);
        }elseif($_FILES['product_image4']['type']=='image/gif'){
          $source=imagecreatefromgif($image4);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $product_image4=time().'.gif';
          imagegif($newimage,'images/products4/'.$product_image4);
        }else{
          echo "Please select images4  jpg, png and gif image";
        }
       }



      if (isset($image5) && $image5 !== '') {
        list($width,$height)=getimagesize($image5);
        $nwidth=600;
        $nheight=750;
        $newimage=imagecreatetruecolor($nwidth,$nheight);
        if($_FILES['product_image5']['type']=='image/jpeg'){
          $source=imagecreatefromjpeg($image5);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $product_image5=time().'.jpg';
          imagejpeg($newimage,'images/products5/'.$product_image5);
        }elseif($_FILES['product_image5']['type']=='image/png'){
          $source=imagecreatefrompng($image5);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $product_image5=time().'.png';
          imagepng($newimage,'images/products5/'.$product_image5);
        }elseif($_FILES['product_image5']['type']=='image/gif'){
          $source=imagecreatefromgif($image5);
          imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
          $product_image5=time().'.gif';
          imagegif($newimage,'images/products5/'.$product_image5);
        }else{
          echo "Please select images5  jpg, png and gif image";
        }
       }



      $products_status="1";
      $product_tokan=(rand(10,100));
      
      $sql = "INSERT INTO products (adminuser_id, product_tokan, product, catagery, price, discount, description, product_image, product_image2, product_image3, product_image4, product_image5, products_status)
      VALUES ('$adminuser_id','$product_tokan','$product','$catagery','$price','$discount','$description','$product_image','$product_image2','$product_image3','$product_image4','$product_image5','$products_status')";
     
      if (mysqli_query($db, $sql)) {
         
        if(isset($_POST["attributes_title"])){  
        $attributes_title=$_POST["attributes_title"];	
        $attributes_name=$_POST["attributes_name"];	
        $attributes_status="1";
        foreach($attributes_title as $kay => $value)
     	{
 		$save = "INSERT INTO product_attributes(product_tokan,attributes_title,attributes_name,attributes_status) 
 		VALUES('".$product_tokan."','".$value."','".$attributes_name[$kay]."','".$attributes_status."')";
 		$query = mysqli_query($db, $save);
 	    } 
        }
        
        if(isset($_POST["policy_qu"])){  
        $policy_qu=$_POST["policy_qu"];	
        $policy_an=$_POST["policy_an"];	
        $products_policy_status="1";
        foreach($policy_qu as $kay => $value)
     	{
 		$save2 = "INSERT INTO products_qusan_anser(product_tokan,policy_qu,policy_an,products_policy_status) 
 		VALUES('".$product_tokan."','".$value."','".$policy_an[$kay]."','".$products_policy_status."')";
 		$query2 = mysqli_query($db, $save2);
 	    } 
        }
          
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



 if(isset($_POST['add_policy'])) {
  $product_id = $_POST['product_id']; 
  $policy_qu = $_POST['policy_qu'];
  $policy_an = $_POST['policy_an'];
  $products_policy_status ="1";
  

 $sql = "INSERT INTO products_qusan_anser (adminuser_id, product_id, policy_qu, policy_an, products_policy_status)
  VALUES ('$adminuser_id','$product_id','$policy_qu','$policy_an','$products_policy_status')";
  
  if (mysqli_query($db, $sql)) {
    echo "<script>alert('Add Successfully'); window.location = 'add-product-policy.php';</script>";
  } else {
  }
}


// blog

 if(isset($_POST["blog"])) {

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
$blog_status="1";


    
  $tempa = explode(".", $_FILES["blog_image"]["name"]);
  $blog_image = round(microtime(true)) . '.' . end($tempa);
  $tempname = $_FILES["blog_image"]["tmp_name"];
  $folder = "images/blog/".$blog_image;

    $blog_date = date("d/m/Y");
   
    
    $sql = "INSERT INTO blog (adminuser_id,name_client,link_client_profile,blog_title,work_short_discription,ratings_client,blog_image,blog_description,pincode,city,state,country,amount_work,time_taken_work,tags,blog_date,blog_status)
    VALUES ('$adminuser_id','$name_client','$link_client_profile','$blog_title','$work_short_discription','$ratings_client','$blog_image','$blog_description','$pincode','$city','$state','$country','$amount_work','$time_taken_work','$tags','$blog_date','$blog_status')";
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


if(isset($_POST['add_policy_qusan'])) {
  $policy_qu = $_POST['policy_qu'];
  $products_qa_status = "1";
  
  $sql = "INSERT INTO products_qusan (adminuser_id, policy_qu, products_qa_status)
  VALUES ('$adminuser_id','$policy_qu','$products_qa_status')";
  
  if (mysqli_query($db, $sql)) {
    echo "<script>alert('Add successfully'); window.location = 'add-product-policy.php';</script>";
  } else {
  }
}


if(isset($_POST['add_attributes_title'])) {
  $attributes_title = $_POST['attributes_title'];
  $attributes_title_status = "1";
  
  $sql = "INSERT INTO product_attributes_title (adminuser_id, attributes_title, attributes_title_status)
  VALUES ('$adminuser_id','$attributes_title','$attributes_title_status')";
  
  if (mysqli_query($db, $sql)) {
    echo "<script>alert('Add successfully'); window.location = 'add-product-attributes.php';</script>";
  } else {
  }
}

if(isset($_POST['add_attributes'])) {

  $product_id = $_POST['product_id'];
  $attributes_title = $_POST['attributes_title'];
  $attributes_name = $_POST['attributes_name'];
  $attributes_status = "1";
  
  $sql = "INSERT INTO product_attributes (adminuser_id, product_id, attributes_title, attributes_name, attributes_status)
  VALUES ('$adminuser_id','$product_id','$attributes_title','$attributes_name','$attributes_status')";
  
  if (mysqli_query($db, $sql)) {
    echo "<script>alert('Add successfully'); window.location = 'product-attributes.php';</script>";
  } else {
  }
}


if(isset($_POST['cat_product'])) {
   $product_category = $_POST['product_category'];
   $color = $_POST['color'];
   $sql = "INSERT INTO cat_product (adminuser_id, product_category, color)
   VALUES ('$adminuser_id','$product_category','$color')";
   
   if (mysqli_query($db, $sql)) {
     echo "<script>alert('Add category successfully'); window.location = 'product.php';</script>";
   } else {
   }
 }


 //  pro_business_hours
 if(isset($_POST['pro_business_hours'])) {

  $open_time = $_POST['open_time'];
  $closed_time = $_POST['closed_time'];
  $hours_status="1";
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
   $phone = $_POST['phone'];
   $whatsapp = $_POST['whatsapp'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $connect_status="1";

   $download_file = $_FILES["download_file"]["name"];
   $tempname = $_FILES["download_file"]["tmp_name"];
   $folder = "images/download/".$download_file;

   $sql = "INSERT INTO pro_connect (adminuser_id, phone, whatsapp, email, address, download_file, connect_status)
   VALUES ('$adminuser_id','$phone','$whatsapp','$email','$address','$download_file','$connect_status')";
   
   if (mysqli_query($db, $sql)) {
    move_uploaded_file($tempname, $folder);
     echo "<script>alert('Add category successfully'); window.location = 'pro-connect.php';</script>";
   } else {
   }
 }


 if(isset($_POST['pro_follow'])) {
  $website = $_POST['website'];
  $facebook = $_POST['facebook'];
  $instagram = $_POST['instagram'];
  $twitter = $_POST['twitter'];
  $youtube = $_POST['youtube'];
  $linkedIn = $_POST['linkedIn'];
  $follow_status="1";


  $sql = "INSERT INTO pro_follow (adminuser_id, website, facebook, instagram, twitter, youtube, linkedIn, follow_status)
  VALUES ('$adminuser_id','$website','$facebook','$instagram','$twitter','$youtube','$linkedIn','$follow_status')";
  
  if (mysqli_query($db, $sql)) {
    echo "<script>alert('Add category successfully'); window.location = 'pro-follow.php';</script>";
  } else {
  }
}

if(isset($_POST['pro_pay'])) {

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
  $pay_status="1";


  $tempa = explode(".", $_FILES["qr_paytm"]["name"]);
  $qr_paytm = round(microtime(true)) . '.' . end($tempa);
  $tempname_paytm = $_FILES["qr_paytm"]["tmp_name"];
  $folder_paytm = "images/pay/".$qr_paytm;

  $tempa = explode(".", $_FILES["qr_google"]["name"]);
  $qr_google = round(microtime(true)) . '.' . end($tempa);
  $tempname_google = $_FILES["qr_google"]["tmp_name"];
  $folder_google = "images/pay/".$qr_google;

  $tempa = explode(".", $_FILES["qr_phone"]["name"]);
  $qr_phone = round(microtime(true)) . '.' . end($tempa);
  $tempname_phone = $_FILES["qr_phone"]["tmp_name"];
  $folder_phone = "images/pay/".$qr_phone;




  $sql = "INSERT INTO pro_pay (adminuser_id,
  paste_payment,upi_paytm,number_paytm,qr_paytm,paste_googlepay,upi_googlepay,number_googlepay,qr_google,paste_phonepay,upi_phonepay,number_phonepay,qr_phone,bank,bank_branch,account_number,ifsc_code,other,pay_status)
  VALUES ('$adminuser_id','$paste_payment','$upi_paytm','$number_paytm','$qr_paytm','$paste_googlepay','$upi_googlepay','$number_googlepay','$qr_google','$paste_phonepay','$upi_phonepay','$number_phonepay','$qr_phone','$bank','$bank_branch','$account_number','$ifsc_code','$other','$pay_status')";
  
  if (mysqli_query($db, $sql)) {
    move_uploaded_file($tempname_paytm, $folder_paytm);
    move_uploaded_file($tempname_google, $folder_google);
    move_uploaded_file($tempname_phone, $folder_phone);
    echo "<script>alert('Add Payment successfully'); window.location = 'pro-pay.php';</script>";
  } else {
  }
}



if(isset($_POST['pro_member'])) {
  $much_communities = $_POST['much_communities'];
  $name_community = $_POST['name_community'];
  $year_which = $_POST['year_which'];
  $area_region = $_POST['area_region'];
  $post_link_group = $_POST['post_link_group'];
  $other = $_POST['other'];
  $member_status="1";

  $tempa = explode(".", $_FILES["logo_community"]["name"]);
  $logo_community = round(microtime(true)) . '.' . end($tempa);
  $tempname = $_FILES["logo_community"]["tmp_name"];
  $folder = "images/member/".$logo_community;

$sql = "INSERT INTO pro_member (adminuser_id, much_communities, name_community, year_which, area_region, post_link_group, other, logo_community,member_status)
  VALUES ('$adminuser_id','$much_communities','$name_community','$year_which','$area_region','$post_link_group','$other','$logo_community','$member_status')";
  
  if (mysqli_query($db, $sql)) {
   move_uploaded_file($tempname, $folder);
    echo "<script>alert('Add member successfully'); window.location = 'pro-member.php';</script>";
  } else {
  }
}


 if(isset($_POST['connections'])) {
  $connections_id = $_POST['connections_id'];
  $category_connection = $_POST['category_connection'];
  $connections_status="0";


  $sql = "INSERT INTO connections (adminuser_id, connections_id, category_connection, connections_status)
  VALUES ('$adminuser_id','$connections_id','$category_connection','$connections_status')";
  
  if (mysqli_query($db, $sql)) {
    echo "<script>alert('Add connections successfully'); window.location = 'connections.php';</script>";
  } else {
  }
}

?>

