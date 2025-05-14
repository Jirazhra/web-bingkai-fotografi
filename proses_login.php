<?php
session_start();

// Dummy login
$email = $_POST['email'];
$password = $_POST['password'];

// Ganti dengan validasi database
if ($email === 'user@example.com' && $password === '123456') {
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Email atau Password salah!'); window.history.back();</script>";
}
?>
