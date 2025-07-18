<?php
// Memanggil file konfigurasi untuk koneksi database
require_once "config.php";

// Mendefinisikan variabel dan menginisialisasinya dengan string kosong
$username = $email = $password = "";
$username_err = $email_err = $password_err = "";

// Memproses data form ketika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validasi username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Username wajib diisi.";
    } else {
        $sql = "SELECT id FROM users WHERE username = ?";
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("s", $param_username);
            $param_username = trim($_POST["username"]);
            if ($stmt->execute()) {
                $stmt->store_result();
                if ($stmt->num_rows == 1) {
                    $username_err = "Username ini sudah digunakan.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Terjadi kesalahan.";
            }
            $stmt->close();
        }
    }

    // Validasi email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Email wajib diisi.";
    } else {
        $email = trim($_POST["email"]);
        // Anda bisa menambahkan validasi duplikasi email di sini jika perlu
    }

    // Validasi password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Password wajib diisi.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password minimal harus 6 karakter.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Cek apakah ada error sebelum memasukkan data ke database
    if (empty($username_err) && empty($email_err) && empty($password_err)) {
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("sss", $param_username, $param_email, $param_password);
            
            $param_username = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Enkripsi password
            
            if ($stmt->execute()) {
                header("location: login.php?status=registered");
                exit();
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
    <title>Buat Akun - Arsitek Diri</title>

    <link rel="icon" href="assets/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="assets/favicon.png">
    
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
    </style>
</head>
<body class="antialiased">

    <div class="form-container">
        <div class="text-center mb-8">
            <a href="index.php">
                <img class="h-12 w-auto mx-auto mb-4" src="assets/LOGOS-removebg.png" alt="Logo Arsitek Diri">
            </a>
            <h2 class="font-serif text-4xl font-bold text-[#283618]">Buat Akun Baru</h2>
            <p class="mt-2 text-gray-600">
                Sudah punya akun? <a href="login.php" class="font-medium text-[#606C38] hover:underline">Login di sini</a>
            </p>
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="space-y-5">
            <div>
                <label for="username" class="text-sm font-medium text-gray-700 block mb-2">Username</label>
                <input type="text" name="username" id="username" class="form-input w-full px-4 py-3 rounded-lg <?php echo (!empty($username_err)) ? 'border-red-500' : ''; ?>" value="<?php echo $username; ?>">
                <span class="error-text"><?php echo $username_err; ?></span>
            </div>

            <div>
                <label for="email" class="text-sm font-medium text-gray-700 block mb-2">Alamat Email</label>
                <input type="email" name="email" id="email" class="form-input w-full px-4 py-3 rounded-lg <?php echo (!empty($email_err)) ? 'border-red-500' : ''; ?>" value="<?php echo $email; ?>">
                <span class="error-text"><?php echo $email_err; ?></span>
            </div>

            <div>
                <label for="password" class="text-sm font-medium text-gray-700 block mb-2">Password</label>
                <input type="password" name="password" id="password" class="form-input w-full px-4 py-3 rounded-lg <?php echo (!empty($password_err)) ? 'border-red-500' : ''; ?>">
                <span class="error-text"><?php echo $password_err; ?></span>
            </div>

            <div class="pt-4">
                <button type="submit" class="btn-primary w-full text-center py-3 rounded-lg font-semibold">
                    Daftar
                </button>
            </div>
        </form>
    </div>

</body>
</html>