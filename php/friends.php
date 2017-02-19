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
$email = (isset($_POST['email']) ? $_POST['email'] : null);
$phone = (isset($_POST['phone']) ? $_POST['phone'] : null);

$sql = "INSERT INTO tbl_231_newperson VALUES 
('$id', '$email', '$phone')";
if ($conn->query($sql) === TRUE) {
    echo "Insert successfully";

    $sql = "SELECT * FROM tbl_231_newperson WHERE email='$email' and phone='$phone'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)  {
       $row = $result->fetch_assoc();
        echo json_encode($row["email"]);
        header("location: ../end.html");
    } else {
        echo json_encode("Error");
        header("location: ../friend.html");
    }
} else {
    echo json_encode("Error inserting user: " . $conn->error);
    header("location: ../friend.html");
}

?>
</body>
</html>
