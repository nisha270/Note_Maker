<?php
	include('conn.php');
 
	$title=$_POST['title'];
	$description=$_POST['description'];
 
	mysqli_query($conn,"insert into `note` (title,description) values ('$title','$description')");
	header('location:index.php');
 
?>