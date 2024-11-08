<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Produk</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid w-100">
        <a class="navbar-brand" href="#">Supermarket</a>
        <a class="btn btn-outline-danger" href="<?php echo site_url("AuthenticationC/logout")?>">Logout</a>
      </div>
    </nav>
<div class="container mt-5">
    <h1>Daftar Produk</h1>
    
    <a href="dashboard" class="btn btn-secondary">Beranda</a>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalC">Tambah Produk</button>
    <div class="modal fade" id="modalC" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo site_url('ProdukC/store'); ?>" method="post">
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label">Nama Produk:</label>
                            <input type="text" name="nama_produk" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis:</label>
                            <input type="text" name="jenis" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="kadaluarsa" class="form-label">Kadaluarsa:</label>
                            <input type="date" name="kadaluarsa" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga:</label>
                            <input type="number" name="harga" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="berat" class="form-label">Berat:</label>
                            <input type="number" name="berat" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok:</label>
                            <input type="number" name="stok" class="form-control" required>
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
                <th>Nama Produk</th>
                <th>Jenis</th>
                <th>Kadaluarsa</th>
                <th>Harga</th>
                <th>Berat</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $baris = 1;
        foreach($tblproduk as $item): ?>
            <tr>
                <td><?php echo $baris++; ?></td>
                <td><?php echo $item->nama_produk; ?></td>
                <td><?php echo $item->jenis; ?></td>
                <td><?php echo $item->kadaluarsa; ?></td>
                <td><?php
                $harga = "Rp " . number_format($item->harga,0,',','.');
                 echo $harga; 
                 ?></td>
                <td><?php echo $item->berat; ?></td>
                <td><?php echo $item->stok; ?></td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $item->id_produk; ?>">Edit</button>
                    <a href="<?php echo site_url('ProdukC/delete/'.$item->id_produk); ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Delete</a>
                </td>
            </tr>

            <!-- Modal Edit -->
            <div class="modal fade" id="editModal<?php echo $item->id_produk; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo site_url('ProdukC/update/'.$item->id_produk); ?>" method="post">
                                <div class="mb-3">
                                    <label for="nama_produk" class="form-label">Nama Produk:</label>
                                    <input type="text" name="nama_produk" class="form-control" value="<?php echo $item->nama_produk; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis" class="form-label">Jenis:</label>
                                    <input type="text" name="jenis" class="form-control" value="<?php echo $item->jenis; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kadaluarsa" class="form-label">Kadaluarsa:</label>
                                    <input type="date" name="kadaluarsa" class="form-control" value="<?php echo $item->kadaluarsa; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga:</label>
                                    <input type="number" name="harga" class="form-control" value="<?php echo $item->harga; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="berat" class="form-label">Berat:</label>
                                    <input type="number" name="berat" class="form-control" value="<?php echo $item->berat; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok:</label>
                                    <input type="number" name="stok" class="form-control" value="<?php echo $item->stok; ?>" required>
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
