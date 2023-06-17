<?php
    include_once("config.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $result = mysqli_query($db, "DELETE FROM calon_siswa WHERE id=$id");

        if($result) {
            header("Location: index.php");
        } else {
            die ("Delete failed");
        }
    }
    else {
        die("Akses dilarang...");
    }
?>
