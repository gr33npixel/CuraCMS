<?php
include "config.php";
	$con=mysqli_connect($db_host,$db_user,$db_pass);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create database
if (mysqli_query($con,("CREATE DATABASE " . $db_name))){
  //echo "Database created successfully<br>"; 
	$tbl="CREATE TABLE cms(id int(11) AUTO_INCREMENT,title text,content longtext,PRIMARY KEY (id))";
	// Execute query
	$con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if (mysqli_query($con,$tbl))
	  {
	  //echo "Table created successfully";
	  echo "<br><body style='background:#000;color:#fff;font-size:3em;text-align:center;font-family:Helvetica;'><p>Installation Complete!</p></body>";
	  }
	else
	  {
	  echo "Error creating table: " . mysqli_error($con);
	  }
}else{
  echo "Error creating database: " . mysqli_error($con);
  }
?>