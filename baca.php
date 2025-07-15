<?php
// Di aplikasi nyata, Anda akan memeriksa status login di sini juga
// untuk memastikan hanya user terdaftar yang bisa membaca.
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membaca: Level Up atau Tertinggal - Arsitek Diri</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Lora:wght@400;500&display=swap" rel="stylesheet">

    <style>
        /* Menggunakan font Lora untuk isi teks agar lebih nyaman dibaca */
        body { font-family: 'Inter', sans-serif; background-color: #121212; color: #E0E0E0; }
        .reading-content { font-family: 'Lora', serif; }
        .btn-primary { background-color: #3B82F6; color: white; }
        .btn-primary:hover { background-color: #2563EB; }
    </style>
</head>
<body class="antialiased">

    <div class="min-h-screen flex flex-col">
        <header class="bg-[#1E1E1E]/80 backdrop-blur-sm border-b border-gray-700/50 sticky top-0 z-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex-shrink-0">
                        <span class="text-lg font-bold text-white">Level Up atau Tertinggal</span>
                    </div>
                    <div>
                        <a href="index.php" class="text-gray-300 hover:text-white transition-colors flex items-center gap-2">
                            <i class="ri-arrow-left-line"></i>
                            <span class="text-sm font-medium">Kembali ke Perpustakaan</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-grow w-full max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <article class="reading-content text-lg leading-relaxed text-gray-300">
                <h1 class="text-4xl font-bold text-white mb-4 border-b border-gray-700 pb-2">Bab 1: Titik Awal Perubahan</h1>
                
                <p class="mb-6">
                    Setiap perjalanan besar dimulai dari satu langkah kecil. Frasa ini mungkin terdengar klise, namun menyimpan kebenaran universal yang tak lekang oleh waktu. Perubahan diri, atau yang sering kita sebut sebagai "level up", bukanlah sebuah peristiwa magis yang terjadi dalam semalam. Ia adalah akumulasi dari ribuan keputusan kecil, kebiasaan baru yang dipaksakan, dan keberanian untuk keluar dari zona nyaman, hari demi hari.
                </p>

                <p class="mb-6">
                    Di sinilah seringkali kita tersandung. Kita mendambakan hasil akhir yang gemilang—tubuh yang lebih bugar, karier yang meroket, atau pikiran yang lebih tenang—namun kita melupakan proses untuk mencapainya. Kita terintimidasi oleh besarnya gunung yang harus didaki, tanpa menyadari bahwa pendakian itu sendiri terdiri dari langkah-langkah yang bisa diatur. Arsitektur diri adalah seni merancang dan membangun langkah-langkah tersebut.
                </p>

                <blockquote class="border-l-4 border-blue-500 pl-4 italic my-8 text-gray-400">
                    "Seseorang tidak bisa membangun reputasi dari apa yang akan dia lakukan." - Henry Ford
                </blockquote>

                <p class="mb-6">
                    Bab ini tidak akan memberikan Anda formula rahasia. Sebaliknya, bab ini mengajak Anda untuk melakukan sesuatu yang jauh lebih fundamental: berhenti sejenak dan melakukan audit jujur terhadap diri sendiri. Di mana Anda berdiri saat ini? Bukan di mana Anda ingin berada, atau di mana orang lain berpikir Anda seharusnya berada. Tetapi di mana posisi Anda sebenarnya, saat ini juga. Dengan segala kelebihan, kekurangan, dan kebiasaan yang melekat. Ini adalah titik nol, fondasi di mana arsitektur baru diri Anda akan dibangun.
                </p>

                 </article>

            <div class="mt-12 flex justify-between items-center border-t border-gray-700 pt-6">
                <a href="#" class="text-gray-500 cursor-not-allowed">
                    <i class="ri-arrow-left-s-line mr-2"></i>Bab Sebelumnya
                </a>
                <a href="#" class="btn-primary px-4 py-2 rounded-md font-semibold transition-colors">
                    Bab Selanjutnya<i class="ri-arrow-right-s-line ml-2"></i>
                </a>
            </div>
        </main>
    </div>

</body>
</html>