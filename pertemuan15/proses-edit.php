<?php
    include_once("config.php");

    if(isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah_asal = $_POST['sekolah_asal'];

        $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id=$id";
        $query = mysqli_query($db, $sql);

        if( $query ) {
            header('Location: list-siswa.php');
        } else {
            die("Gagal menyimpan perubahan...");
        }
    } else {
        die("Akses dilarang...");
    }
?>