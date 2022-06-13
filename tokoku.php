<?php

extract($_POST);

$diskon = 0;

switch ($opsi1) {
    case 'a0':
        $harga = 0;
        $diskon = 0;
        break;
    case 'a1':
        $harga = 500000;
        $diskon = 0.07;
        break;
    case 'a2':
        $harga = 500000 * 2;
        $diskon = 0.07;
        break;
    case 'a3':
        $harga = 500000 * 3;
        $diskon = 0.07;
        break;
    case 'a4':
        $harga = 500000 * 4;
        $diskon = 0.07;
        break;
    case 'a5':
        $harga = 500000 * 5;
        $diskon = 0.07;
        break;
}

switch ($opsi2) {
    case 'b0':
        $harga2 = 0;
        $diskon2 = 0;
        break;
    case 'b1':
        $harga2 = 400000;
        $diskon2 = 0.02;
        break;
    case 'b2':
        $harga2 = 400000 * 2;
        $diskon2 = 0.02;
        break;
    case 'b3':
        $harga2 = 400000 * 3;
        $diskon2 = 0.02;
        break;
}

switch ($opsi3) {
    case 'c0':
        $harga3 = 0;
        $diskon3 = 0;
        break;
    case 'c1':
        $harga3 = 300000;
        $diskon3 = 0.1;
        break;
    case 'c2':
        $harga3 = 300000 * 2;
        $diskon3 = 0.1;
        break;
    case 'c3':
        $harga3 = 300000 * 3;
        $diskon3 = 0.1;
        break;
    case 'c4':
        $harga3 = 300000 * 4;
        $diskon3 = 0.1;
        break;
    case 'c5':
        $harga3 = 300000 * 5;
        $diskon3 = 0.1;
        break;
    case 'c6':
        $harga3 = 300000 * 6;
        $diskon3 = 0.1;
        break;
    case 'c7':
        $harga3 = 300000 * 7;
        $diskon3 = 0.1;
        break;
    case 'c8':
        $harga3 = 300000 * 8;
        $diskon3 = 0.1;
        break;
    case 'c9':
        $harga3 = 300000 * 9;
        $diskon3 = 0.1;
        break;
    case 'c10':
        $harga3 = 300000 * 10;
        $diskon3 = 0.1;
        break;
}

switch ($opsi4) {
    case 'd0':
        $harga4 = 0;
        break;
    case 'd1':
        $harga4 = 450000;
        break;
    case 'd2':
        $harga4 = 450000 * 2;
        break;
    case 'd3':
        $harga4 = 450000 * 3;
        break;
    case 'd4':
        $harga4 = 450000 * 4;
        break;
    case 'd5':
        $harga4 = 450000 * 5;
        break;
    case 'd6':
        $harga4 = 450000 * 6;
        break;
}

switch ($opsi5) {
    case 'e0':
        $harga5 = 0;
        $diskon5 = 0;
        break;
    case 'e1':
        $harga5 = 570000;
        $diskon5 = 0.05;
        break;
    case 'e2':
        $harga5 = 570000 * 2;
        $diskon5 = 0.05;
        break;
    case 'e3':
        $harga5 = 570000 * 3;
        $diskon5 = 0.05;
        break;
    case 'e4':
        $harga5 = 570000 * 4;
        $diskon5 = 0.05;
        break;
    case 'e5':
        $harga5 = 570000 * 5;
        $diskon5 = 0.05;
        break;
}


$jmlHarga = $harga * $diskon + ($harga2 * $diskon2) + ($harga3 * $diskon3) + ($harga4) + ($harga5 * $diskon5);


$daftarBarang = array(
    array(
        "Kode" => "1B001",
        "Barang" => "Monitor Samsung 15'",
        "Harga" => "Rp.500.000",
        "Diskon" => "7%",
        $jml => 5,
    ),
    array(
        "Kode" => "2B002",
        "Barang" => "Monitor LG 14'",
        "Harga" => "Rp.400.000",
        "Diskon" => "2%",
        $jml => 3,
    ),
    array(
        "Kode" => "3B003",
        "Barang" => "CD-RW Samsung",
        "Harga" => "Rp.300.000",
        "Diskon" => "10%",
        $jml => 10,
    ),
    array(
        "Kode" => "4B004",
        "Barang" => "Memory Card 256",
        "Harga" => "Rp.450.000",
        "Diskon" => "0%",
        $jml => 6,
    ),
    array(
        "Kode" => "5B005",
        "Barang" => "Hardisk Seagate 512GB",
        "Harga" => "Rp.570.000",
        "Diskon" => "5%",
        $jml => 5,
    ),
);
?>

<!doctype html>
<html lang="en">

<head>
    <style>
        .gambar {
            width: 80px;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Toko Elektronik</title>
</head>

<body>
    <div class="container my-4">
        <img class="gambar" src="img/shop.png" alt="">
        <h1>Toko Elektronik</h1>
        <h3>Daftar harga barang elektronik</h3>
        <br>
        <br>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Diskon</th>
                    <th scope="col">Stok</th>
                </tr>
            </thead>
            <tbody>
                <form action="tokoku.php" method="POST" enctype="multipart/form-data">
                    <?php
                    $nm = 1;
                    foreach ($daftarBarang as $brg) {
                    ?>
                        <tr>
                            <td><?php echo $nm; ?></td>
                            <td><?php echo $brg["Kode"]; ?></td>
                            <td><?php echo $brg["Barang"]; ?></td>
                            <td><?php echo $brg["Harga"]; ?></td>
                            <td><?php echo $brg["Diskon"]; ?></td>
                            <td><?php echo $brg[$jml]; ?></td>
                        <?php
                        $nm = $nm + 1;
                    }
                        ?>
                        </tr>
            </tbody>
        </table>

        <table>
            <tr>
                <th>
                    Masukan Jumlah Barang
                </th>
            </tr>
            <tr>
                <td>
                    Monitor Samsung 15
                </td>
                <td>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="opsi1">
                            <option value="a0">0</option>
                            <option value="a1">1</option>
                            <option value="a2">2</option>
                            <option value="a3">3</option>
                            <option value="a4">4</option>
                            <option value="a5">5</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Monitor LG 14'
                </td>
                <td>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="opsi2">
                            <option value="b0">0</option>
                            <option value="b1">1</option>
                            <option value="b2">2</option>
                            <option value="b3">3</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    CD-RW Samsung
                </td>
                <td>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="opsi3">
                            <option value="c0">0</option>
                            <option value="c1">1</option>
                            <option value="c2">2</option>
                            <option value="c3">3</option>
                            <option value="c4">4</option>
                            <option value="c5">5</option>
                            <option value="c6">6</option>
                            <option value="c7">7</option>
                            <option value="c8">8</option>
                            <option value="c9">9</option>
                            <option value="c10">10</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Memory Card 256
                </td>
                <td>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="opsi4">
                            <option value="d0">0</option>
                            <option value="d1">1</option>
                            <option value="d2">2</option>
                            <option value="d3">3</option>
                            <option value="d4">4</option>
                            <option value="d5">5</option>
                            <option value="d6">6</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Hardisk Seagate 512GB
                </td>
                <td>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="opsi5">
                            <option value="e0">0</option>
                            <option value="e1">1</option>
                            <option value="e2">2</option>
                            <option value="e3">3</option>
                            <option value="e4">4</option>
                            <option value="e5">5</option>
                        </select>
                    </div>
                </td>
            </tr>
        </table>

        <button type="submit" name="submit" class="btn btn-primary">Checkout</button>

        <br>
        <br>
        <div class="form-group">
            <label for="exampleFormControlInput1">Total yang harus dibayarkan : </label>
            <br>
            <br>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $jmlHarga ?>" readonly>
        </div>

        <br>
        <h2>Kwitansi Pembelian</h2>
        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $jmlHarga ?>" readonly>
        </form>


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