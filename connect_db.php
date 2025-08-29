<?php
$servername = "localhost";
$username = "nontawat";
$password = "Sam_140648";
$db = "nontawat";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>