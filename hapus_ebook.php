<?php 
session_start();
if(isset($_SESSION['id'])&& $_SESSION['klasif']==3){
    require_once('konekdb.php');
        $id_ebook = $_GET['id'];
        $result = "DELETE FROM data_ebook WHERE id_ebook ='$id_ebook'";  
            
            $hapus =$conn->query($result);
                if($hapus){
                    echo "<script>
                        alert('E-book Terhapus')
                        </script>";
                        header('location:data-ebook.php');
                }else{
                    echo "<script>
                            alert('E-book Belum Terhapus')
                            </script>";
                            header('location:data-ebook.php');
    }
}else{
    echo "<script> alert('Silahkan Login sebagai admin') </script>";
}
?>