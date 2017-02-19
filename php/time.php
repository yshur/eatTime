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

$time = (isset($_GET['time']) ? $_GET['time'] : null);

$orderid = "";
$userid = 2999;
$cartid = 54;
$tableid = "";

$sql = "INSERT INTO tbl_231_orders VALUES 
('$orderid', '$userid', '$cartid', '$tableid')";
if ($conn->query($sql) === TRUE) {
    echo "Insert successfully";
	$sql = "SELECT * FROM tbl_231_orders WHERE orderid='$orderid'";
	$result = $conn->query($sql);

    if ($result->num_rows > 0)  {
       $row = $result->fetch_assoc();
        echo json_encode($row["orderid"]);
        header("location: ../friends.html");
    } else {
        echo json_encode("Error");
        header("location: ../time.html");
    }
} else {
    echo json_encode("Error inserting user: " . $conn->error);
    header("location: ../time.html");
}

?>
</body>
</html>
