<html>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: yairs
 * Date: 16/02/2017
 * Time: 20:36
 */
include('config.php');

$email = (isset($_GET['email']) ? $_GET['email'] : null);
$password = (isset($_GET['password']) ? $_GET['password'] : null);

$sql = "SELECT * FROM tbl_231_users WHERE email='$email' and password='$password'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($conn->query($sql) === TRUE) {
    echo "שלום" . $row["fname"];
} else {
    echo "Error inserting course: " . $conn->error;
}
?>
</body>
</html>
