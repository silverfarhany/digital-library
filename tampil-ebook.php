<?php
session_start();
require_once('konekdb.php');
if(!isset($_GET['id'])){
    die('404 not found');
}else{
    $id=$_GET['id'];
    $query="SELECT * from data_pinjaman where id_pinjam='$id'";
    $result=$conn->query($query)->fetch_assoc();
        if($result['id_user']==$_SESSION['id'] && $result['end_pinjam'] > date('Y-m-d')){
            $ebook  ="SELECT * FROM data_pinjaman,data_ebook WHERE data_pinjaman.id_ebook=data_ebook.id_ebook and data_pinjaman.id_pinjam='$id'";
            $file=$conn->query($ebook)->fetch_assoc();
            require_once('view/tampil-ebook.php');
        }else{
            echo "<script>alert('Anda belum Login')</script>";;
        }
}


?>