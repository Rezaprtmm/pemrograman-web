<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Formulir Pendaftaran Siswa Baru | SMK Koding</title>
</head>
<body>
<div class="container mx-auto px-[100px] mt-[50px]">
        <form action="proses-pendaftaran.php" method="POST" class="w-full px-8 py-8 flex flex-col items-center">
          <fieldset class="text-base border px-5 py-5 rounded border-gray-300">
            <div>
                <div>
                    <label for="nama" class="font-semibold">Nama</label>
                </div>
              <input type="text" name="nama" placeholder="Nama lengkap" class="border rounded px-3 py-2 mt-2 w-[500px]">
            </div>
            <div class="mt-4">
                <div>
                    <label for="alamat" class="font-semibold" >Alamat</label>
                </div>
              <textarea name="alamat" class="border rounded px-3 py-2 mt-2 w-[500px]"></textarea>
            </div>
            <div class="mt-4">
                <div>
                    <label for="jenis_kelamin" class="font-semibold">Jenis Kelamin</label>
                </div>
              <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
              <label class="px-3"><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
            </div>
            <div class="mt-4">
              <label for="agama">Agama</label>
                  <select name="agama" class="border rounded px-2 py-1">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                  </select>
            </div>
            <div class="mt-4">
                <div>
                    <label for="sekolah_asal" class="font-semibold">Sekolah Asal</label>
                </div>
              <input type="text" name="sekolah_asal" placeholder="Nama sekolah" class="border rounded px-3 py-2 mt-2 w-[500px]">
            </div>
            <div class="mt-4">
              <input type="submit" value="Daftar" name="daftar" class="bg-blue-500 text-white px-4 py-2 rounded">
            </div>
          </fieldset>
        </form>
</div>
</body>
</html>
