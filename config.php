<?php 
	ob_start();
	session_start();
	// connect to database
	$conn = new mysqli("localhost", "samson", "password", "complete-blog-php");

	if ($conn->connect_error) {
		die("Error connecting to database: " . $conn->connect_error);
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost:8080/newweb/');
?>