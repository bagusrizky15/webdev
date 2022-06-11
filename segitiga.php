<?php
error_reporting(0);
extract($_POST);

if ($sisi1 == $sisi2 && $sisi2 == $sisi3) {

    $hasil = "Segitiga sama sisi";
    # code...
} elseif($sisi1 == $sisi2 || $sisi1 == $sisi3){

    $hasil = "Segitiga sama kaki";

} else {
    $hasil = "Segitiga sembarang";
}

?>

<!doctype html>
<html lang="en">

<head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container my-4">
        <h1>Segitiga Sederhana</h1>

        <form action="segitiga.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="input">Masukan Sisi Pertama</label>
                <input type="number" class="form-control" id="input" name="sisi1">
            </div>
            <div class="form-group">
                <label for="input">Masukan Sisi Kedua</label>
                <input type="number" class="form-control" id="input" name="sisi2">
            </div>
            <div class="form-group">
                <label for="input">Masukan Sisi Ketiga</label>
                <input type="number" class="form-control" id="input" name="sisi3">
            </div>
          

            <button type="submit" class="btn btn-info">Hitung</button>
        </form>

        <br>
        <br>
        <br>
        <div class="form-group">
            <label for="input">Hasil Segitiga</label>
            <input type="text" class="form-control" id="input" value="<?php echo $hasil; ?>" readonly>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>