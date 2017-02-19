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

$orderid = (isset($_GET['numorder']) ? $_GET['numorder'] : null);

$sql = "SELECT orderid FROM tbl_231_orders WHERE orderid='$orderid'";
$result = $conn->query($sql);

    if ($result->num_rows > 0)  {
       $row = $result->fetch_assoc();
        echo json_encode($row["orderid"]);
        header("location: ../manu2.html?itemsId=34");
    } else {
        echo json_encode("Error");
        header("location: ../numorder.html");
    }

?>
</body>
</html>
