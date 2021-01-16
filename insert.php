<?php

require_once "db.php";
$id_barang = $_POST['id_barang'];
$namabarang = $_POST['namabarang'];
$jenisbarang = $_POST['jenisbarang'];
$jumlahbarang = $_POST['jumlahbarang'];

$sql = "INSERT INTO databarang (id_barang, namabarang, jenisbarang, jumlahbarang) VALUES ('".$id_barang."','".$namabarang."','".$jenisbarang."','".$jumlahbarang."')";


if ($conn->query($sql)){
   header('Location: tables.php?status=success');
   echo "data berhasil disimpan";
}else{
    die("Error : " . $conn->connect_error);
    header('Location: tables.php?status=failed');
}
exit;
?>