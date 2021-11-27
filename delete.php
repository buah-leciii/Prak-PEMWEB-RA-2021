<?php
include "database.php";


$id = $_POST['hapusId'];


$query = mysqli_query($kon,"delete from datavaksin where id='$id'");
?>