<?php
session_start();
$title = "Data E-book";
    if(isset($_SESSION['id'])&& ($_SESSION['klasif']==3 || $_SESSION['klasif']==1)){
        require_once('konekdb.php');
        $ebook  ="SELECT * FROM data_ebook, kategori_ebook, detail_kategori 
        where kategori_ebook.id_kategori = data_ebook.id_kategori and detail_kategori.id_detail = data_ebook.id_detail";
        $result =$conn->query($ebook);
        require_once('view/data-ebook.php');
    }else{    
        echo "<script>
        alert('Silahkan Login sebagai Admin')
        </script>";
    }

?>