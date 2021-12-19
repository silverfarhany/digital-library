<?php
session_start();
$title = "Riwayat Pinjaman";
if(isset($_SESSION['id'])&& $_SESSION['klasif']==2){
    require_once('konekdb.php');
    $user=$_SESSION['id'];
    $ebook  ="SELECT * FROM data_pinjaman,data_user,data_ebook,kategori_ebook WHERE data_pinjaman.id_user=data_user.id_user 
    and data_pinjaman.id_ebook=data_ebook.id_ebook and kategori_ebook.id_kategori = data_ebook.id_kategori and data_pinjaman.id_user='$user'and data_pinjaman.end_pinjam<NOW()";
    $result =$conn->query($ebook);
        if(isset($_POST['pinjamlagi'])){
            $user=$_SESSION['id'];
            $ebook=$_POST['id_ebook'];
            $start=date("Y-m-d");
            $end=date('Y-m-d', strtotime($start. '+ 3 days'));
        
            $query = "INSERT INTO data_pinjaman values (null,'$user','$ebook','$start','$end')";
            $pinjam = $conn->query($query);
                if($pinjam){
                    header("Location: sedang-pinjam.php");
                }

        }
    require_once('view/riwayat-pinjam.php');
    }else{
        echo "<script> alert('Silahkan Login sebagai User') </script>";
    }
?>