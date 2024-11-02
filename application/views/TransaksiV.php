<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Transaksi</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid w-100">
        <a class="navbar-brand" href="#">Supermarket</a>
        <a class="btn btn-outline-danger" href="<?php echo site_url("AuthenticationC/logout")?>">Logout</a>
      </div>
    </nav>
<div class="container mt-5">
    <h1>Daftar Transaksi</h1>
    
    <a href="dashboard" class="btn btn-secondary">Beranda</a>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalC">Tambah Transaksi</button>
    <div class="modal fade" id="modalC" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo site_url('TransaksiC/store'); ?>" method="post">
                        <div class="mb-3">
                            <label for="id_pembeli" class="form-label">Nama Pembeli:</label>
                            <select name="id_pembeli" id="id_pembeli" class="form-control" required>
                                <option disabled selected>Pilih Pembeli</option>
                                <?php 
                                    foreach($pembeliNama as $nama):?>
                                <option value="<?php  echo $nama->nama?>"><?php  echo $nama->nama?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="id_produk" class="form-label">Produk:</label>
                            <select name="id_produk" id="id_produk" class="form-control" required>
                                <option selected>Pilih Produk</option>
                                <?php 
                                    foreach($produkNama as $nama):?>
                                <option value="<?php  echo $nama->nama_produk?>"><?php  echo $nama->nama_produk?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah:</label>
                            <input type="number" name="jumlah" class="form-control" required>
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
                <th>Tanggal Pembelian</th>
                <th>Nama Pembeli</th>
                <th>Kasir</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $baris = 1;
        foreach($tblPembelian as $item): ?>
            <tr>
                <td><?php echo $baris++; ?></td>
                <td><?php echo $item->tgl_pembelian; ?></td>
                <td><?php echo $item->namaPembeli; ?></td>
                <td><?php echo $item->namaKasir; ?></td>
                <td><?php echo $item->namaProduk; ?></td>
                <td><?php echo $item->jumlah; ?></td>
                <td><?php
                $harga = "Rp " . number_format($item->total_harga,0,',','.');
                 echo $harga; 
                 ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
