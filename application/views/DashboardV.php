<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 30px;
        }
        .container {
            display: flex;
            justify-content: center;
            gap: 50px;
        }
        .card {
            background-color: #E9ECEF;
            border-radius: 15px;
            padding: 20px;
            width: 300px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .card:hover {
            background-color: #007bff;
            color: white;
        }
        .card img {
            width: 100%;
            border-radius: 15px;
        }
        .card-text {
            margin-top: 20px;
            font-size: 18px;
        }
        .card a {
            text-decoration: none;
            color: inherit;
            display: block;
        }
    </style>
</head>
<body>

    <h1>Beranda</h1>

    <div class="container">
        <button class="card">
            <a href="<?php echo base_url("ProdukC ")?>">
            <img src="assets/images/produk.png" alt="kelola.png">
            <div class="card-text">Kelola Produk</div>
            </a>
        </button>

        <button class="card">
            <a href="<?php echo base_url("KasirC ")?>">
            <img src="assets/images/kasir.png" alt="kelola.png">
            <div class="card-text">Kelola Kasir</div>
            </a>
        </button>

        <button class="card">
            <a href="<?php echo base_url("PembeliC ")?>">
            <img src="assets/images/pembeli.png" alt="kelola.png">
            <div class="card-text">Kelola Pembeli</div>
            </a>
        </button>
        
        <button class="card">
            <a href="<?php echo base_url("TransaksiC ")?>">
            <img src="assets/images/cart.png" alt="kelola.png">
            <div class="card-text">Transaksi Pembelian</div>
            </a>
        </button>
    </div>

</body>
</html>