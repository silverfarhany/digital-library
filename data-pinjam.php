<?php
session_start();
$title = "Data Pinjaman";
if(isset($_SESSION['id'])&& ($_SESSION['klasif']==3 || $_SESSION['klasif']==1)){
    require_once('konekdb.php');
    $ebook  ="SELECT data_user.nama, data_user.nis_nip, data_ebook.judul,kategori_ebook.nama_kategori,data_pinjaman.start_pinjam,
    data_pinjaman.end_pinjam FROM data_pinjaman,data_user,data_ebook,kategori_ebook 
    WHERE data_pinjaman.id_user=data_user.id_user and data_pinjaman.id_ebook=data_ebook.id_ebook and data_ebook.id_kategori = kategori_ebook.id_kategori";  
    $result =$conn->query($ebook);    
    require_once('view/data-pinjam.php');
}else{
    echo "<script>
        alert('Silahkan Login sebagai Admin')
        </script>";
}
?>