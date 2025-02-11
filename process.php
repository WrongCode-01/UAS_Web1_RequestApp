<?php
require 'config.php'; // Pastikan config.php ada dan benar

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $deskripsi = $_POST['deskripsi'];

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO requests (nama, email, telepon, deskripsi) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nama, $email, $telepon, $deskripsi);
    
    if ($stmt->execute()) {
        // Jika berhasil, langsung pindah ke halaman list permintaan
        header("Location: index.php");
        exit(); // Hentikan eksekusi setelah redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
