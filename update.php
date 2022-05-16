<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$title=$_POST['title'];
	$description=$_POST['description'];
 
	mysqli_query($conn,"update `note` set title='$title', description='$description' where sr_no='$id'");
	header('location:index.php');
?>