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
$fname = (isset($_POST['fname']) ? $_POST['fname'] : null);
$lname = (isset($_POST['lname']) ? $_POST['lname'] : null);
$email = (isset($_POST['email']) ? $_POST['email'] : null);
$phone = (isset($_POST['phone']) ? $_POST['phone'] : null);
$password = (isset($_POST['password']) ? $_POST['password'] : null);

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
