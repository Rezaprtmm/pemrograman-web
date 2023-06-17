<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto px-[100px] mt-[50px] w-full  flex flex-col">
        <div class="w-full border rounded border-gray-300">
            <div class="flex flex-col items-center justify-center px-[100px] py-[100px]">
                <header class="flex flex-col items-center">
                  <h3 class="text-[32px] font-bold">Pendaftaran Siswa Baru</h3>
                  <h1 class="text-[24px] font-semibold">SMK Koding</h1>
                </header>
              
                <nav class="flex flex-col w-full">
                <h4 class="text-[24px] font-semibold flex flex-col items-center">Menu</h4>
                <p>
                    <?php
                        if (isset($_GET['status'])) {
                            if ($_GET['status'] == 'sukses') {
                                echo "<p class='text-base font-semibold bg-green-500 text-white pl-4 rounded py-3 mt-4'>Pendaftaran siswa baru berhasil!</p>";
                            } else {
                                 echo "<p class='text-base font-semibold bg-red-500 text-white pl-4 rounded py-3 mt-4'>Pendaftaran gagal!</p>";
                            }
                        }
                    ?>
                </p>
                  <ul class="mt-[30px] flex flex-col items-center">
                      <li class="mb-7"><a href="form-daftar.php" class="border px-4 py-3 rounded bg-green-300">Daftar Baru</a></li>
                      <li><a href="list-siswa.php" class="border px-4 py-3 rounded bg-green-300">Pendaftar</a></li>
                  </ul>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>