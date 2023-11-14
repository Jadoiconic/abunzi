<?php
require_once "conn.php";
$intara = $_POST['intara'];
$akarere = $_POST['akarere'];
$umurenge = $_POST['umurenge'];
$akagari = $_POST['akagari'];
$umudugudu = $_POST['umudugudu'];
$ubwoko = $_POST['ubwoko'];
$phonega = $_POST['phonega'];
$phonegwa = $_POST['phonegwa'];
$pfname = $_POST['pfname'];
$dfname = $_POST['dfname'];
$problem = $_POST['problem'];
$inshamake = $_POST['inshamake'];
$description = "";
$userId = intval($_POST['userId']);
$msql = "INSERT INTO `ibirego` (`ownder`, `defender`, `title`, `uid`, `description`,`intara`,`akarere`,`umurenge`,`akagari`,`umudugudu`,`phone_ga`,`phone_gwa`,`ubwoko`,`ishamake`) VALUES ('$pfname', '$dfname', '$problem', '$userId', '$description','$intara','$akarere','$umurenge','$akagari','$umudugudu','$phonega','$phonegwa','$ubwoko','$inshamake');";
$qry = mysqli_query($conn,$msql);
if ($qry) {
    header("Location:../data.php");
    exit();
} else {
    print("Something went Wrong");
}
?>