<?php
$host="localhost";
$user="root";
$password="";
$database="inventory_managment_system";
 
$conn1 = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn1) {
    die("Connection failed: " . mysqli_connect_error());
}
?>