<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer <br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i = 1; $i <= $jumlahLahan; $i++) {
$jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor) {
$totalSkor += $skor;
}
echo "<br>Total skor ujian adalah: $totalSkor";

$nilaisiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaisiswa as $nilai) {
    if ($nilai < 60) { echo "Nilai: $nilai (Tidak lulus) <br>"; continue; }
echo "<br>Nilai: $nilai (Lulus) <br>";
}

$nilaisiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan array secara ascending
sort($nilaisiswa);

// Menghapus dua nilai terendah dan dua nilai tertinggi
array_shift($nilaisiswa);
array_shift($nilaisiswa);
array_pop($nilaisiswa);
array_pop($nilaisiswa);

// Menghitung total nilai
$totalNilai = array_sum($nilaisiswa);

// Menghitung jumlah siswa setelah mengabaikan nilai tertinggi dan terendah
$jumlahSiswa = count($nilaisiswa);

// Menghitung rata-rata nilai
$rataNilai = $totalNilai / $jumlahSiswa;

echo "<br>Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai <br>";
echo "Rata-rata nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $rataNilai";

// Harga produk
$hargaProduk = 120000;

// Batas jumlah pembelian untuk mendapatkan diskon
$batasDiskon = 100000;

// Persentase diskon
$persentaseDiskon = 20;

// Menghitung harga setelah diskon
if ($hargaProduk > $batasDiskon) {
    // Menghitung diskon
    $diskon = $hargaProduk * ($persentaseDiskon / 100);

    // Menghitung harga setelah diskon
    $hargaSetelahDiskon = $hargaProduk - $diskon;

    echo "<br>Harga produk sebelum diskon: Rp $hargaProduk <br>";
    echo "Diskon $persentaseDiskon%: -Rp $diskon <br>";
    echo "Harga setelah diskon: Rp $hargaSetelahDiskon";
} else {
    // Jika jumlah pembelian tidak mencapai batas diskon, tidak ada diskon
    echo "Harga produk: Rp $hargaProduk <br>";
    echo "Tidak ada diskon diberikan.";
}


// Skor yang diperoleh oleh pemain
$poin = 600;

// Batas poin untuk mendapatkan hadiah tambahan
$batasPoinHadiah = 500;

// Menghitung total skor
$totalSkor = $poin;

// Menentukan apakah pemain mendapatkan hadiah tambahan
$mendapatkanHadiah = ($poin > $batasPoinHadiah) ? "YA" : "TIDAK";

// Menampilkan hasil
echo "<br><br>Total skor pemain adalah: $totalSkor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $mendapatkanHadiah";
?>
