<?php 
session_start();
require_once("konekdb.php");
if(!isset($_SESSION['username'])){
    if(isset($_POST["login"])){
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $result = mysqli_query($conn,"SELECT * FROM data_user WHERE username = '$user'");
        if(mysqli_num_rows($result) > 0){
            $result = mysqli_fetch_assoc($result);
            if(password_verify($pass, $result["password"])){
                $_SESSION['username'] = $result['username'];
                $_SESSION['klasif'] = $result['who'];
                $_SESSION['id'] = $result['id_user']; 
                $_SESSION['namauser'] = $result['nama'];
                if($result['who'] == 2){
                    header("Location: index.php");
                }
                else{
                    header("Location: index-admin.php");
                }
            }
            else { 
                echo "<script>
                        alert ('Gagal Login, Username atau Password Salah!')
                    </script>";
            }
        }
        else{
            echo "<script>
            alert ('Gagal Login, Username atau Password Salah!')
        </script>";
        }
    }
    require_once("view/login.php");
} 
else {
    echo "<script>
    alert('Logout dulu yaaa')
    </script>";           
}
?>