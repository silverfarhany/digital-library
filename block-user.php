<?php 
session_start();
if(isset($_SESSION['id'])&& ($_SESSION['klasif']==3 || $_SESSION['klasif']==1)){
    require_once('konekdb.php');
        $id_user = $_GET['id'];
        $result = "DELETE FROM data_user WHERE id_user ='$id_user'";  
            
            $hapus =$conn->query($result);
                if($hapus){
                    echo "<script>
                        alert('User Terhapus')
                        </script>";
                        header('location:data-user.php');
                }else{
                    echo "<script>
                            alert('User Belum Terhapus')
                            </script>";
                            header('location:data-user.php');
    }
}else{
    echo "<script> alert('Silahkan Login sebagai admin') </script>";
}
?>