<?php
require_once "conn.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$admin = $_POST['isAdmin'];
$sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `password`, `isAdmin`) VALUES ('$fname','$lname','$email','$pass','$admin')";
$qry = mysqli_query($conn,$sql);
if($qry){
    header("Location:../users.php");
            exit();
}else{
    print("Something went Wrong");
}
?>