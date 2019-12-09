<?php
	$servername = "localhost";
	$username = 'root'; 
	$password = 'root';
	$dbname = 'books'; 

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO Customers (Address, Customer_id, email, FirstName, LastName, phone)
	VALUES ('Address1', '123', 'email1', 'FirstName1', 'LastName1', 'phone1')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>