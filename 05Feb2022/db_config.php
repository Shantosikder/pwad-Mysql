<?php 


	define('Host', 'localhost');
	define('USR', 'root');
	define('PASS', '');
	define('DB', 'pwad50');

	$db = @new mysqli(Host, USR, PASS, DB);

	if($db->connect_errno>0){
		echo $db->connect_errno;
		echo "<br>"; 



	}


    // $host = 'localhost';
	// $user = 'rootfhfhgfh';
	// $pass = '';
	// $db = 'pwad50';


	// $db = @new mysqli(Host, USR, PASS, DB);

		// if($db->connect_errno>0){
	// 	echo $db->connect_errno;
	// 	echo "<br>"; 


	// }


	
	// echo $db->connect_errno;

	// echo $db->connect_error;

	// echo "Hello World";




?>