<?php
$hn = "localhost";
// this will be changed to  your username
$un = "admin";
// this will be your user password
$pw = "UjOBsWayf2wihpu-";
$db = "theatre";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>