<?php
session_start();
require_once "conn.php";
$cpass = $_POST['cpass'];
$npass = $_POST['npass'];
$repass = $_POST['repass'];
$vfpass = $_SESSION['userInfo']['password'];
$userId = $_SESSION['userInfo']['id'];
print($vfpass);
if(password_verify($cpass,$vfpass)){
    if($npass == $repass){
        $pass = password_hash($npass, PASSWORD_DEFAULT);
        $sql = "UPDATE `users` SET `password`='$pass' WHERE `id`='$userId'";
        $_SESSION['successUpdatePassword'] = "Password Updated Successfuly!";
        header("Location:../profileSetting.php");
        exit();
    }else{
        $_SESSION['errorUpdatePassword'] = "Password does not match!";
        header("Location:../profileSetting.php");
        exit();
    }
    
}else {
    $_SESSION['errorUpdatePassword'] = "Incorrect old Password!";
    header("Location:../profileSetting.php");
    exit();
    }
?>