<?php
session_start();
$is_logged_in = isset($_SESSION['user_id']);
$username = $_SESSION['username'] ?? 'Tamu';
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel - Arsitek Diri</title>

    <link rel="icon" href="assets/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="assets/favicon.png">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">

    <style>
        html { scroll-padding-top: 100px; }
        body { font-family: 'Inter', sans-serif; background-color: #FEFDFB; color: #283618; }
        .font-serif { font-family: 'Playfair Display', serif; }
        .bg-card { background-color: #FFFFFF; }
        .bg-section { background-color: #F8F7F2; }
        .btn-primary { background-color: #606C38; color: #FEFDFB; transition: all 0.3s; }
        .btn-primary:hover { transform: translateY(-3px); box-shadow: 0 10px 20px -10px #606C3880; }
        .text-accent { color: #606C38; }
    </style>
</head>
<body class="antialiased">

    <header class="bg-[#FEFDFB]/80 backdrop-blur-lg border-b border-black/5 sticky top-0 z-50">
        </header>

    <main>
        <section id="artikel-list" class="py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mb-16 text-center mx-auto">
                    <h1 class="font-serif text-5xl lg:text-6xl font-bold text-[#283618]">Artikel & Wawasan</h1>
                    <p class="mt-4 text-lg text-gray-600">Kumpulan tulisan, riset, dan pemikiran dari tim Arsitek Diri untuk menemani perjalanan pertumbuhan Anda.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    
                    <div class="bg-card rounded-xl border border-black/5 overflow-hidden group transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                        <img src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?q=80&w=2070" class="w-full h-56 object-cover" alt="Menulis Jurnal">
                        <div class="p-6">
                            <p class="text-accent font-semibold text-sm">PRODUKTIVITAS</p>
                            <h3 class="font-serif text-2xl font-bold text-[#283618] mt-2">5 Kebiasaan Kecil yang Mengubah Hidup</h3>
                            <p class="mt-3 text-gray-600 text-sm leading-relaxed">Terkadang perubahan terbesar datang dari langkah terkecil. Mari kita bedah lima kebiasaan yang bisa Anda mulai hari ini...</p>
                            <p class="text-xs text-gray-400 mt-4">Oleh Rida K. - 14 Juli 2025</p>
                        </div>
                    </div>

                    <div class="bg-card rounded-xl border border-black/5 overflow-hidden group transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                        <img src="https://images.unsplash.com/photo-1506126613408-4e05960274e5?q=80&w=2070" class="w-full h-56 object-cover" alt="Meditasi">
                        <div class="p-6">
                            <p class="text-accent font-semibold text-sm">FILOSOFI</p>
                            <h3 class="font-serif text-2xl font-bold text-[#283618] mt-2">Bagaimana Stoikisme Bisa Membantumu?</h3>
                            <p class="mt-3 text-gray-600 text-sm leading-relaxed">Di tengah dunia yang penuh ketidakpastian, kebijaksanaan kuno dari para filsuf Stoik kembali relevan untuk...</p>
                            <p class="text-xs text-gray-400 mt-4">Oleh Riska K. - 10 Juli 2025</p>
                        </div>
                    </div>

                    <div class="bg-card rounded-xl border border-black/5 overflow-hidden group transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                        <img src="https://images.unsplash.com/photo-1516245834210-c4c1427873AB?q=80&w=2070" class="w-full h-56 object-cover" alt="Proses Kreatif">
                        <div class="p-6">
                            <p class="text-accent font-semibold text-sm">DI BALIK LAYAR</p>
                            <h3 class="font-serif text-2xl font-bold text-[#283618] mt-2">Proses Kreatif di Balik Buku Kami</h3>
                            <p class="mt-3 text-gray-600 text-sm leading-relaxed">Mengintip dapur Arsitek Diri: dari mana ide datang dan bagaimana kami mengubahnya menjadi sebuah karya utuh...</p>
                            <p class="text-xs text-gray-400 mt-4">Oleh Tim Arsitek Diri - 05 Juli 2025</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="py-16">
        </footer>
</body>
</html>