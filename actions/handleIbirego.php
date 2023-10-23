<?php
require_once "conn.php";
$intara = $_POST['intara'];
$akarere = $_POST['akarere'];
$umurenge = $_POST['umurenge'];
$akagari = $_POST['akagari'];
$pfname = $_POST['pfname'];
$dfname = $_POST['dfname'];
$problem = $_POST['problem'];
$description = $_POST['description'];
$userId = intval($_POST['userId']);
$msql = "INSERT INTO `ibirego` (`ownder`, `defender`, `title`, `uid`, `description`,`intara`,`akarere`,`umurenge`,`akagari`) VALUES ('$pfname', '$dfname', '$problem', '$userId', '$description','$intara','$akarere','$umurenge','$akagari');";
$qry = mysqli_query($conn,$msql);
if ($qry) {
    header("Location:../data.php");
    exit();
} else {
    print("Something went Wrong");
}
?>