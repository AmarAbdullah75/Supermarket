<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Pembeli</title>
</head>
<body>

<div class="container mt-5">
    <h1>Tambah Pembeli</h1>

    <form action="<?php echo site_url('PembeliC/store'); ?>" method="POST">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender:</label>
            <select name="gender" class="form-select" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">No Telepon:</label>
            <input type="text" name="no_telp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo site_url('PembeliC'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
