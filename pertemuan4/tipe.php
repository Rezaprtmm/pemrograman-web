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
    $nim = "0411500400";
    $nama = 'Chotimatul Musyarofah';
    $umur = 23;
    $nilai = 82.25;
    $status = TRUE;

    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama <br>" ;
    print "Umur : " . $umur; print "<br>";
    printf ("Nilai : %.2f<br>", $nilai);
    if($status)
        echo "Status : Aktif";
    else
        echo "Status : Tidak Aktif";

    ?>
</body>
</html>