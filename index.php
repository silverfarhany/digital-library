<?php
session_start();
$title = "Home";
if (isset($_SESSION['id']) && $_SESSION['klasif'] == 2) {
    require_once('konekdb.php');
    $ebook  = "SELECT * FROM `data_ebook`";

    $result = $conn->query($ebook);
    if (isset($_POST['pinjam'])) {
        $user = $_SESSION['id'];
        $ebook = $_POST['id_ebook'];
        $start = date("Y-m-d");
        $end = date('Y-m-d', strtotime($start . '+ 3 days'));

        $query = "INSERT INTO data_pinjaman values (null,'$user','$ebook','$start','$end')";
        $pinjam = $conn->query($query);
        if ($pinjam) {
            header("Location: sedang-pinjam.php");
        }
    }
    require_once('view/index.php');
} elseif (isset($_SESSION['id']) && $_SESSION['klasif'] == 3) {
    header("Location: index-admin.php");
} else {
    header("Location: login.php");
}
