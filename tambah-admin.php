<?php
session_start();
require_once('konekdb.php');
    if(isset($_SESSION['id'])&& $_SESSION['klasif']==3){        
        if (isset($_POST["tambah"])){
            $name = $_POST["nama"];
            $user = strtolower($_POST["username"]);
            $email = $_POST["email"];
            $pass = $_POST ["password"];
            $konfirm = $_POST["confirm"];
            $ni = $_POST["Nis_Nip"];            

                $cek = mysqli_query($conn, "SELECT username FROM data_user WHERE username ='$user'");
                if(mysqli_fetch_assoc($cek)== TRUE){
                    echo "<script>
                                alert('username sudah terdaftar!')
                                </script>";
                        return FALSE;
                }elseif ($pass != $konfirm){
                    echo "<script>
                        alert('password tidak sama!')
                        </script>";
                        return FALSE;
                }
            $pass = password_hash($pass, PASSWORD_DEFAULT);
                $quer = "INSERT INTO data_user VALUES (null,'$name','$user','$pass','$email','$ni',1)";                
                mysqli_query($conn, $quer);
                if (mysqli_affected_rows($conn)){
                    header("location: index-admin.php");
                }
                else{
                    echo "<script>
                          alert('Gagal menambahkan Admin')
                          </script>";
                }
            }
    } else {
        echo "<script>
        alert('Silahkan Login sebagai Super Admin')
        </script>";
    }
    require_once('view/tambah-admin.php');
?>
?>
