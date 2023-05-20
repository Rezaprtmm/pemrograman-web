<?php
    mysql_connect("localhost", "root", "xxx");
    if($host) {
        echo "koneksi host berhasil.<br/>";
    } else {
        echo "koneksi gagal.<br/>";
    }
    mysql_select_db("konnekdb");
    if($db) {
        echo "koneksi database berhasil.";
    } else {
        echo "koneksi database gagal.";
    }
?>