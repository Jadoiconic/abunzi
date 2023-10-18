<?php 
require_once "./actions/conn.php";
$docId = $_GET['q'];
$sql = "DELETE FROM `ibirego` WHERE `id` ='$docId'";
$qry = mysqli_query($conn,$sql);
if($qry){
    header('Location:data.php');
}
// ?>