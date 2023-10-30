<?php
require_once "conn.php";
$fname = $_POST['name'];
$id = $_POST['id'];
$sql ="UPDATE `ubwoko` SET `name`='$fname' WHERE `id` = '$id'";
$qry = mysqli_query($conn,$sql);
if($qry){
    header("Location:../ubwoko.php");
            exit();
}else{
    print("Something went Wrong");
}
?>