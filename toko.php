<?php

extract($_POST);

$harga = 0;
$diskon = 0.7;
// if ($nm = 1) {
    switch ($opsi) {
        case 'b0':
            $harga = 0;
            break;
        case 'b1':
            $harga = 500000;
            break;
        default:
            $harga = 0;
            break;
    }
// } elseif ($nm = 2) {
//     switch ($opsi) {
//         case 'b0':
//             $harga = 0;
//             break;
//         case 'b1':
//             $harga = 500000;
//             break;
//         default:
//             $harga = 0;
//             break;
//     }
// }

$jmlHarga = $harga * $diskon;

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
                    <th scope="col">Beli</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>

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
                        <form action="toko.php" method="POST" enctype="multipart/form-data">
                            <td>
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="opsi">
                                        <?php
                                        for ($i = 0; $i <= $brg[$jml]; $i++) {
                                            echo "<option value='b.$i.'>" . $i . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $jmlHarga ?>" readonly>
                                </div>
                            </td>
                        </form>
                    </tr>
                <?php
                    $nm = $nm + 1;
                }
                ?>
            </tbody>
        </table>

        <br>
        <br>

        <button type="submit" class="btn btn-primary">Checkout</button>

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