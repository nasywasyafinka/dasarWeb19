<?php
// Memeriksa apakah session telah dimulai
if (session_status() == PHP_SESSION_NONE) {
    // Jika belum dimulai, maka mulai session
    session_start();
    // Menghancurkan session yang ada
    session_destroy();
    // Mengarahkan pengguna kembali ke halaman indeks
    header('location: index.php');
}
?>