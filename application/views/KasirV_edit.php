<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h1>Edit Kasir</h1>

    <form action="<?php echo site_url('KasirC/update/'.$kasir->id_kasir); ?>" method="POST">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $kasir->nama; ?>" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $kasir->alamat; ?>">
        </div>

        <div class="mb-3">
            <label for="no_telp" class="form-label">No Telepon:</label>
            <input type="text" name="no_telp" class="form-control" value="<?php echo $kasir->no_telp; ?>" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender:</label>
            <select name="gender" class="form-select">
                <option value="Laki-laki" <?php echo ($kasir->gender == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                <option value="Perempuan" <?php echo ($kasir->gender == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $kasir->tanggal_lahir; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?php echo site_url('KasirC'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
