<!--Purely a PHP File-->	
<?php

	//############################################################################
	//
	// PHP Crude CRUD
	//
	// Name: addemployeejson.php
	//
	// Author: Joe Axberg
	// Created: Sometime in 2021
	// 
	// Note: It has JSON in the title, but has nothing to do with JSON right now
	// 
	//##########################################################################

	//super insecure, but for this app, not worried about that...yet
    //access credentials fils
    include 'credentials.php';

	//this is the php object oriented style of creating a mysql connection
	$conn = new mysqli($servername, $username, $password, $dbname);  
	
	//check for connection success
	if ($conn->connect_error) {
		die("MySQL Connection Failed: " . $conn->connect_error);
	}
		
	//pull the attribute that was passed with the html form GET request and put into a local variable.
	$last_name = $_GET["last_name"];
	$first_name = $_GET["first_name"];
	$emp_no = $_GET["emp_no"];
	$gender = $_GET["gender"];
	$hire_date = $_GET["hire_date"];
	$birth_date = $_GET["birth_date"];

		
	//create the SQL insert statement, notice the funky string concat at the end to variablize the query
	//based on using the GET attribute
	//this statement needs to be variablized to put in the data passed from the form
	//right now it is hardcoded.
	$sql = "INSERT INTO employees (emp_no, birth_date, first_name, last_name, gender, hire_date) VALUES ('".$emp_no."','".$birth_date."' ,'".$first_name."' , '".$last_name."', '".$gender."', '".$hire_date."')";
	
    //run the query and check for errors	
	if ($conn->query($sql) === TRUE){		
			
			//nothing right now

		} else {
		
			echo "Error: " . $sql . "<br>" . $conn->error;
			
		}
		
	//always close the DB connections, don't leave 'em hanging
	$conn->close();
		
?>
