<?php
session_start();
$title = "Home";
require_once('konekdb.php');
$ebook = "SELECT data_ebook.judul,data_ebook.penerbit,data_pinjaman.id_ebook, 
sum(data_pinjaman.id_ebook) AS hitung FROM data_pinjaman, data_ebook 
WHERE data_ebook.id_ebook = data_pinjaman.id_ebook GROUP BY data_pinjaman.id_ebook ORDER BY COUNT(data_pinjaman.id_ebook)
desc LIMIT 3";
$result =$conn->query($ebook);
require_once('konekdb.php');
if(isset($_SESSION['id'])&& $_SESSION['klasif']==3){
    require_once('view/index-admin.php');
}elseif(isset($_SESSION['id'])&& $_SESSION['klasif']==1){
    require_once('view/index-admin.php');
}else{
    echo "<script> alert('Silahkan Login sebagai Admin')</script>";
}
