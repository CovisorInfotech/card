<?php
if(isset($_POST['bookmark'])){
$cookie_name="cook";
$cookie_value=$_POST['cookie_value'];  
setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");
echo "<script>alert('Add bookmark successfully'); window.location = 'index.php';</script>";
}
?>