<?php
$gp = 2000000;
$bonus = 500000;
$tunjangan = $gp * 0.05;
$pajak = $gp * 0.1;
$total = ($gp + $bonus + $tunjangan) - $pajak;
echo "====================================<br>";
echo "NIP = 100111<br>";
echo "Nama Pegawai = Rizki Reza Pratama<br>";
echo "====================================<br>";
echo "Gaji Pokok = Rp. " . $gp . "<br>";
echo "Bonus = Rp. " . $bonus . "<br>";
echo "Tunjangan = Rp. " . $tunjangan . "<br>";
echo "Pajak = Rp. " . $pajak . "<br>";
echo "====================================<br>";
echo "Gaji yang harus dibayarkan = Rp. " . $total;
?>