<?php
error_reporting(0);
extract($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form_handling.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
        <br>
    </form>

    <input type="text" value="<?php echo $name; ?>"><br>
    <input type="text" value="<?php echo $email; ?>">

</body>

</html>