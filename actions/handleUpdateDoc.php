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
$id = $_POST['id'];
// $msql = "UPDATE `ibirego` SET `ownder`='$pfname',`defender`='$dfname',`title`='$problem',`description`='$description',`updatedAt`='current_timestamp()' WHERE `id`='$id';";
$msql = "UPDATE `ibirego` SET `ownder`='$pfname', `defender`='$dfname', `title`='$problem', `description`='$description',`intara`='$intara',`akarere`='$akarere',`umurenge`='$umurenge',`akagari`='$akagari', `updatedAt`=current_timestamp() WHERE `id`='$id'";
$qry = mysqli_query($conn,$msql);
if ($qry) {
    header("Location:../data.php");
    exit();
} else {
    print("Something went Wrong");
}
?>