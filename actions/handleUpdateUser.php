<?php
require_once "conn.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$admin = $_POST['isAdmin'];
$id = $_POST['id'];
$sql ="UPDATE `users` SET `fname`='$fname',`lname`='$lname',`email`='$email',`isAdmin`='$admin' WHERE `id` = '$id'";
$qry = mysqli_query($conn,$sql);
if($qry){
    header("Location:../users.php");
            exit();
}else{
    print("Something went Wrong");
}
?>