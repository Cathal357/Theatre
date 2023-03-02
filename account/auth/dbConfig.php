<?php
$hn = "localhost";
// this will be changed to  your username
$un = "theatre_admin";
// this will be your user password
$pw = "*Zl5rx]DEk1kbhm0";
$db = "theatre";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>