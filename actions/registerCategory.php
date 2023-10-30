<?php
require_once "conn.php";
$name = $_POST['name'];
$sql = "INSERT INTO `ubwoko`(`name`) VALUES ('$name')";
$qry = mysqli_query($conn,$sql);
if($qry){
    header("Location:../ubwoko.php");
            exit();
}else{
    print("Something went Wrong");
}
?>