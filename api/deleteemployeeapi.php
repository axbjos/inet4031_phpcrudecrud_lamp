<!--Purely a PHP File used to implement an Application Programming Interface (API)-->	
<?php

	//############################################################################
	//
	// PHP Crude CRUD
	//
	// Name: deleteemployeejson.php
	//
	// Author: Joe Axberg
	// Created: 2021
	// Updated: 2024
	// 
	// Delete a new record in the database.
	// Employee Number passed as parameters in the URL
	// 
	//##########################################################################

	//super insecure, but for this app, not worried about that...yet
    //access credentials file for db credentials
	include '../credentials.php';
	
	//this is the php object oriented style of creating a mysql connection
	$conn = new mysqli($servername, $username, $password, $dbname);  
	
	//check for connection success
	if ($conn->connect_error) {
		die("MySQL Connection Failed: " . $conn->connect_error);
	}
		
	//pull the attribute that was passed with the html form GET request and put into a local variable.
	$emp_no = $_GET["emp_no"];
	
	//create the SQL statement, notice the funky string concat at the end to variablize the query
	//based on using the GET attribute
	//this statement needs to be variablized to put in the data passed from the form
	//right now it is hardcoded.
    $sql = "delete from employees where emp_no = '".$emp_no."'";	
	
	if ($conn->query($sql) === TRUE){		
			
		} else {
		
			echo "Error: " . $sql . "<br>" . $conn->error;
			
		}
		
		//always close the DB connections, don't leave 'em hanging
		$conn->close();
		
?>
