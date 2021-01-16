<?php

require_once "db.php";
$id_barang = $_POST['id_barang'];
$namabarang = $_POST['namabarang'];
$jenisbarang = $_POST['jenisbarang'];
$jumlahbarang = $_POST['jumlahbarang'];
echo '<pre>';
print_r($_POST);
echo '</pre>';

$sql = "UPDATE databarang SET namabarang = '".$namabarang."', jenisbarang= '".$jenisbarang."', jumlahbarang= '".$jumlahbarang."'
 WHERE id_barang = '".$id_barang."'";

header("location:tables.php?pesan=berhasil");

if ($conn->query($sql)){
    echo "Data sudah di update";
    header: ('Location : tables.php');
}else{
    die("Error : " . $conn->connect_error);
}
die;
?>