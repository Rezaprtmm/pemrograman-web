<?php
    $server = "localhost";
    $user = "root";
    $password = "admin";
    $nama_database = "pendaftaran_siswa";

    $db = mysqli_connect($server, $user, $password, $nama_database);

    if(!$db){
        die('Koneksi database gagal : '.$db->connect_error);
    }
?>