<?php
	// Create connection and Run Queries
    $conn = db_connect();
  // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>

<?php
	  // Set all values to an empty string
    $Id = '';
    $Job = '';
    $Location = '';
    $Company = '';
    $Experience= '';
    // Get the Values from Original Search on Index Page.
    $Job= $_GET['job'];
    $Location= $_GET['location'];


	  if(isset($_POST['company'])){
      $Company = $_POST['company'];
      $Experience= $_POST['experience'];
    }

      $sql_results = "SELECT id, date, job, location, company, experience
              FROM posting
              WHERE job LIKE '%$Job%'
              AND location LIKE '%$Location%'
              AND company LIKE '%$Company%'
              AND experience LIKE '%$Experience'";

      $result = $conn->query($sql_results);

?>
