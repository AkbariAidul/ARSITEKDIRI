<?php
session_start();

// --- LOGIKA PHP UTAMA ---
// 1. Periksa apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    // Jika belum, hentikan skrip dan berikan pesan error
    http_response_code(403); // Forbidden
    die('Akses ditolak. Silakan <a href="login.php">login</a> terlebih dahulu.');
}

// 2. Dapatkan nama file dari parameter URL
$file_name = $_GET['file'] ?? '';
$file_path = __DIR__ . '/assets/' . basename($file_name); // Pastikan path aman

// 3. Periksa apakah file ada dan aman untuk di-download
if (!empty($file_name) && file_exists($file_path)) {
    // Set header agar browser men-download file, bukan menampilkannya
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream'); // Tipe konten generik untuk download
    header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_path));
    
    // Baca file dan kirimkan isinya ke browser
    flush(); // Hapus buffer output sistem
    readfile($file_path);
    exit();
} else {
    // Jika file tidak ditemukan
    http_response_code(404); // Not Found
    die('File tidak ditemukan.');
}
?>