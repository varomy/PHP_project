<?php
session_start();
include_once("db.php");
if(!isset($_SESSION['id'])){
header("Location:loggin.php");
return;
}
if(!isset($_GET['pid'])){
    header("Location:index.php");
    return;
}else{
$pid=$_GET['pid'];
$sql="DELETE FROM news WHERE id=$pid";
mysqli_query($db,$sql);
    header("Location:index.php");
}
?>