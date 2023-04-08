<?php 
$id=$_GET['id'];
include("config.php"); 
session_start();
$admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where username='$admin_user'"));
$adminuser_id = $row['id']; 

if(isset($_POST['add_comment'])){


    $bolg_id = $id;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $comment_date = date("d/m/Y");
    $comment_status="1";
   
if($id !='')
{
$sql_comment ="INSERT INTO blog_comment (adminuser_id,bolg_id,name,email,comment,comment_date,comment_status)
VALUES ('$adminuser_id','$bolg_id','$name','$email','$comment','$comment_date','$comment_status')";

    mysqli_query($db, $sql_comment);
    header("location:blog-details.php?id=$id");
}
    else
    {
      header("location:login.php");
    }    
   
}

?>