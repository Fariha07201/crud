<?php
$servername = "localhost";
$username = "root";
$password = "";
$namadb = "uts_inventarisbarang";

//create connetion
$conn = new mysqli ($servername,$username,$password,$namadb);

//check connection
if ($conn->connect_error){
   die("Connected failed: " . $conn->connect_error);
}


?>