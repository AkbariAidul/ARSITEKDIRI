<?php
/*
 * File ini berisi konfigurasi untuk koneksi ke database.
 * Ganti nilai variabel di bawah ini sesuai dengan pengaturan server Anda.
*/

// Mendefinisikan konstanta untuk kredensial database
define('DB_SERVER', 'sql204.infinityfree.com');      // Biasanya 'localhost'
define('DB_USERNAME', 'if0_39473121');         // Username database Anda (default XAMPP adalah 'root')
define('DB_PASSWORD', 'pwkupassword');             // Password database Anda (default XAMPP kosong)
define('DB_NAME', 'if0_39473121_arsitekdiri_db'); // Nama database yang Anda buat tadi

// Mencoba membuat koneksi ke database MySQL
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Memeriksa koneksi
// Jika $mysqli->connect_error bernilai true, berarti koneksi gagal.
if ($mysqli->connect_error) {
    // Hentikan eksekusi skrip dan tampilkan pesan error.
    // die() adalah fungsi untuk menghentikan program.
    die("ERROR: Koneksi gagal. " . $mysqli->connect_error);
}
?>