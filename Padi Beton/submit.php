<?php
// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact_us";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah data telah dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai dari form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Membuat query untuk memasukkan data ke dalam tabel
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

   // Menjalankan query
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
    header("Location: index.html"); // Ganti "index.php" dengan halaman awal Anda
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

// Menutup koneksi
$conn->close();

