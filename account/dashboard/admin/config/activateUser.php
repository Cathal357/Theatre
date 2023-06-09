<?php

//     session_start();: This starts a new or resumes an existing session. It is needed for tracking the user's login status across multiple pages.
session_start(); 

//     include '../../../auth/dbConfig.php';: This includes the database configuration file, which presumably contains the database connection settings.
include '../../../auth/dbConfig.php';

//     if (!isset($_SESSION['loggedin'])) {: This checks if the user is logged in by verifying the existence of a session variable called "loggedin".
//     header('Location: ../../../../login/');: If the user is not logged in, this line redirects them to the login page.
    if (!isset($_SESSION['loggedin'])) {
    header('Location: ../../../../login/');
    exit;
}

//     $uid = $_GET['uid'];: This gets the value of the "uid" parameter from the URL query string. Presumably, this is the user ID of the user that needs to be updated.
$uid = $_GET['uid'];

//     $stmt = $conn->prepare('UPDATE users usr set usr.active = 1 where id = '.$uid.' ');: This prepares an SQL statement to update the "active" status of the user in the "users" table where the ID matches the value of $uid. Note that this code is vulnerable to SQL injection attacks, as it is concatenating the user input directly into the SQL statement. It would be safer to use parameterized queries instead.
$stmt = $conn->prepare('UPDATE users usr
    set
    usr.active = 1
    where id = '.$uid.' ');

//     $stmt->execute();: This executes the prepared SQL statement.
$stmt->execute();

//     header("Location: ../../a/allUsers");: This redirects the user to the "allUsers" page after the update is done.
header("Location: ../../a/allUsers");


    
    
    
    
    
    
    
    
