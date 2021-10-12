<?php
session_start();
$title = "Upload E-book";
if(isset($_SESSION['id'])&& ($_SESSION['klasif']==3 || $_SESSION['klasif']==1)){    
    require_once('konekdb.php');
        if (isset($_POST["upload"])){
            $lisensi = $_POST["lisensi"];
            $penerbit =$_POST["penerbit"];
            $judul = $_POST["judul"];
            $tags = $_POST ["tags"];
            $kategori = $_POST["tipebuku"];
            $directory = "ebook";
            $file = $_FILES["uploadedfile"]["name"];
            $tmp = $_FILES["uploadedfile"]["tmp_name"];    
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if($ext == 'pdf'){
                if(move_uploaded_file($tmp, "$directory/$file")){
                    $query = "INSERT INTO data_ebook values (null,'$judul','$penerbit','$lisensi','$tags','$file','$kategori')";
                    $result = $conn->query($query);
                        if($result){
                            echo 
                            "<script>
                            alert('Ebook berhasil diupload!')
                            window.location.replace('upload-ebook.php');
                            </script>";
 
                        }
                } else{
                   echo "<script>alert('There was an error uploading the file, please try again!')</script>";
                }
            }else{
                echo "<script>alert('File harus berbentuk PDF!')</script>";
            }
        }
        
        $cek = mysqli_query($conn, "SELECT file FROM data_ebook WHERE file ='$file'");
        if(mysqli_fetch_assoc($cek)== TRUE){
            echo "<script>
                        alert('E-book sudah ada')
                        </script>";
                return FALSE;}

require_once('view/upload-ebook.php');}
else{
    echo "<script> alert ('Silahkan Login sebagai Admin') </script>";
}
?>