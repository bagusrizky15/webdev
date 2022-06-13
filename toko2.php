<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nota Pembelian</title>
</head>
<body>
<div class="container my-4">
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
                <form action="toko2.php" method="POST" enctype="multipart/form-data">
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
                            <td>
                                <div class="form-group">
                                <input type="number" class="form-control" id="exampleFormControlInput1" value="<?= $jmlHarga ?>" readonly>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="exampleFormControlInput1" value="<?= $jmlHarga ?>" readonly>
                                </div>
                            </td>
                        </tr>
                    <?php
                        $nm = $nm + 1;
                    }
                    ?>
            </tbody>
        </table>
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