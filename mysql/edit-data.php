<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Create</title>
</head>

<body>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    ?>
    <div class="container">
        <h1>Index Data Mahasiswa</h1>
        <form action="terima-edit.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
            <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
                while ($data = mysqli_fetch_array($query)) 
                {
            ?>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?= $data['name']?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">NIM</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nim" value="<?= $data['nim']?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Kelas</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="kelas" value="<?= $data['kelas']?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Gender</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="gender" value="<?= $data['gender']?>">
            </div>
            <?php
                }
            ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

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