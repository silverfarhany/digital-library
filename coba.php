<?=
require_once('konekdb.php');
$ebook = "SELECT COUNT(id_ebook) FROM data_Pinjaman
";
$result =$conn->query($ebook);
while ($dump = $result->fetch_assoc()){
    echo $dump;
};
?>