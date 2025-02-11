<?php
require 'config.php'; // Pastikan config.php ada dan benar

// Ambil semua data permintaan dari database
$sql = "SELECT * FROM requests ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Permintaan Jasa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 30px;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">List Permintaan Jasa</h2>
        <a href="index.php" class="btn btn-secondary mb-3">⬅ Kembali</a>

        <?php if ($result->num_rows > 0): ?>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo htmlspecialchars($row['nama']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['telepon']); ?></td>
                            <td><?php echo htmlspecialchars($row['deskripsi']); ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-warning text-center">
                <strong>⚠ Tidak ada permintaan jasa yang tersedia.</strong><br>
                <a href="index.php" class="btn btn-primary mt-2">Buat Permintaan Baru</a>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
