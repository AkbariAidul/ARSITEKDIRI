<?php
// Halaman ini HANYA untuk pengguna yang sudah login
session_start();

// Jika pengguna mencoba mengakses halaman ini tanpa login,
// tendang mereka kembali ke halaman login.
if (!isset($_SESSION["user_id"])) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Anda - Arsitek Diri</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #FEFDFB;
            color: #283618;
        }
        .font-serif { font-family: 'Playfair Display', serif; }
        .bg-card { background-color: #FFFFFF; }
        .bg-section { background-color: #F8F7F2; }
        
        .btn-primary { 
            background-color: #606C38;
            color: #FEFDFB; 
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .btn-primary:hover { 
            transform: translateY(-2px);
            box-shadow: 0 8px 15px -8px #606C3880;
        }
        .btn-secondary { 
            background-color: #F8F7F2; 
            border: 1px solid #D1C7B7;
            color: #283618;
            transition: all 0.3s ease;
        }
        .btn-secondary:hover { 
            transform: translateY(-2px);
            border-color: #606C38;
            box-shadow: 0 8px 15px -8px #D1C7B7;
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
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-600 hidden sm:block">Halo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                    <a href="logout.php" class="text-sm font-medium text-gray-500 hover:text-black">Logout</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mb-16">
                    <h1 class="font-serif text-5xl lg:text-6xl font-bold text-[#283618]">Perpustakaan Anda</h1>
                    <p class="mt-4 text-lg text-gray-600">Semua koleksi buku dari Arsitek Diri yang Anda miliki, tersedia untuk dibaca dan diunduh kapan saja.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
                    
                    <div class="bg-card rounded-xl p-6 border border-black/5 shadow-lg flex flex-col">
                        <img src="assets/cover.jpg" alt="Sampul Level Up atau Tertinggal" class="rounded-md w-full shadow-md">
                        <div class="mt-6 flex-grow">
                            <h3 class="font-serif text-2xl font-bold text-[#283618]">Level Up atau Tertinggal</h3>
                            <p class="text-sm text-gray-500 mt-1">Oleh: Rida K. & Riska K.</p>
                        </div>
                        
                        <div class="mt-6 space-y-3">
                            <a href="baca.php" class="btn-primary w-full text-center py-3 rounded-lg font-semibold flex items-center justify-center gap-2">
                                <i class="ri-book-open-line"></i> Baca Sekarang
                            </a>
                            <a href="download.php?file=buku.pdf" class="btn-secondary w-full text-center py-3 rounded-lg font-semibold flex items-center justify-center gap-2">
                                <i class="ri-download-2-line"></i> Download
                            </a>
                        </div>
                    </div>

                    <div class="bg-card rounded-xl p-6 border border-dashed border-gray-300 flex flex-col items-center justify-center text-center">
                        <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center">
                           <i class="ri-book-shelf-line text-3xl text-gray-400"></i>
                        </div>
                        <p class="mt-4 text-sm font-medium text-gray-400">Buku baru akan datang</p>
                    </div>

                </div>
            </div>
        </section>
    </main>
</body>
</html>