<?php
session_start();
$title = "Home";
require_once('konekdb.php');
if(isset($_SESSION['id'])&& $_SESSION['klasif']==3){
    require_once('view/index-admin.php');
}elseif(isset($_SESSION['id'])&& $_SESSION['klasif']==1){
    require_once('view/index-admin.php');
}else{
    echo "<script> alert('Silahkan Login sebagai Admin')</script>";
}
?>