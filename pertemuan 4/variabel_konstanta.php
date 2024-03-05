<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angkal dan $angka2 adalah $hasil.\n";


$benar = true;
$salah = false;
echo "Variabel benar: $benar, \nVariabel salah: $salah";

// Mendefinisikan konstanta untuk nilai tetap define("NAMA_SITUS", "Websiteku.com"); define("TAHUN_PENDIRIAN", 2023);
define("NAMA_SITUS", "Websiteku.com");
define("TAHUN_PENDIRIAN", 2023);
echo "\nSelamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>
