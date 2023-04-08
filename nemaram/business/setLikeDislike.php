<?php
include('config.php');
if(isset($_POST['type']) && $_POST['type']!='' && isset($_POST['id']) && $_POST['id']>0){
	$type=mysqli_real_escape_string($db,$_POST['type']);
	$id=mysqli_real_escape_string($db,$_POST['id']);
	
	if($type=='like'){
		if(isset($_COOKIE['like_'.$id])){
			setcookie('like_'.$id,"yes",1);
			$sql="update blog set like_count=like_count-1 where id='$id'";
			$opertion="unlike";
		}else{
			
			if(isset($_COOKIE['dislike_'.$id])){
				setcookie('dislike_'.$id,"yes",1);
				mysqli_query($db,"update blog set dislike_count=dislike_count-1 where id='$id'");
			}
			
			setcookie('like_'.$id,"yes",time()+60*60*24*365*5);
			$sql="update blog set like_count=like_count+1 where id='$id'";
			$opertion="like";
		}
	}
	
	if($type=='dislike'){
		if(isset($_COOKIE['dislike_'.$id])){
			setcookie('dislike_'.$id,"yes",1);
			$sql="update blog set dislike_count=dislike_count-1 where id='$id'";
			$opertion="undislike";
		}else{
			
			if(isset($_COOKIE['like_'.$id])){
				setcookie('like_'.$id,"yes",1);
				mysqli_query($db,"update blog set like_count=like_count-1 where id='$id'");
			}
			
			setcookie('dislike_'.$id,"yes",time()+60*60*24*365*5);
			$sql="update blog set dislike_count=dislike_count+1 where id='$id'";
			$opertion="dislike";
		}
	}
	mysqli_query($db,$sql);

	$row=mysqli_fetch_assoc(mysqli_query($db,"select * from blog where id='$id'"));
	
	echo json_encode([
		'opertion'=>$opertion,
		'like_count'=>$row['like_count'],
		'dislike_count'=>$row['dislike_count']
	]);
}
?>