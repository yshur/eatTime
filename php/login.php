<?php
/**
 * Created by PhpStorm.
 * User: yairs
 * Date: 16/02/2017
 * Time: 20:36
 */
include('config.php');
session_start();

// username and password sent from form

$email = (isset($_GET['email']) ? $_GET['email'] : null);
$password = (isset($_GET['password']) ? $_GET['password'] : null);

$sql = "SELECT fname FROM tbl_231_users WHERE email='$email' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0)  {
    $row = $result->fetch_assoc();
    if($email == 'einav_r5@hotmail.com')    {
        header('location: ../management.html');
        echo json_encode($row["fname"]);
    } else {
        header('location: ../first.html');
    }
} else {
    echo json_encode('שם משתמש או סיסמא שגויים');
    header('location: ../index.html');
}


?>

