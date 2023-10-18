<?php
session_start();
if(!isset($_SESSION['userInfo'])){
    header("location:login.php");
}
?>