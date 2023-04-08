<?php
session_start();
include("config.php");
if(!isset($_SESSION['login_user'])){
	header("Location:index.php");
}


// product
if (!isset($_POST['product'])) {
$id = $_GET['id'];
mysqli_query($db, "delete from products where id='$id'");
header("location: product.php");
}


// about
if (!isset($_POST['about'])) {
$id = $_GET['id'];
mysqli_query($db, "delete from about where id='$id'");
header("location: product.php");
}

// blog
if (!isset($_POST['blog'])) {
$id = $_GET['id'];
mysqli_query($db, "delete from blog where id='$id'");
header("location: product.php");
}


// faq
if (!isset($_POST['faq'])) {
$id = $_GET['id'];
mysqli_query($db, "delete from faq where id='$id'");
header("location: product.php");
}










?>