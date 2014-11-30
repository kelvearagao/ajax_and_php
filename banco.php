<?php
	$name = "localhost";
	$username = "root";
	$password = "12345";
	$dbname = "livraria";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM Editora";
	$result = mysqli_query($conn, $sql);

	$meu_array = array();
	while($row = $result->fetch_assoc()) 
	{
		$meu_array[] = $row;
    }


    $meu_json = json_encode($meu_array);
    echo $meu_json;