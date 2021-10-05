<?php
session_start();
$title = "Edit E-book";
if(isset($_SESSION['id'])&& $_SESSION['klasif']==3){
    require_once('konekdb.php');
        $id_ebook = $_GET['id'];
        $detailebook = "SELECT * FROM data_ebook WHERE id_ebook ='$id_ebook'";
            $ubah =$conn->query($detailebook)->fetch_assoc();
        
            if (isset($_POST["edit"])){
                $lisensi = $_POST["lisensi"];
                $penerbit =$_POST["penerbit"];
                $judul = $_POST["judul"];
                $tags = $_POST ["tags"];        
                $kategori = $_POST["tipebuku"];
                if ($_FILES["uploadedfile"]["name"]!=""){              
                    $file = $_FILES["uploadedfile"]["name"];
                    $directory = "ebook";
                    $tmp = $_FILES["uploadedfile"]["tmp_name"];    
                    if(move_uploaded_file($tmp, "$directory/$file")){ 
                    } else{
                        echo "<script>alert(There was an error Editing the file, please try again!)</script>";
                    }
                } else {
                    $select = "SELECT file FROM data_ebook WHERE id_ebook='$id_ebook'";
                    $result = $conn->query($select)->fetch_assoc();
                    $file = $result['file'];               
                }
                
                        $query = "UPDATE data_ebook SET judul='$judul', penerbit='$penerbit', lisensi='$lisensi',tags='$tags', file='$file', kategori_buku='$kategori'
                        WHERE id_ebook='$id_ebook'";
                        $result = $conn->query($query);
                            if($result){
                                header("Location: data-ebook.php");
                            }                
            }

            
    require_once('view/ubah-ebook.php');
}else{
    echo "<script> alert ('Silahkan Login sebagai Admin') </script>";
    }
?>