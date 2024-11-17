<?php

	// required headers
	// need this so that the data is return as JSON not HTML
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

    // access credentials file to get db credentials
	include 'credentials.php';

	// this is the php object oriented style of creating a mysql connection
	$conn = new mysqli($servername, $username, $password, $dbname);  

	// check for connection success
	if ($conn->connect_error) {
		die("MySQL Connection Failed: " . $conn->connect_error);
	}
		
	// pull the two attributes
	// these represent the range of employee numbers to pull from the database
	$emp_no_low = $_GET["emp_no_low"];
	$emp_no_high = $_GET["emp_no_high"];

	// create the SQL select statement, notice the funky string concat at the end to variablize the query
	// based on using the GET attribute
	$sql = "SELECT * FROM employees where emp_no between '".$emp_no_low."' and '".$emp_no_high."'";

	//echo $sql; //troubleshooting statement if needed

	// put the resultset into a variable
	$result = $conn->query($sql);

	// iterate through the rows
	
	if ($result->num_rows > 0){
		// if there was data process the rows
		echo "[";
			while($row = $result->fetch_assoc()){
	        
				// create an object of name value pairs
				$employee_obj=array(
					"employee_num" => $row["emp_no"],
					"first_name" => $row["first_name"],
					"last_name" => $row["last_name"],
					"birth_date" => $row["birth_date"],
					"hire_date" => $row["hire_date"]
				);

				// encode the object as JSON
				echo json_encode($employee_obj);
                                echo ",";
			}
		echo "]";
	
    // if no records, print "no records found"
	} else {
		http_response_code(404);
		echo "No Records Found";
	}
	//close db connect	
	$conn->close();
	//always close the DB connections, don't leave 'em hanging
		
?>