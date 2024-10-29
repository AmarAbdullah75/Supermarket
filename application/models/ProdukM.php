<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Konser</title>
</head>
<body>

<a href="home.html" class="button">Beranda</a>
<a href="create_konser.html" class="button">Tambah Konser</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama Konser</th>
        <th>Tanggal dan Jam Mulai Konser</th>
        <th>Harga Konser</th>
        <th>Aksi</th>
    </tr>
    <tr>
        <td>1</td>
        <td class="left">Konser Rock</td>
        <td class="left">15 November 2024 19.00</td>
        <td class="right">Rp 250.000</td>
        <td>
            <a href='update_konser.html?id=1' class='edit-btn'>Edit</a>
            <a href='delete_konser.html?id=1' class='delete-btn' onclick='return confirm("Yakin ingin menghapus data ini?");'>Delete</a>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td class="left">Konser Jazz</td>
        <td class="left">20 November 2024 20.00</td>
        <td class="right">Rp 300.000</td>
        <td>
            <a href='update_konser.html?id=2' class='edit-btn'>Edit</a>
            <a href='delete_konser.html?id=2' class='delete-btn' onclick='return confirm("Yakin ingin menghapus data ini?");'>Delete</a>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td class="left">Konser Pop</td>
        <td class="left">25 November 2024 21.00</td>
        <td class="right">Rp 350.000</td>
        <td>
            <a href='update_konser.html?id=3' class='edit-btn'>Edit</a>
            <a href='delete_konser.html?id=3' class='delete-btn' onclick='return confirm("Yakin ingin menghapus data ini?");'>Delete</a>
        </td>
    </tr>
</table>

</body>
</html>
