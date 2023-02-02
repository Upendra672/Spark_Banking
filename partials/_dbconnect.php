<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_bank";

//create a connection 
	$conn = mysqli_connect($servername, $username, $password, $database);
	// $conn = mysqli_connect('shareddb-x.hosting.stackcp.net','shivangi','12345678@','malyaraaj-313537e38d');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>