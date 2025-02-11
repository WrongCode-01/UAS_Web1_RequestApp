<?php
$host = "localhost";
$user = "root"; // Sesuaikan dengan username MySQL Anda
$password = ""; // Kosongkan jika tidak ada password
$database = "request_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
