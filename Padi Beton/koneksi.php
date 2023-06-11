<?php
// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact_us";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect->connect_error());
}else{
    echo "Koneksi Berhasil";
}
