<?php
session_start();
$title = "Sedang Dipinjam";
if(isset($_SESSION['id'])&& $_SESSION['klasif']==2){
    require_once('konekdb.php');
    $user=$_SESSION['id'];
    $ebook  ="SELECT * FROM data_pinjaman,data_user,data_ebook WHERE data_pinjaman.id_user=data_user.id_user 
    and data_pinjaman.id_ebook=data_ebook.id_ebook and data_pinjaman.id_user='$user' and data_pinjaman.end_pinjam>NOW()";
    $result =$conn->query($ebook);
    require_once('view/sedang-pinjam.php');
}else{
    echo "<script>alert('Silahkan Login sebagai User')</script>";
}
?>