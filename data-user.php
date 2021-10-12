<?php
session_start();
$title = "Data User";
    if(isset($_SESSION['id'])&& ($_SESSION['klasif']==3 || $_SESSION['klasif']==1)){
        require_once('konekdb.php');
        $user  ="SELECT * FROM data_user";
        $result =$conn->query($user);
        require_once('view/data-user.php');
    }else{    
        echo "<script>
        alert('Silahkan Login sebagai Admin')
        </script>";
    }

?>