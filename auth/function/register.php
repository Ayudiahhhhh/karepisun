<?php
// Include koneksi database
include('../../database/koneksi.php');

function register($nama, $username, $password, $email, $no_hp, $level) {
    global $conn; // Pastikan koneksi database tersedia

    // Hash password untuk keamanan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk menyimpan data registrasi menggunakan prepared statement
    $sql = "INSERT INTO users (nama, username, password, email, no_hp, level) 
            VALUES (?, ?, ?, ?, ?, ?)";

    // Menyiapkan prepared statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameter untuk query
        $stmt->bind_param("ssssss", $nama, $username, $hashed_password, $email, $no_hp, $level);

        // Mengeksekusi query
        if ($stmt->execute()) {
            return true; // Berhasil
        } else {
            return false; // Gagal eksekusi
        }
    } else {
        return false; // Gagal menyiapkan query
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form dan gunakan trim() untuk menghapus spasi tambahan
    $nama = trim($_POST['nama']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $no_hp = trim($_POST['no_hp']);
    $level = trim($_POST['level']);

    // Validasi form (contoh dasar)
    if (empty($nama) || empty($username) || empty($password) || empty($email) || empty($no_hp) || empty($level)) {
        echo "<script>alert('Semua kolom harus diisi!'); window.location.href = 'register.php';</script>";
        exit();
    }

    // Panggil function register
    if (register($nama, $username, $password, $email, $no_hp, $level)) {
        // Redirect ke halaman login atau success
        echo "<script>alert('Registrasi berhasil!'); window.location.href = '../login';</script>";
        exit();
    } else {
        // Jika gagal registrasi
        echo "<script>alert('Registrasi gagal. Silakan coba lagi.'); window.location.href = 'register.php';</script>";
        exit();
    }
}
?>
