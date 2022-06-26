<?php

$servername = "localhost";
$username = "root";
$password = "root";

$koneksi = mysqli_connect($servername, $username, $password);

if (mysqli_connect_errno()) {
    # code...
    echo "Koneksi Gagal";

}else {
    echo "Sukses";
}

?>