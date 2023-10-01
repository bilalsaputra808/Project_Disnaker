<?php
include "db_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $namaLengkap = $_POST["namaLengkap"];
    $email = $_POST["email"];
    $noHP = $_POST["noHP"];
    $noKTP = $_POST["noKTP"];
    $tempatLahir = $_POST["tempatLahir"];
    $tanggalLahir = $_POST["tanggalLahir"];
    $pelatihan = $_POST["pelatihan"];
    $jenisKelamin = $_POST["jenisKelamin"];
    $agama = $_POST["agama"];
    $kewarganegaraan = $_POST["kewarganegaraan"];
    $domisili = $_POST["domisili"];
    $kecamatan = $_POST["kecamatan"];
    $kelurahan = $_POST["kelurahan"];
    $status = $_POST["status"];
    $alamat = $_POST["alamat"];

    // Simpan data ke database
    $sql = "INSERT INTO nama_tabel (nama_lengkap, email, no_hp, no_ktp, tempat_lahir, tanggal_lahir, pelatihan, jenis_kelamin, agama, kewarganegaraan, domisili, kecamatan, kelurahan, status, alamat)
            VALUES ('$namaLengkap', '$email', '$noHP', '$noKTP', '$tempatLahir', '$tanggalLahir', '$pelatihan', '$jenisKelamin', '$agama', '$kewarganegaraan', '$domisili', '$kecamatan', '$kelurahan', '$status', '$alamat')";

    if ($conn->query($sql) === TRUE) {
        // Data berhasil disimpan
        header("Location: ../admin/halaman_admin.php"); // Redirect ke halaman admin setelah data disimpan
        exit();
    } else {
        // Terjadi kesalahan saat menyimpan data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
?>
