<?php
/**
 * Created by PhpStorm.
 * User: yairs
 * Date: 16/02/2017
 * Time: 20:36
 */
include('config.php');

// username and password sent from form

$email = (isset($_POST['email']) ? $_POST['email'] : null);
$password = (isset($_POST['password']) ? $_POST['password'] : null);

$sql = "SELECT fname FROM tbl_231_users WHERE email='$email' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0)  {
    $row = $result->fetch_assoc();
    if($email == 'yair.shur@gmail.com')    {
        header('location: ../management.html');
    } else {
        header('location: ../first.html');
    }
} else {
    header('location: ../index.html');
}


?>

