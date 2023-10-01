<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "multiuser_db"; // Ganti dengan nama database Anda

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Cek apakah form sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query untuk mencari pengguna berdasarkan email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password
        if (password_verify($password, $user["password"])) {
            echo "Login berhasil!";
            // Redirect ke halaman sesuai role (peserta atau admin)
            if ($user["role"] === "peserta") {
                header("Location: ../peserta/halaman_peserta.php");
                exit(); // Tambahkan exit() di sini
            } else if ($user["role"] === "admin") {
                header("Location: ../admin/halaman_admin.php");
                exit(); // Tambahkan exit() di sini
            }
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Pengguna dengan email tersebut tidak ditemukan!";
    }
}

mysqli_close($conn);
?>
