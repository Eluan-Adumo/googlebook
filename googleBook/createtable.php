<?php
  include "dbconnection.php";

echo "<br/>";

   // sql to create table
$sql = "CREATE TABLE posts (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
post_text VARCHAR(30) NOT NULL,
post_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}



  include "closeconnection.php";
?>
