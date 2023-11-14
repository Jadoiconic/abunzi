<?php
session_start();
require_once "conn.php";
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM `users` where email = '$email' AND `status`='1'";
$qry = mysqli_query($conn, $sql);

if (mysqli_num_rows($qry) > 0) {
    while ($data = mysqli_fetch_array($qry)) {
        if (password_verify($pass, $data['password']) && $data['isAdmin'] == 0) {
            $_SESSION["userInfo"] = $data;
            header("Location:../");
            print("Login Successfuly");
        } else if (password_verify($pass, $data['password']) && $data['isAdmin'] > 0) {
            $_SESSION["userInfo"] = $data;
            header("Location:../");
            print("Login Successfuly");
        } else {
            $_SESSION["loginError"] = "Invalid Passord!";
            header("Location:../login.php");
            exit();
        }
    }
} else {
    $_SESSION["loginError"] = "Invalid Email!";
    header("Location:../login.php");
    exit();

}


?>