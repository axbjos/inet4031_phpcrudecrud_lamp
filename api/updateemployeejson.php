<!--Purely a PHP File-->
<?php

	//############################################################################
	//
	// PHP Crude CRUD
	//
	// Name: updateemployeejson.php
	//
	// Author: Joe Axberg
	// Created: Sometime in 2021
	// 
	// Note: It has JSON in the title, but has nothing to do with JSON right now
	// 
	//##########################################################################

    //access credentials fils
	//super insecure, but for this app, not worried about that...yet
    include 'credentials.php';
		
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
