<?php include 'db_config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php 
	 $sql = "SELECT * FROM employees";

	 $data = $db->query($sql);
	  
	  ?>
	  <table border="1" >
		  	<tr>
			     <th>ID</th>
			     <th>First Name</th>
			     <th>Last Name</th>
			     <th>Phone</th>
			     <th>Email</th>
	       </tr>
	  <?php

	  while($row = $data->fetch_array()){ ?>
		  	<tr>
			     <td><?php echo $row['id']; ?></td>
			     <td><?php echo $row['firstname']; ?></td>
			     <td><?php echo $row['lastname']; ?></td>
			     <td><?php echo $row['email']; ?></td>
			     <td><?php echo $row['phone']; ?></td>
			     	     
			</tr>

	  
	  <?php } ?> 
	  </table>    
	
</body>
</html>