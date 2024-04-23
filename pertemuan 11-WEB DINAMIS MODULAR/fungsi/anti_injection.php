<?php
// Fungsi antiinjection untuk mencegah serangan SQL injection
function antiinjection($koneksi, $data)
{
    // Melakukan filtering pada data input menggunakan fungsi-fungsi berikut:
    // - htmlspecialchars() untuk mengkonversi karakter khusus menjadi entitas HTML
    // - strip_tags() untuk menghapus tag HTML dan PHP dari string
    // - stripslashes() untuk menghapus karakter backslashes (\) dari string
    // - mysqli_real_escape_string() untuk menghindari serangan SQL injection dengan meng-escape karakter khusus SQL
    $filter_sql = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
    
    // Mengembalikan data yang telah difilter
    return $filter_sql;
}
?>