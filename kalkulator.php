<?php
error_reporting(0);
extract($_POST);
switch ($operator) {
    case "+":
        $hasil = $angka1 + $angka2;
        break;
    case "-":
        $hasil = $angka1 - $angka2;
        break;
    case "*":
        $hasil = $angka1 * $angka2;
        break;
    case "/":
        $hasil = $angka1 / $angka2;
        break;
    case "%":
        $hasil = $angka1 % $angka2;
        break;
    default:
        $hasil = "pilih operator";
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Gaji Karyawan</title>
</head>

<body>
    <div class="container my-4">
        <h1>Kalkulator Sederhana</h1>

        <form action="kalkulator.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="input">Masukan Bilangan Pertama</label>
                <input type="number" class="form-control" id="input" name="angka1">
            </div>
            <div class="form-group">
                <label for="input">Masukan Bilangan Kedua</label>
                <input type="number" class="form-control" id="input" name="angka2">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Operator</label>
                <select class="form-control" id="exampleFormControlSelect1" name="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                </select>
            </div>

            <button type="submit" class="btn btn-info">Hitung</button>
        </form>

        <br>
        <br>
        <br>
        <div class="form-group">
            <label for="input">Hasil Kalkulator</label>
            <input type="number" class="form-control" id="input" value="<?php echo $hasil; ?>" readonly>
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