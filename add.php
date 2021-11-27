<?php
    include "database.php";

    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $faskes = $_POST["faskes"];
    $ttl = $_POST["ttl"];
    $alamat = $_POST["alamat"];

    $sql = "insert into datavaksin (nama,nik,ttl,alamat,faskes) values('$nama','$nik','$ttl','$alamat','$faskes')";

    $hasil = mysqli_query($kon,$sql);
?>