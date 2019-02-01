<?php
	include 'database.php';
	$query = "SELECT * FROM journalistlist ORDER BY name";
	$journalistlist = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Journalist Database</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/addedstyles.css">
</head>

<body>
<div id="container" class="col-centered">
<div class="row">
<div class="col-lg-8 col-md-5 col-sm-7 col-centered">
<h1 class="display-3">Hire a Journalist</h1>
<p class="lead">This database was created to help journalists who have been laid off connect with possible employers. Click the button below the table to add a journalist to the database.</p>
</div>
</div>

<div class="row">
<div class="col-lg-8 col-md-6 col-sm-8 col-centered col-sm-offset-2">
<table class="table table-striped table-hover table-bordered table-light" id="joutable">
	<!-- table column headings -->
	<thead>
	<tr>
	  <th>Name</th>
	  <th>Twitter</th>
	  <th>Publication</th>
	  <th>Specialties</th>
		<th>Location</th>
	</tr>
</thead>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
	   Each time it loops, it writes ONE ROW -->
<?php while ($row = mysqli_fetch_assoc($journalistlist)) :  ?>

<tr>
  <td><?php echo stripslashes($row['name']); ?></td>
  <td><?php echo $row['twitter']; ?></td>
  <td><?php echo $row['publication']; ?></td>
  <td><?php echo $row['specialties']; ?></td>
	<td><?php echo $row['location']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>
</div>
</div>
<div class="row">
<div class="col text-center">
<a class="btn btn-primary mb-2 mt-2 text-center" href="newrecord.php" role="button">Add a journalist</a>
</div>
</div>

</div> <!-- close container -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>
</html>
