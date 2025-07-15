<?php
// Selalu mulai session di baris paling atas
session_start();

// Jika pengguna sudah login, langsung arahkan ke perpustakaan, jangan tampilkan halaman login lagi.
if (isset($_SESSION["user_id"]) === true) {
    header("location: library.php");
    exit;
}

// Panggil file konfigurasi database
require_once "config.php";

// Definisikan variabel
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Proses form saat disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validasi input
    if (empty(trim($_POST["username"]))) {
        $username_err = "Username wajib diisi.";
    } else {
        $username = trim($_POST["username"]);
    }
    
    if (empty(trim($_POST["password"]))) {
        $password_err = "Password wajib diisi.";
    } else {
        $password = trim($_POST["password"]);
    }
    
    // Jika tidak ada error validasi
    if (empty($username_err) && empty($password_err)) {
        // Siapkan statement SQL
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("s", $param_username);
            $param_username = $username;
            
            if ($stmt->execute()) {
                $stmt->store_result();
                
                // Cek jika username ada
                if ($stmt->num_rows == 1) {                    
                    $stmt->bind_result($id, $username, $hashed_password);
                    if ($stmt->fetch()) {
                        // Verifikasi password
                        if (password_verify($password, $hashed_password)) {
                            // Password benar, mulai session
                            session_start();
                            
                            // Simpan data ke dalam session
                            $_SESSION["user_id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Arahkan ke halaman perpustakaan
                            header("location: index.php");
                            exit();
                        } else {
                            // Password salah
                            $login_err = "Username atau password yang Anda masukkan salah.";
                        }
                    }
                } else {
                    // Username tidak ditemukan
                    $login_err = "Username atau password yang Anda masukkan salah.";
                }
            } else {
                echo "Oops! Terjadi kesalahan. Silakan coba lagi.";
            }
            $stmt->close();
        }
    }
    $mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Arsitek Diri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #F8F7F2; color: #283618; }
        .font-serif { font-family: 'Playfair Display', serif; }
        .btn-primary { 
            background-color: #606C38; color: #FEFDFB; 
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 0 4px 15px -5px rgba(0,0,0,0.1);
        }
        .btn-primary:hover { 
            transform: translateY(-3px);
            box-shadow: 0 10px 20px -10px #606C3880;
        }
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
        .form-container {
            max-width: 420px;
            margin: 5rem auto;
            background-color: #FEFDFB;
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: 0 10px 40px -10px rgba(0,0,0,0.1);
        }
        .error-text {
            color: #991b1b;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
        .success-text {
            color: #166534;
            font-size: 0.875rem;
            text-align: center;
            background-color: #dcfce7;
            padding: 0.75rem;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body class="antialiased">

    <div class="form-container">
        <div class="text-center mb-8">
            <a href="index.php">
                <img class="h-12 w-auto mx-auto mb-4" src="assets/LOGOS-removebg.png" alt="Logo Arsitek Diri">
            </a>
            <h2 class="font-serif text-4xl font-bold text-[#283618]">Selamat Datang</h2>
            <p class="mt-2 text-gray-600">
                Belum punya akun? <a href="register.php" class="font-medium text-[#606C38] hover:underline">Daftar di sini</a>
            </p>
        </div>

        <?php if(isset($_GET['status']) && $_GET['status'] == 'registered'): ?>
            <p class="success-text">Pendaftaran berhasil! Silakan login.</p>
        <?php endif; ?>

        <?php if(!empty($login_err)): ?>
            <p class="error-text text-center bg-red-100 p-3 rounded-lg"><?php echo $login_err; ?></p>
        <?php endif; ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="space-y-5 mt-6">
            <div>
                <label for="username" class="text-sm font-medium text-gray-700 block mb-2">Username</label>
                <input type="text" name="username" id="username" class="form-input w-full px-4 py-3 rounded-lg <?php echo (!empty($username_err)) ? 'border-red-500' : ''; ?>" value="<?php echo $username; ?>">
                <span class="error-text"><?php echo $username_err; ?></span>
            </div>

            <div>
                <label for="password" class="text-sm font-medium text-gray-700 block mb-2">Password</label>
                <input type="password" name="password" id="password" class="form-input w-full px-4 py-3 rounded-lg <?php echo (!empty($password_err)) ? 'border-red-500' : ''; ?>">
                <span class="error-text"><?php echo $password_err; ?></span>
            </div>

            <div class="pt-4">
                <button type="submit" class="btn-primary w-full text-center py-3 rounded-lg font-semibold">
                    Login
                </button>
            </div>
        </form>
    </div>

</body>
</html>