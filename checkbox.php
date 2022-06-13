

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Checkbox</title>
</head>
<body>
    <?php
        $submit = $_POST['btnSubmit'];
        if (isset($submit)) {
            $interpreters = $_POST['interpreters'];

            print "<p> Daftar Bahasa yang dipilih </p>";
            foreach ($interpreters as $inte) {
                print " [ ] $inte <br/>";
            }
        }
    ?>
   <a href="checkbox.html">Kembali</a>
</body>
</html>