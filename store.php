<?php 
include "database.php";

$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$faskes = $_POST['faskes'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];

$query = mysqli_query($kon,"update datavaksin set nama='$nama', nik='$nik', ttl='$ttl', alamat='$alamat', faskes='$faskes' where id='$id'");


?>
