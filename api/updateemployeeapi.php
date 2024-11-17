<!--Purely a PHP File used to implement an Application Programming Interface (API)-->	
<?php

	//############################################################################
	//
	// PHP Crude CRUD
	//
	// Name: updateemployeejson.php
	//
	// Author: Joe Axberg
	// Created: 2021
	// Updated: 2024
	// 
	// Updates a new record in the database
	// Data passed as parameters in the URL
	// You will need to know what the parameter (column) names in the database
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
	$emp_attr = $_GET["emp_attr"]; // "birth_date"
	$new_val = $_GET["new_val"];   // "1979-05-12"
    $emp_no = $_GET["emp_no"];     // 500000

		
	//create the SQL select statement, notice the funky string concat at the end to variablize the query
	//based on using the GET attribute
	$sql = "UPDATE employees SET ".$emp_attr." = '".$new_val."' where " .$emp_no. " = '".$emp_no."'";

	//run the update
    if ($conn->query($sql) === TRUE){

        } else {

            //nothing
    	}	
		
	//always close the DB connections, don't leave open 
	$conn->close();
		
?>
