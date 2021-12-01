<?php 
session_start();
require_once('konekdb.php');
    if(!isset($_SESSION["username"])){        
        if (isset($_POST["daftar"])){
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
                }elseif (strlen($pass)<8){                            
                            echo "<script>                                                                        
                                    alert('Password tidak boleh kurang 8 karakter !') </script>";                                   

                }elseif ($pass != $konfirm){
                    echo "<script>
                        alert('password tidak sama!')
                        </script>";
                        return FALSE;
                }else{
            $pass = password_hash($pass, PASSWORD_DEFAULT);
                $quer = "INSERT INTO data_user VALUES (null,'$name','$user','$pass','$email','$ni',2)";                
                mysqli_query($conn, $quer);
                if (mysqli_affected_rows($conn)){
                    header("location: login.php");
                }
            }
        }  
        
    } else {
        echo "<script>
        alert('Logout dulu yaaa')
        </script>";
    }
    require_once('view/register.php');
?>