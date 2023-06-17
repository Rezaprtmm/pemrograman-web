<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Pendaftaran Siswa Baru | SMK Koding</title>

</head>
<body>
    <div class="container mx-auto px-[100px] mt-[50px]">
        <div class="w-full px-8 py-8 flex flex-col items-center">
            <div class="border px-5 py-5 rounded border-gray-300">
                <nav >
                  <a href="form-daftar.php" class="border bg-green-300 rounded px-2 py-2">[+] Tambah Baru</a>
                </nav>
              
                <table class="mt-4 border-collapse border rounded border-slate-400 w-[1000px] h-[300px]">
                  <thead class="border border-slate-300">
                    <tr class="border border-slate-300">
                      <th class="border border-slate-300 ">No</th>
                      <th class="border border-slate-300 ">Nama</th>
                      <th class="border border-slate-300 ">Alamat</th>
                      <th class="border border-slate-300 ">Jenis Kelamin</th>
                      <th class="border border-slate-300 ">Agama</th>
                      <th class="border border-slate-300 ">Sekolah Asal</th>
                      <th class="border border-slate-300 ">Tindakan</th>
                    </tr>
                  </thead>
                  <tbody class="border border-slate-300 ">
                    <?php
                    include_once("config.php");
                    $sql = "SELECT * FROM calon_siswa";
                    $query = mysqli_query($db, $sql);
              
                    while ($siswa = mysqli_fetch_array($query)) {
                      echo "<tr class='border border-slate-300 '>";
                      echo "<td class='border border-slate-300 '>" . $siswa['id'] . "</td>";
                      echo "<td class='border border-slate-300 '>" . $siswa['nama'] . "</td>";
                      echo "<td class='border border-slate-300 '>" . $siswa['alamat'] . "</td>";
                      echo "<td class='border border-slate-300 '>" . $siswa['jenis_kelamin'] . "</td>";
                      echo "<td class='border border-slate-300 '>" . $siswa['agama'] . "</td>";
                      echo "<td class='border border-slate-300 '>" . $siswa['sekolah_asal'] . "</td>";
                      echo "<td class='border border-slate-300 '>";
                      echo "<a href='form-edit.php?id=" . $siswa['id'] . "' class='border px-2 py-2 rounded bg-green-300'>Edit</a> | ";
                      echo "<a href='hapus.php?id=" . $siswa['id'] . "' class='border px-2 py-2 rounded bg-red-300'>Hapus</a>";
                      echo "</td>";
                      echo "</tr>";
                    }
                    ?>
                  </tbody>
                </table>
                <p>Total: 
                  <?php 
                  echo mysqli_num_rows($query);
                  ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
