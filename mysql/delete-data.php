<?php

include 'koneksi.php';
extract($_POST);
$id=$_GET['id'];
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id=$id");

header('Location:index.php');

?>
