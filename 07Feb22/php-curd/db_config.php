<?php 

define('HOST','localhost');
define('USER', 'root');
define('PASS', '');
define('DB','pwad50-php-crud');

$db = @new mysqli(HOST, USER, PASS, DB);

if($db->connect_errno>0){
	echo($db->connect_errno);
	echo "<br>";
}

 ?>