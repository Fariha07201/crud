<?php

require_once "db.php";

    $id_barang = $_GET['id_barang'];

    $conn->query("DELETE FROM databarang WHERE id_barang = $id_barang");

    header("Location:tables.php");
    

?>