<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Pembeli</title>
</head>
<body>

<div class="container mt-5">
    <h1>Daftar Pembeli</h1>
    <a href="<?php echo site_url('DashboardC'); ?>" class="btn btn-secondary">Beranda</a>
    <a href="<?php echo site_url('PembeliC/create'); ?>" class="btn btn-primary">Tambah Pembeli</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>No Telp</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; foreach($tblPembeli as $item): ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $item->nama; ?></td>
                <td><?php echo $item->gender; ?></td>
                <td><?php echo $item->no_telp; ?></td>
                <td><?php echo $item->tanggal_lahir; ?></td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $item->id_pembeli; ?>">Edit</button>
                    <a href="<?php echo site_url('PembeliC/delete/'.$item->id_pembeli); ?>" onclick="return confirm('Yakin ingin menghapus data ini?');" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <!-- Modal Edit -->
            <div class="modal fade" id="editModal<?php echo $item->id_pembeli; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel<?php echo $item->id_pembeli; ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel<?php echo $item->id_pembeli; ?>">Edit Pembeli</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo site_url('PembeliC/update/'.$item->id_pembeli); ?>" method="POST">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama:</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $item->nama; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender:</label>
                                    <select name="gender" class="form-select">
                                        <option value="Laki-laki" <?php echo ($item->gender == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                        <option value="Perempuan" <?php echo ($item->gender == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">No Telepon:</label>
                                    <input type="text" name="no_telp" class="form-control" value="<?php echo $item->no_telp; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $item->tanggal_lahir; ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
