<?php
require_once("konekdb.php");
session_start();
header('Content-Type: application/json; charset=uf-8');
$kategori = $_GET['kategori'];
$query = "SELECT * From detail_kategori where id_kategori='$kategori'";
$rows = [[]];
$result = $conn->query($query);
$no=0;
while($row = $result->fetch_assoc()){
    $rows['id_detail'][$no] = $row['id_detail'];
    $rows['nama_detail'][$no] = $row['nama_detail'];
    $no++;
}
echo json_encode($rows);
