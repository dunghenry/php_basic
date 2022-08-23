<?php
$servername = "localhost";
$username = "root";
$password = "123456789";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connect DB successfully!";
    echo "<br>";
}

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
  echo "<br>";
} else {
  echo "Error creating database!";
}
mysqli_close($conn);
?>