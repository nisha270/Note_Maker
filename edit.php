<?php 
include "nav.php";
?>

<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `note` where sr_no='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>edit</title>
<style>
	*{
		font-family: 'Zen Antique Soft', serif;
			font-weight: 500;
	}
	.btn{

	}
</style>
</head>
<body>
	<div class="container my-5">
		
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Title:</label><br><br><input type="text" class="form-control" value="<?php echo $row['title']; ?>" name="title"><br>
		<label>Description:</label><br><br><input type="text" class="form-control" value="<?php echo $row['description']; ?>" name="description"><br>
		<div class="row col-6">
			<div class=" col">
				<input type="submit" name="add" class="btn btn-success  btn-block">
			</div>
			<div class="col">
				<button class="btn btn-dark" ><a href="index.php" style="text-decoration: none; color:white; " >Back</a></button>
			</div>
		</div>
	</form>
	</div>
</body>
<footer>
	<?php
	include "footer.php";
	?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
	integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
	crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function () {
		$('#myTable').DataTable();
	});
</script>
</html>