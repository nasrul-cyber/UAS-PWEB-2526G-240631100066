<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_kaskita";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Fungsi 1: Format angka ke Rupiah
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

// Fungsi 2: Sanitasasi input data biar aman
function amankanInput($data) {
    global $koneksi;
    return mysqli_real_escape_string($koneksi, htmlspecialchars(strip_tags($data)));
}
?>
