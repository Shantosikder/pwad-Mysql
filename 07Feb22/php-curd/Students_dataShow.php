
<?php include('db_config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h2>Student List:</h2>

	<?php 	

	$sql = "SELECT * FROM Students ";
	$data = $db->query($sql);

	 ?>


	 <table border="1">
	 	<tr>
	 		<th>ID</th>
	 		<th>Name</th>
	 		<th>Email</th>
	 		<th>Phone</th>
	 		<th>Gender</th>
	 	</tr>

	 	<?php 	
	 	while($row = $data->fetch_object()){ ?>

	 		<tr>
	 			<td> <?php 	echo $row->id; ?> </td>
	 			<td> <?php 	echo $row->name; ?> </td>
	 			<td> <?php 	echo $row->email; ?> </td>
	 			<td> <?php 	echo $row->phone; ?> </td>
	 			<td> <?php 	echo $row->gender; ?> </td>

	 			<td>Edit | 
	 				<a href="delete.php?showidnumber=<?php echo $row->id; ?> ">
	 				Delete </a>
	 			</td>
	 		</tr>

	 	<?php } ?>

	 </table>
	 <br>

	 <a href="EntryData.php">New Entry</a>



</body>
</html>