<?php 
    $servername = "localhost"; //plh nama server
    $username = "root"; //username login database sesuaikan
    $password = ""; //password diisi jika ada
    $dbname = "digital_library"; //nama database tujuan

    $conn = new mysqli ($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
    }

?>