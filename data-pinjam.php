<?php
session_start();
$title = "Data Pinjaman";
if(isset($_SESSION['id'])&& ($_SESSION['klasif']==3 || $_SESSION['klasif']==1)){
    require_once('konekdb.php');
    $ebook  ="SELECT * FROM data_pinjaman,data_user,data_ebook WHERE data_pinjaman.id_user=data_user.id_user 
    and data_pinjaman.id_ebook=data_ebook.id_ebook";
    $result =$conn->query($ebook);
    require_once('view/data-pinjam.php');
}else{
    echo "<script>
        alert('Silahkan Login sebagai Admin')
        </script>";
}
?>