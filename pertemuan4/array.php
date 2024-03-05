<?php
 $nilaisiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
 $nilailulus = [];
 foreach ($nilaisiswa as $nilai) {
    if ($nilai >= 70) {
    $nilailulus[] = $nilai;
    }
 }
 echo "Daftar nilai siswa yang lulus:". implode(',', $nilailulus);

 $daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
 ];
    $karyawanPengalamanLimaTahun = [];
    foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan [1] > 5) {
    $karyawanPengalamanLimaTahun[] = $karyawan[0];
        }
    }
    echo "<br><br>Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: ".implode(',', $karyawanPengalamanLimaTahun);



$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
        ['David', 64],
        ['Eva', 90],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
        ['David', 64],
        ['Eva', 90],
    ],
];

// Menghitung rata-rata nilai kelas
$totalNilai = 0;
$jumlahSiswa = 0;

foreach ($daftarNilai as $mataKuliah => $nilaiSiswa) {
    foreach ($nilaiSiswa as $nilai) {
        $totalNilai += $nilai[1];
        $jumlahSiswa++;
    }
}

$rataRataKelas = $totalNilai / $jumlahSiswa;

// Mencetak daftar nilai siswa yang di atas rata-rata kelas
echo "<br><br>Daftar nilai siswa di atas rata-rata kelas (Rata-rata kelas: $rataRataKelas):<br>";

foreach ($daftarNilai as $mataKuliah => $nilaiSiswa) {
    foreach ($nilaiSiswa as $nilai) {
        if ($nilai[1] > $rataRataKelas) {
            echo "Mata Kuliah: $mataKuliah, Nama: $nilai[0], Nilai: $nilai[1]<br>";
        }
    }
}
?>
