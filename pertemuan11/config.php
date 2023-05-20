<?php
    $databaseHost = 'localhost';
    $databaseName = 'crud_db';
    $databaseUserName = 'root';
    $databasePassword = '';

    $mysqli = mysqli_connect($databaseHost, $databaseName, $databaseUserName, $databasePassword);

    if(!$mysqli) {
        die("koneksi gagal: " . mysqli_connect_error());
    }
    echo "Koneksi berhasil";
    mysqli_close($mysqli);
?>