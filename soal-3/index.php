<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "hotel_db"; 


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Membuat database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database berhasil dibuat<br>";
} else {
    echo "Error membuat database: " . $conn->error . "<br>";
}

// Menggunakan database yang baru dibuat
$conn->select_db($dbname);

// Membuat tabel user
$sql_user = "CREATE TABLE IF NOT EXISTS user (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql_user) === TRUE) {
    echo "Tabel user berhasil dibuat<br>";
} else {
    echo "Error membuat tabel user: " . $conn->error . "<br>";
}

// Membuat tabel kamar
$sql_kamar = "CREATE TABLE IF NOT EXISTS kamar (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nomor_kamar VARCHAR(10) NOT NULL UNIQUE,
    tipe_kamar ENUM('king', 'queen', 'twin', 'single', 'double') NOT NULL,
    status ENUM('terisi', 'kosong') NOT NULL
)";

if ($conn->query($sql_kamar) === TRUE) {
    echo "Tabel kamar berhasil dibuat<br>";
} else {
    echo "Error membuat tabel kamar: " . $conn->error . "<br>";
}


$conn->close();
?>