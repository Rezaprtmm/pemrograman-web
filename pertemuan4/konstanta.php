<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Sensitive 1</title>
</head>
<body>
    <?php
    define ("NAMA", "Achmad Solihin");
    define ("NILAI", 90);

    //Nama= "Muhammad"; //akan menyebabkan error 
    echo "Nama : " . NAMA;
    echo "<br>Nilai : " . NILAI;
    ?>
</body>
</html>