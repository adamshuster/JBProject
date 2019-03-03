<?php
	// Create connection and Run Queries
    $conn = db_connect();
  // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


    //SQL Queries for Jobs
    $sql_jobs = "SELECT Jobs
            FROM jobs
            ORDER BY Jobs" ;

    $jobtypes = $conn->query($sql_jobs) ;

    //SQL Queries for Locations

    $sql_location= " SELECT cities
                      FROM  locations
                      ORDER BY cities " ;

    $joblocation= $conn->query($sql_location);


?>
