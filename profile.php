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
    <title>Tentang Kami - Arsitek Diri</title>

    <link rel="icon" href="assets/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="assets/favicon.png">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">

    <style>
        html { scroll-padding-top: 100px; }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #FEFDFB;
            color: #283618;
        }
        .font-serif { font-family: 'Playfair Display', serif; }
        .bg-card { background-color: #FFFFFF; }
        .bg-section { background-color: #F8F7F2; }
        .btn-primary { background-color: #606C38; color: #FEFDFB; transition: all 0.3s; }
        .btn-primary:hover { transform: translateY(-3px); box-shadow: 0 10px 20px -10px #606C3880; }
        .text-accent { color: #606C38; }
        .form-input { 
            background-color: #FFFFFF; 
            border: 1px solid #D1C7B7;
            transition: all 0.2s ease-in-out;
        }
        .form-input:focus { 
            border-color: #606C38; 
            box-shadow: 0 0 0 3px #606C3840; 
            outline: none; 
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
                    <span class="text-sm text-gray-600 hidden sm:block">Halo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
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

        <section id="tentang-kami" class="py-28">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div>
                        <p class="font-semibold text-accent">TENTANG KAMI</p>
                        <h1 class="font-serif mt-2 text-5xl font-bold text-[#283618] leading-tight">Merancang Pertumbuhan, Satu Buku dalam Satu Waktu.</h1>
                        <p class="mt-6 text-gray-600 leading-relaxed">
                            Arsitek Diri lahir dari sebuah persahabatan dan kecintaan yang sama pada proses belajar seumur hidup. Saya dan Mislaini, memulai platform ini pada bulan Juni tahun 2025 dengan sebuah keyakinan sederhana: setiap orang adalah arsitek bagi kehidupannya sendiri. Pengetahuan adalah bahan bakunya, dan kebiasaan adalah cara membangunnya.
                            <br><br>
                            Kami bukan perusahaan besar, melainkan sebuah studio penulisan independen yang berfokus pada pembuatan karya-karya orisinal seputar pengembangan diri, produktivitas, dan filosofi praktis. Kelebihan kami terletak pada riset mendalam dan perspektif personal yang kami tuangkan dalam setiap tulisan.
                        </p>
                    </div>
                    <div class="flex justify-center">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071" alt="Tim Arsitek Diri" class="rounded-lg shadow-xl w-full">
                    </div>
                </div>
            </div>
        </section>

        <section id="galeri" class="py-28 bg-section">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="font-serif text-5xl font-bold text-[#283618]">Galeri Kegiatan</h2>
                    <p class="mt-4 text-gray-600 text-lg">Momen di balik layar, dari proses riset, penulisan, hingga sesi diskusi bersama komunitas pembaca awal kami.</p>
                </div>
                <div class="mt-16 grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-8">
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72" class="rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72" class="rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 col-span-1 md:col-span-2">
                    <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952" class="rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 col-span-1 md:col-span-2">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" class="rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                </div>
            </div>
        </section>

        <section id="galeri" class="py-28 bg-section">
            </section>

        <section id="event" class="py-28">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto">
                    <h2 class="font-serif text-5xl font-bold text-[#283618]">Jadwal Kegiatan</h2>
                    <p class="mt-4 text-gray-600 text-lg">Ikuti sesi berbagi, workshop, dan acara peluncuran buku yang kami selenggarakan.</p>
                </div>
                <div class="mt-16 max-w-4xl mx-auto space-y-8">
                    <div class="bg-white p-6 rounded-xl border border-black/5 flex flex-col md:flex-row items-center gap-6">
                        <div class="flex-shrink-0 text-center bg-section px-6 py-4 rounded-lg">
                            <p class="font-bold text-accent text-3xl">28</p>
                            <p class="font-semibold text-sm">AGU 2025</p>
                        </div>
                        <div class="flex-grow text-center md:text-left">
                            <h3 class="font-bold text-xl text-[#283618]">Workshop: Membangun Kebiasaan Produktif</h3>
                            <p class="text-sm text-gray-500 mt-1">Online via Zoom Meeting</p>
                        </div>
                        <div>
                            <button class="btn-primary px-5 py-2 rounded-full text-sm font-medium" disabled>Pendaftaran Ditutup</button>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-xl border border-black/5 flex flex-col md:flex-row items-center gap-6">
                         <div class="flex-shrink-0 text-center bg-section px-6 py-4 rounded-lg">
                            <p class="font-bold text-accent text-3xl">15</p>
                            <p class="font-semibold text-sm">SEP 2025</p>
                        </div>
                        <div class="flex-grow text-center md:text-left">
                            <h3 class="font-bold text-xl text-[#283618]">Sesi Diskusi & Bedah Buku "Level Up"</h3>
                            <p class="text-sm text-gray-500 mt-1">Perpustakaan Daerah Kalsel, Banjarmasin</p>
                        </div>
                         <div>
                            <button class="btn-primary px-5 py-2 rounded-full text-sm font-medium">Info Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section id="klien" class="py-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="font-serif text-5xl font-bold text-[#283618]">Dipercaya Oleh</h2>
                <p class="mt-4 text-gray-600 text-lg">Kami berkolaborasi dan dipercaya oleh berbagai komunitas dan perusahaan dalam sesi berbagi dan workshop.</p>
            </div>
            
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                
                <a href="#" class="block p-4 transition-transform duration-300 hover:-translate-y-2">
                    <svg width="100%" viewBox="0 0 200 80" xmlns="http://www.w3.org/2000/svg">
                        <rect width="100%" height="100%" fill="#F8F7F2" rx="8"/>
                        <text x="50%" y="50%" font-family="Inter, sans-serif" font-size="16" font-weight="600" fill="#a3a3a3" text-anchor="middle" dominant-baseline="middle">HARAPAN BANGSA</text>
                    </svg>
                </a>
                
                <a href="#" class="block p-4 transition-transform duration-300 hover:-translate-y-2">
                    <svg width="100%" viewBox="0 0 200 80" xmlns="http://www.w3.org/2000/svg">
                        <rect width="100%" height="100%" fill="#F8F7F2" rx="8"/>
                        <text x="50%" y="50%" font-family="Inter, sans-serif" font-size="16" font-weight="600" fill="#a3a3a3" text-anchor="middle" dominant-baseline="middle">GROWTH COMMUNITY</text>
                    </svg>
                </a>

                <a href="#" class="block p-4 transition-transform duration-300 hover:-translate-y-2">
                    <svg width="100%" viewBox="0 0 200 80" xmlns="http://www.w3.org/2000/svg">
                        <rect width="100%" height="100%" fill="#F8F7F2" rx="8"/>
                        <text x="50%" y="50%" font-family="Inter, sans-serif" font-size="16" font-weight="600" fill="#a3a3a3" text-anchor="middle" dominant-baseline="middle">INSPIRASI MEDIA</text>
                    </svg>
                </a>

                <a href="#" class="block p-4 transition-transform duration-300 hover:-translate-y-2">
                    <svg width="100%" viewBox="0 0 200 80" xmlns="http://www.w3.org/2000/svg">
                        <rect width="100%" height="100%" fill="#F8F7F2" rx="8"/>
                        <text x="50%" y="50%" font-family="Inter, sans-serif" font-size="16" font-weight="600" fill="#a3a3a3" text-anchor="middle" dominant-baseline="middle">CAHAYA STARTUP</text>
                    </svg>
                </a>

            </div>
        </div>
    </section>

        <section id="kontak" class="py-28 bg-section">
             <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                 <div class="text-center max-w-3xl mx-auto">
                    <h2 class="font-serif text-5xl font-bold text-[#283618]">Hubungi Kami</h2>
                    <p class="mt-4 text-gray-600 text-lg">Punya pertanyaan, ide kolaborasi, atau sekadar ingin menyapa? Kami akan senang mendengar dari Anda.</p>
                </div>
                <div class="mt-16 grid md:grid-cols-2 gap-16 max-w-5xl mx-auto">
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <i class="ri-map-pin-line text-accent text-2xl mt-1"></i>
                            <div>
                                <h3 class="font-bold text-[#283618]">Alamat</h3>
                                <p class="text-gray-600">Jl. Brigjen Hasan Basri, Barito Kuala,<br>Kalimantan Selatan, Indonesia</p>
                            </div>
                        </div>
                         <div class="flex items-start gap-4">
                            <i class="ri-mail-send-line text-accent text-2xl mt-1"></i>
                            <div>
                                <h3 class="font-bold text-[#283618]">Email</h3>
                                <p class="text-gray-600">kontak@arsitekdiri.id</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <form action="#" method="POST" class="space-y-4">
                            <div>
                                <label for="nama" class="font-medium">Nama</label>
                                <input type="text" id="nama" name="nama" class="mt-1 form-input w-full px-4 py-3 rounded-lg">
                            </div>
                             <div>
                                <label for="email" class="font-medium">Email</label>
                                <input type="email" id="email" name="email" class="mt-1 form-input w-full px-4 py-3 rounded-lg">
                            </div>
                             <div>
                                <label for="pesan" class="font-medium">Pesan</label>
                                <textarea id="pesan" name="pesan" rows="4" class="mt-1 form-input w-full px-4 py-3 rounded-lg"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn-primary w-full py-3 rounded-lg font-semibold">Kirim Pesan</button>
                            </div>
                        </form>
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