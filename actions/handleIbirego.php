<?php
require_once "conn.php";
$pfname = $_POST['pfname'];
$dfname = $_POST['dfname'];
$problem = $_POST['problem'];
$description = $_POST['description'];
$userId = intval($_POST['userId']);
$msql = "INSERT INTO `ibirego` (`ownder`, `defender`, `title`, `uid`, `description`) VALUES ('$pfname', '$dfname', '$problem', '$userId', '$description');";
$qry = mysqli_query($conn,$msql);
if ($qry) {
    header("Location:../data.php");
    exit();
} else {
    print("Something went Wrong");
}
?>