<?php
session_start();
$title = "Data E-book";
    if(isset($_SESSION['id'])&& $_SESSION['klasif']==3){
        require_once('konekdb.php');
        $ebook  ="SELECT * FROM data_ebook";
        $result =$conn->query($ebook);
        require_once('view/data-ebook.php');
    }else{    
        echo "<script>
        alert('Silahkan Login sebagai Admin')
        </script>";
    }

?>