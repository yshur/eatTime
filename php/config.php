<?php
/**
 * Created by PhpStorm.
 * User: yairs
 * Date: 16/02/2017
 * Time: 21:06
 */

//create a mySQL DB connection:
$servername = "182.50.133.146";
$username = "auxstudDB6c";
$password = "auxstud6cDB1!";
$dbname = "auxstudDB6c";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>