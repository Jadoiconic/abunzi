<?php
require_once "conn.php";
$id = $_GET['id'];
$msql = "UPDATE `ibirego` SET `access_level`='3' WHERE `id`='$id'";
$qry = mysqli_query($conn,$msql);
if ($qry) {
    header("Location:../data.php");
    exit();
} else {
    print("Something went Wrong");
}
?>