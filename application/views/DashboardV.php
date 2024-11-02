<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid w-100">
        <a class="navbar-brand" href="#">Supermarket</a>
        <a class="btn btn-outline-danger" href="<?php echo site_url("AuthenticationC/logout")?>">Logout</a>
      </div>
    </nav>

    <h1>Beranda</h1>

    <div class="container">
        <button class="card">
            <a href="<?php echo site_url("produk")?>">
            <img src="assets/images/produk.png" alt="kelola.png">
            <div class="card-text">Kelola Produk</div>
            </a>
        </button>

        <button class="card">
            <a href="<?php echo base_url("kasir")?>">
            <img src="assets/images/kasir.png" alt="kelola.png">
            <div class="card-text">Kelola Kasir</div>
            </a>
        </button>

        <button class="card">
            <a href="<?php echo base_url("pembeli")?>">
            <img src="assets/images/pembeli.png" alt="kelola.png">
            <div class="card-text">Kelola Pembeli</div>
            </a>
        </button>
        
        <button class="card">
            <a href="<?php echo base_url("penjualan")?>">
            <img src="assets/images/cart.png" alt="kelola.png">
            <div class="card-text">Transaksi Pembelian</div>
            </a>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>