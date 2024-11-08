<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Kasir</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid w-100">
        <a class="navbar-brand" href="#">Supermarket</a>
        <a class="btn btn-outline-danger" href="<?php echo site_url("AuthenticationC/logout")?>">Logout</a>
      </div>
    </nav>

<div class="container mt-5">
    <h1>Daftar Kasir</h1>
    
    <a href="<?php echo site_url('dashboard'); ?>" class="btn btn-secondary">Beranda</a>
    <button type="button" class='btn btn-primary' data-bs-toggle="modal" data-bs-target="#modalC">Tambah Kasir</button>
    <div class="modal fade" id="modalC" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kasir</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo site_url('KasirC/store'); ?>" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat:</label>
                            <input type="text" name="alamat" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">No Telepon:</label>
                            <input type="number" name="no_telp" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Jenis Kelamin:</label>
                            <select name="gender" class="form-select">
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                            <input type="date" name="tanggal_lahir" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table class="table mt-3">
        <thead>
        
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Gender</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $baris = 1;
        foreach($kasir as $item): ?>
            <tr>
                <td><?php echo $baris++; ?></td>
                <td><?php echo $item->nama; ?></td>
                <td><?php echo $item->username; ?></td>
                <td><?php echo $item->alamat; ?></td>
                <td><?php echo $item->no_telp; ?></td>
                <td><?php echo $item->gender; ?></td>
                <td><?php echo $item->tanggal_lahir; ?></td>
                <td>
                    <button type="button" class='btn btn-warning' data-bs-toggle="modal" data-bs-target="#modal<?php echo $item->id_kasir; ?>">Edit</button>
                    <a href="<?php echo site_url('KasirC/delete/'.$item->id_kasir); ?>" class='btn btn-danger' onclick='return confirm("Yakin ingin menghapus data ini?");'>Delete</a>
                </td>
            </tr>
            <div class="modal fade" id="modal<?php echo $item->id_kasir; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Kasir</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo site_url('KasirC/update/'.$item->id_kasir); ?>" method="POST">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama:</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $item->nama; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username:</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $item->nama; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" name="password" class="form-control" value="<?php echo $item->nama; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat:</label>
                                    <input type="text" name="alamat" class="form-control" value="<?php echo $item->alamat; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">No Telepon:</label>
                                    <input type="text" name="no_telp" class="form-control" value="<?php echo $item->no_telp; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender:</label>
                                    <select name="gender" class="form-select">
                                        <option disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki" <?php echo ($item->gender == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                        <option value="Perempuan" <?php echo ($item->gender == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $item->tanggal_lahir; ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
