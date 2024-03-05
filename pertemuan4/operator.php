<?php
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
$hasilkurang = $a - $b;
$hasilkali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat-$a**$b;

echo "Nilai a =  $a <br>";
echo "Nilai a =  $b <br>";

echo "Hasil Penjumlahan a + b =  $hasilTambah <br>";
echo "Hasil Pengurangan a - b =  $hasilKurang <br>";
echo "Hasil Perkalian a * b =  $hasilKali <br>";
echo "Hasil Pembagain a / b =  $hasilBagi <br>";
echo "Sisa Bagi a % b =  $sisaBagi <br>";
echo "Hasil Pangkat a ^ b =  $hasilTambah <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a !=$b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Operasi AND a && b = ".($hasilAnd ? 'True ':'False'). "<br>";
echo "Hasil Operasi OR a || b = ".($hasilor ? 'True ':'False'). "<br>";
echo "Hasil Operasi NOT !$a = ".($hasilNotA ? 'True ':'False'). "<br>";
echo "Hasil Operasi NOT !$b = ".($hasilNotB ? 'True ':'False'). "<br>";
//titik berfungsi utk menggabungkan dua titik

$hasilAnd = $a && $b;
$hasilor = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Setelah operasi (a += b) = ". $tambah ."<br>";
echo "Setelah operasi (a -= b) = ". $kurang ."<br>";
echo "Setelah operasi (a *= b) = ". $kali ."<br>";
echo "Setelah operasi (a /= b) = ". $bagi ."<br>";
echo "Setelah operasi (a %= b) = ". $persen ."<br>";

echo "<br>";
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

//tambahan
echo "Apakah a identik dengan b?" . ($hasilIdentik? 'Ya' : 'Tidak')."<br>";
echo "Apakah a tidak identik dengan b?" . ($hasilTidakIdentik? 'Ya' : 'Tidak')."<br>";

//resto
$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKosong = ($kursiKosong / $totalKursi)*100;

echo "Jumlah kursi yang masih kosong = $kursiKosong<br>";
echo "Persentase kursi yang masih kosong = ".($persentaseKosong)."%";

?>