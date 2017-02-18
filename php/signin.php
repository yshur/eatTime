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

$id = "";
$fname = (isset($_GET['fname']) ? $_GET['fname'] : null);
$lname = (isset($_GET['lname']) ? $_GET['lname'] : null);
$email = (isset($_GET['email']) ? $_GET['email'] : null);
$phone = (isset($_GET['phone']) ? $_GET['phone'] : null);
$password = (isset($_GET['password']) ? $_GET['password'] : null);

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "This ($email) email address is considered valid.\n";
} else {
    echo "This ($email) email address is considered invalid.\n";
}

$sql = "INSERT INTO tbl_231_users VALUES 
('$id', '$fname', '$lname', '$email', '$phone', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Insert successfully";

    $sql = "SELECT fname FROM tbl_231_users WHERE email='$email' and password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)  {
       $row = $result->fetch_assoc();
        echo json_encode($row["fname"]);
        header("location: ../first.html");
    } else {
        echo json_encode("Error");
        header("location: ../signin.html");
    }
} else {
    echo json_encode("Error inserting user: " . $conn->error);
    header("location: ../signin.html");
}

?>
</body>
</html>
