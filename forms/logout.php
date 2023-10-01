<?php
session_start();
session_unset(); // Hapus semua data sesi
session_destroy(); // Hapus sesi dari server

// Alihkan pengguna kembali ke halaman login.php
header('Location: login.php');
exit;
?>
