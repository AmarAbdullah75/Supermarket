<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Daftar Konser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<a href="home.html" class="button">Beranda</a>
<a href="create_konser.html" class="button">Tambah Konser</a>

<table>
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
   foreach($tblproduk as $item):?>
    <tr>
        <td name="no"><?php echo $baris?></td>
        <td name="nama_produk" class="left"><?php echo $item->nama_produk?></td>
        <td name="jenis" class="left"><?php echo $item->jenis?></td>
        <td name="kadaluarsa" class="right"><?php echo $item->kadaluarsa?></td>
        <td name="harga" class="right"><?php echo $item->harga?></td>
        <td name="berat" class="right"><?php echo $item->berat?></td>
        <td name="stok" class="right"><?php echo $item->stok?></td>
        <td>
            <button type="button" class='edit-btn' data-bs-toggle="modal" data-bs-target="#modal<?php echo $item->id_produk?>">Edit</button>
            <button class='delete-btn' onclick='return confirm("Yakin ingin menghapus data ini?");'>Delete</button>
        </td>
    </tr>
    <div class="modal fade" id="modal<?php echo $item->id_produk; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <?php $baris++;
   endforeach;?>
   </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
