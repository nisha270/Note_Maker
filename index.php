<?php 
include "nav.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<style>
		* {
			font-family: 'Zen Antique Soft', serif;
			font-weight: 500;
		}
	</style>
	<link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
</head>

<body>
	<div class="container my-5">
		<div class="offset-md-3 col-md-6">

			<form method="POST" action="add.php" class="text-justify">
				<label>Title:&nbsp;</label><input type="text" class="form-control" name="title" required><br>
				<div>Description:</div>&nbsp;<span><textarea class="form-control " name="description" cols="40"
						rows="4" required></textarea><br></span>

				<input type="submit" name="add" class="btn btn-success btn-lg btn-block">
			</form>
		</div>
	</div>
	<br>
	<div class="container">
		<table class="table table-bordered" id="myTable">
			<thead>

				<th>Title</th>
				<th>Description</th>
				<th>Action</th>
			</thead>
			<tbody>


				<?php
				include('conn.php');
					$query=mysqli_query($conn,"select * from `note`");
					while($row=mysqli_fetch_array($query)){
						?>
				<tr>
					<td>
						<?php echo $row['title']; ?>
					</td>
					<td>
						<?php echo $row['description']; ?>
					</td>
					<td>
						<div class="row">

							<div class="col-md-6">

								<button class="btn btn-success"><a style="text-decoration: none; color: aliceblue;"
										href="edit.php?id=<?php echo $row['sr_no']; ?>">Edit</a></button>
							</div>
							<div class="col-md-6">

								<button class="btn btn-danger"><a style="text-decoration: none; color: aliceblue;"
										href="delete.php?id=<?php echo $row['sr_no']; ?>">Delete</a></button>
							</div>
						</div>
					</td>
				</tr>
				<?php
						}
						?>

			</tbody>
		</table>
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