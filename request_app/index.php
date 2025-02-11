<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Permintaan Jasa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .container { max-width: 600px; margin-top: 50px; }
        .card { border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
    </style>
</head>
<body>

<div class="container">
    <div class="card p-4">
        <h3 class="text-center">Form Permintaan Jasa</h3>
        <form action="process.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" name="telepon" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi Permintaan</label>
                <textarea class="form-control" name="deskripsi" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim Permintaan</button>
        </form>
        <hr>
        <a href="request.php" class="btn btn-secondary w-100">Cek Riwayat Permintaan</a>
    </div>
</div>

</body>
</html>
