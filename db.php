<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	mysqli_select_db($conn, 'base1');
	if (mysqli_connect_errno()) {
		echo "erreur de connexion à mysql:".mysqli_connect_error();
	}
  ?>
