<?php
  include "connection.php";
  echo "<br/>";
  // Create database
   $sql = "CREATE DATABASE googlebook";
   if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
   } else {
      echo "Error creating database: " . $conn->error;
  }


  include "closeconnection.php";
?>
