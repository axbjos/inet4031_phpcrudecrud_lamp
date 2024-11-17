<?php

	// required headers
	// need this so that the data is return as JSON not HTML
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

    // access credentials file for db credentials
    include 'credentials.php';	

	//this is the php object oriented style of creating a mysql connection
	$conn = new mysqli($servername, $username, $password, $dbname);  

	// check for connection success
	if ($conn->connect_error) {
		die("MySQL Connection Failed: " . $conn->connect_error);
	}
		
	// grab the attribute that was passed with the GET request and put into a local variable.
	$emp_no = $_GET["emp_no"];

	// create the SQL select statement, notice the funky string concat at the end to variablize the query
	// based on using the GET attribute
	$sql = "SELECT * FROM employees where emp_no = '".$emp_no."'";

	//echo $sql; //troubleshooting statement if needed

	// put the resultset into a variable
	$result = $conn->query($sql);

	// iterate through the rows
	
	if ($result->num_rows > 0){
			//if there was data, process the rows of data
			while($row = $result->fetch_assoc()){
	        
				// create an object of name/value pairs
				$employee_obj=array(
					"first_name" => $row["first_name"],
					"last_name" => $row["last_name"]
				);
			    
				// format the object of name/value pairs as JSON
				echo json_encode($employee_obj);

			}
	} else {
		http_response_code(404);
		echo "No Records Found";
	}
	//close db connection	
	$conn->close();
	//always close the DB connections, don't leave 'em hanging
		
?>
