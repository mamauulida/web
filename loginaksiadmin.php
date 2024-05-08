<?php
session_start();
require "koneksi.php";

$user = $_POST['user'];
$password = $_POST['password'];

//query database
$result = mysqli_query($conn, "SELECT * FROM admin WHERE user= '$user'");

$row = mysqli_fetch_assoc($result);

if (password_verify($password, $row['password'])) {
    $_SESSION['login'] = true;
    $_SESSION['nama'] = $row['user'];
    $_SESSION['foto'] = 'admin.jpg';
    $_SESSION['hakakses'] = 'admin';
    header("Location: index.php");
} else {
    echo "
    <script>
        alert('Username atau Password Salah');
        document.location.href='login.php';
    </script>
    ";
}
//var_dump($row);