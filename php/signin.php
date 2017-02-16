<html>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: yairs
 * Date: 16/02/2017
 * Time: 20:37
 */
include('config.php');

$fname = (isset($_GET['fname']) ? $_GET['fname'] : null);
$lname = (isset($_GET['lname']) ? $_GET['lname'] : null);
$email = (isset($_GET['email']) ? $_GET['email'] : null);
$phone = (isset($_GET['phone']) ? $_GET['phone'] : null);
$password = (isset($_GET['password']) ? $_GET['password'] : null);

$sql = "INSERT INTO tbl_231_users 
VALUES ('$fname', '$lname', '$email', '$phone', '$password'
)";
if ($conn->query($sql) === TRUE) {
    echo "Insert successfully";
} else {
    echo "Error inserting course: " . $conn->error;
}
?>
</body>
</html>
