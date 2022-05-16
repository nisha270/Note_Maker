<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `note` where sr_no='$id'");
	header('location:index.php');
?>