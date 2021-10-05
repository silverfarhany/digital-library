<?php
session_start();
$title = "Edit Profil";
if(isset($_SESSION['id'])){    
    require_once('konekdb.php');
        $id = $_SESSION['id'];
        $query= "SELECT * from data_user where id_user='$id'";
        $edit = $conn->query($query)->fetch_assoc();        
        
            if (isset($_POST["edit"])){
                $nama = $_POST["namabaru"];
                $username =$_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $confirm = $_POST ["confirm"];                
                $nis_nip = $_POST["Nis_Nip"];                
            
                $queryedit="UPDATE data_user set nama='$nama', username='$username', email='$email' where id_user='$id'";
                
                $result= $conn->query($queryedit);
                if($password !="" ||$confirm !=""){
                    if($password == $confirm){
                            $password = password_hash($password, PASSWORD_DEFAULT);
                            $editpassword="UPDATE data_user set password='$password'";
                            $conn->query($editpassword);                            
                }
            }
            if($result){                
                header('Location:index-admin.php');
            }
        }
    }

require_once('view/edit-profil.php');
?>