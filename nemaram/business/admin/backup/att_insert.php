<?php
session_start();
include("config.php");
$admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where profile_id='$admin_user'"));
$adminuser_id = $row['id'];

if(isset($_POST["attributes_title"]))
{
    $attributes_title_status="1";
        $policy_qu=$_POST["attributes_title"];	
        $attributes_title=$_POST["attributes_title"];	
        foreach($attributes_title as $kay => $value)
     	{
 		$save2 = "INSERT INTO product_attributes_title(adminuser_id,attributes_title,attributes_title_status) 
 		VALUES('".$adminuser_id."','".$value."','".$attributes_title_status."')";
 		$result = mysqli_query($db, $save2);
 	    } 
 	    
	if(isset($result))
	{
		echo 'ok';
	}

}



if(isset($_POST["policy_qu"]))
{
    $products_qa_status="1";

        $policy_qu=$_POST["policy_qu"];	
        foreach($policy_qu as $kay => $value)
     	{
 		$save2 = "INSERT INTO products_qusan(adminuser_id,policy_qu,products_qa_status) 
 		VALUES('".$adminuser_id."','".$value."','".$products_qa_status."')";
 		$result = mysqli_query($db, $save2);
 	    } 
 	    
	if(isset($result))
	{
		echo 'ok';
	}

}




?>
