<?php
// Memulai session
session_start();

// Menghapus semua session
session_unset();

// Menghancurkan session
session_destroy();

// Mengalihkan pengguna ke halaman login
header("Location: ../login");
exit();
?>
