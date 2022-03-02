<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD Evidance</title>
</head>
<body>

	<?php 

	//print_r($_POST);

	if($_SERVER['REQUEST_METHOD']=='POST'){

		include('db_config.php');
		extract($_POST);

		$sql = "INSERT INTO students VALUES(NULL,'$name','$email','$phone','$gender')";

		$db->query($sql);

		echo $db->affected_rows;
	}

	 ?>

	<h1>Student Entry Form:</h1>
	<form method="post">
		Name:<br>
		<input type="text" name="name"><br>
		Email:<br>
		<input type="text" name="email"><br>
		phone:<br>
		<input type="text" name="phone"><br>
		Gender:<br>
		Male:<input type="radio" name="gender" value="Male">
		Female:<input type="radio" name="gender" value="Female">
		<br>
		<br>
		<input type="submit" name="submit" value="SAVE">
	</form>
	<br><br>
	<a href="Students_dataShow.php">Show all Students </a>

</body>
</html>