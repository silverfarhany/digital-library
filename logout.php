<?php
session_start();
require_once('konekdb.php');
session_destroy();
header('Location:login.php');
?>