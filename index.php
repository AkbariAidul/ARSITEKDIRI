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
    <title>Arsitek Diri - Pustaka Digital untuk Pertumbuhan Diri</title>

    <link rel="icon" href="assets/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="assets/favicon.png">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">

    <style>
        html { scroll-padding-top: 100px; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #FEFDFB; /* Warna dasar baru, lebih hangat */
            color: #283618; /* Warna teks charcoal green, sangat kontras */
            animation: fadeIn 1s ease-out;
        }
        .font-serif { font-family: 'Playfair Display', serif; }
        .bg-card { background-color: #FFFFFF; }
        .bg-section { background-color: #F8F7F2; } /* Sedikit lebih gelap dari body */
        
        .btn-primary { 
            background-color: #606C38; /* Olive yang lebih pekat */
            color: #FEFDFB; 
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 0 4px 15px -5px rgba(0,0,0,0.1);
        }
        .btn-primary:hover { 
            transform: translateY(-3px);
            box-shadow: 0 10px 20px -10px #606C3880;
        }
        .btn-secondary { 
            background-color: transparent; 
            border: 1px solid #D1C7B7; /* Border warna netral */
            color: #283618;
            transition: all 0.3s ease;
        }
        .btn-secondary:hover { 
            background-color: #F8F7F2;
            border-color: #606C38;
        }
        .text-accent { color: #606C38; }
        .book-cover {
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 0 10px 30px -10px rgba(0,0,0,0.2);
        }
        .book-cover:hover {
            transform: translateY(-10px) rotate(2deg);
            box-shadow: 0 20px 40px -15px rgba(0,0,0,0.3);
        }
        .vision-card {
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            border: 1px solid #F0F0E6;
        }
        .vision-card:hover {
            transform: translateY(-8px);
            border-color: #D1C7B7;
            box-shadow: 0 15px 30px -10px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body class="antialiased">

    <header class="bg-[#FEFDFB]/80 backdrop-blur-lg border-b border-black/5 sticky top-0 z-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-24">
             <a href="index.php" class="flex-shrink-0">
                <img class="h-12 w-auto" src="assets/LOGOS-removebg.png" alt="Logo Arsitek Diri">
            </a>
            <nav class="hidden md:flex items-center space-x-10 text-sm font-medium">
                <a href="index.php" class="text-gray-700 hover:text-black transition-colors">Beranda</a>
                <a href="profile.php" class="text-gray-700 hover:text-black transition-colors">Tentang Kami</a>
                <a href="index.php#tentang-kami" class="text-gray-700 hover:text-black transition-colors">Visi Kami</a>
                <a href="index.php#filosofi-logo" class="text-gray-700 hover:text-black transition-colors">Filosofi Logo</a>
            </nav>
            <div class="hidden md:flex items-center space-x-4">
                 <?php if ($is_logged_in): ?>
                    <a href="library.php" class="btn-primary px-5 py-3 rounded-full text-sm font-medium">Perpustakaan Saya</a>
                    <a href="logout.php" class="text-sm font-medium text-gray-500 hover:text-black">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="text-sm font-medium text-gray-700 hover:text-black">Login</a>
                    <a href="register.php" class="btn-primary px-5 py-3 rounded-full text-sm font-medium">Daftar Gratis</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

    <main>

        <section id="hero" class="relative py-28 sm:py-32">
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <svg class="absolute left-[50%] top-0 h-[64rem] w-[128rem] -translate-x-1/2" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M317.219 518.975L203.852 678H0V0H239.615L317.219 518.975Z" fill="#F8F7F2"/>
                    <path d="M493.324 518.975L606.691 678H846.306V0H626.691L493.324 518.975Z" fill="#F8F7F2"/>
                </svg>
            </div>
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div class="text-center md:text-left">
                        <h1 class="font-serif text-5xl lg:text-7xl font-bold text-[#283618] leading-tight">
                            Buka Wawasan, Rancang Masa Depan.
                        </h1>
                        <p class="mt-6 text-lg text-gray-600 max-w-lg mx-auto md:mx-0">
                           Selamat datang di Arsitek Diri. Sebuah pustaka digital yang kami rawat dengan cermat, dimulai dengan karya perdana yang akan mengubah cara Anda berpikir.
                        </p>
                        <div class="mt-10">
                            <a href="#buku-terbaru" class="btn-primary px-8 py-4 rounded-full font-semibold text-lg">Mulai Petualangan Anda</a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img src="assets/cover.png" alt="Sampul Buku Level Up atau Tertinggal" class="book-cover rounded-lg w-3/4 md:w-full max-w-sm">
                    </div>
                </div>
            </div>
        </section>

        <section id="buku-terbaru" class="py-28 bg-section" x-data="{ tab: 'deskripsi' }">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto">
                    <p class="font-semibold text-accent">BUKU UNGGULAN</p>
                    <h2 class="mt-4 font-serif text-5xl font-bold text-[#283618]">Level Up atau Tertinggal</h2>
                </div>
                <div class="grid lg:grid-cols-5 gap-12 items-start mt-20">
                    <div class="lg:col-span-2 flex justify-center">
                         <img src="assets/cover.jpg" alt="Level Up atau Tertinggal" class="book-cover rounded-lg w-full max-w-xs shadow-2xl">
                    </div>
                    <div class="lg:col-span-3">
                        <div class="border-b border-black/10">
                            <nav class="flex -mb-px space-x-10">
                                <button @click="tab = 'deskripsi'" :class="{ 'border-[#606C38] text-[#283618]': tab === 'deskripsi', 'border-transparent text-gray-500 hover:text-black': tab !== 'deskripsi' }" class="py-4 px-1 border-b-2 font-semibold tracking-wider text-sm transition-colors duration-300">DESKRIPSI</button>
                                <button @click="tab = 'detail'" :class="{ 'border-[#606C38] text-[#283618]': tab === 'detail', 'border-transparent text-gray-500 hover:text-black': tab !== 'detail' }" class="py-4 px-1 border-b-2 font-semibold tracking-wider text-sm transition-colors duration-300">DETAIL</button>
                            </nav>
                        </div>
                        <div class="mt-8 min-h-[180px]">
                            <div x-show="tab === 'deskripsi'" x-transition:enter="transition-opacity duration-500" x-transition:leave="transition-opacity duration-300 absolute invisible">
                                <p class="text-gray-700 text-lg leading-relaxed">Buku ini adalah panduan praktis untuk merancang ulang kebiasaan, pola pikir, dan masa depan Anda. Pelajari cara mengubah tantangan menjadi peluang dan kegagalan menjadi pelajaran berharga untuk bangkit lebih kuat.</p>
                            </div>
                            <div x-show="tab === 'detail'" x-transition:enter="transition-opacity duration-500" x-transition:leave="transition-opacity duration-300 absolute invisible">
                                <ul class="text-gray-700 space-y-3">
                                    <li><strong>Penulis:</strong> <span class="text-[#283618] font-medium">Aidul Akbari & Mislaini</span></li>
                                    <li><strong>Penerbit:</strong> <span class="text-[#283618] font-medium">-</span></li>
                                    <li><strong>Tanggal Terbit:</strong> <span class="text-[#283618] font-medium"><?php echo date('d F Y', strtotime('-1 month')); ?></span></li>
                                    <li><strong>Halaman:</strong> <span class="text-[#283618] font-medium">96 halaman</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="tentang-kami" class="py-28">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="font-serif text-5xl font-bold text-[#283618]">Lebih dari Sekadar Kata</h2>
                    <p class="mt-4 text-gray-600 text-lg">Arsitek Diri adalah sebuah ekosistem gagasan. Dimulai dengan satu buku, dengan visi untuk menumbuhkan sebuah perpustakaan yang bermakna.</p>
                </div>
                <div class="mt-20 grid sm:grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="vision-card bg-card p-8 rounded-xl text-left">
                        <i class="ri-book-shelf-line text-accent text-4xl mb-4"></i>
                        <h3 class="text-xl font-bold text-[#283618]">Pustaka yang Terkurasi</h3>
                        <p class="mt-2 text-gray-600">Kami berkomitmen untuk hanya menerbitkan karya orisinal yang telah melalui proses riset dan penulisan yang mendalam.</p>
                    </div>
                    <div class="vision-card bg-card p-8 rounded-xl text-left">
                        <i class="ri-quill-pen-line text-accent text-4xl mb-4"></i>
                        <h3 class="text-xl font-bold text-[#283618]">Karya Orisinal</h3>
                        <p class="mt-2 text-gray-600">Setiap buku ditulis langsung oleh kami. Anda mendapatkan perspektif unik yang tidak akan ditemukan di tempat lain.</p>
                    </div>
                    <div class="vision-card bg-card p-8 rounded-xl text-left">
                        <i class="ri-seedling-line text-accent text-4xl mb-4"></i>
                        <h3 class="text-xl font-bold text-[#283618]">Dirancang untuk Bertumbuh</h3>
                        <p class="mt-2 text-gray-600">Visi kami adalah membangun platform interaktif di mana ide-ide dari buku bisa didiskusikan dan dikembangkan.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="filosofi-logo" class="py-28 bg-section">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="lg:order-last flex justify-center items-center">
                        <div class="p-8 bg-white rounded-full shadow-2xl">
                             <img class="w-64 h-64" src="assets/LOGOS-removebg.png" alt="Logo Arsitek Diri">
                        </div>
                    </div>
                    <div class="text-left lg:order-first">
                        <p class="font-semibold text-accent">IDENTITAS KAMI</p>
                        <h2 class="font-serif mt-4 text-5xl font-bold text-[#283618]">Makna di Balik Simbol</h2>
                        <p class="mt-4 text-gray-600 text-lg">Logo ini adalah representasi dari huruf 'A' untuk Arsitek. Ia terbagi menjadi dua bagian yang melambangkan fondasi perjalanan kita:</p>
                        <div class="mt-10 space-y-8 border-t border-black/10 pt-8">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-white rounded-full flex items-center justify-center border border-black/5">
                                    <i class="ri-landscape-line text-accent text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-[#283618]">Bagian Kiri (Hijau): Struktur & Aksi.</h3>
                                    <p class="mt-1 text-gray-600">Ini adalah bagian yang kita bangun secara aktif setiap hari. Kerangka kerja, kebiasaan, strategi, dan tindakan nyata. Bentuknya dinamis, melambangkan proses yang terus bertumbuh dan beradaptasi.</p>
                                </div>
                            </div>
                             <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-white rounded-full flex items-center justify-center border border-black/5">
                                    <i class="ri-seedling-line text-accent text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-[#283618]">Bagian Kanan (Coklat): Fondasi & Prinsip.</h3>
                                    <p class="mt-1 text-gray-600">Ini adalah dasar yang kokoh. Nilai-nilai, keyakinan, dan prinsip "Dikotomi Perkuliahan" yang kita pegang. Bentuknya solid dan menopang, menjadi pijakan bagi setiap aksi yang kita ambil.</p>
                                    <br>
                                    <p>Keduanya tidak menempel, melambangkan pilihan sadar yang harus kita ambil untuk menghubungkan prinsip dengan tindakan. Menjadi Arsitek Diri adalah seni membangun struktur di atas fondasi yang kuat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="final-cta" class="py-28 bg-section">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-[#283618] rounded-2xl p-12 md:p-20 text-center relative overflow-hidden">
                     <div class="relative z-10">
                        <h2 class="font-serif text-5xl font-bold text-white">Mulai Perjalanan Anda</h2>
                        <p class="mt-4 text-lg text-[#FEFDFB]/70 max-w-2xl mx-auto">Daftarkan diri Anda untuk mendapatkan akses membaca dan menjadi yang pertama tahu saat karya baru kami terbit.</p>
                        <div class="mt-10">
                            <a href="register.php" class="bg-[#FEFDFB] text-[#283618] px-10 py-4 rounded-full font-bold text-lg transition-transform hover:scale-105 inline-block shadow-2xl">Ciptakan Akun Gratis</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm text-gray-500">
            <img class="h-12 w-auto mx-auto mb-4" src="assets/LOGOS-removebg.png" alt="Logo Arsitek Diri">
            <p>&copy; <?php echo date('Y'); ?> Arsitek Diri. Dirancang dengan hati.</p>
        </div>
    </footer>
</body>
</html>