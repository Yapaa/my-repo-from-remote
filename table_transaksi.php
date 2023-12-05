<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body{
            background-color: #5d6d7d;
        }
        h1{
            color: #fff;
        }
        table{
            background-color: #fff;
        }
        .btn {
            background-color: red;
            color: #ffff; 
            cursor: pointer;
            font-size: 1em;
        }
        h3{
            padding-top: 5vh;
        }
    </style>
</head>
<body>
<h1 align="center">~ Table Transaksi ~</h1>
<?php
    include "../config/connection.php";
    $query = "select pelanggan.id,transaksi.id_pelanggan, pelanggan.nama, transaksi.id_barang, barang.jenis, barang.harga_jual, transaksi.jumlah_barang, (transaksi.jumlah_barang * barang.harga_jual)as total_bayar, transaksi.tanggal_beli from pelanggan inner join transaksi on transaksi.id_pelanggan=pelanggan.id inner join barang on transaksi.id_barang=barang.id;";
    $exe = mysqli_query($conn, $query);
?>
<table border = "1" width = "75%" align = "center">
    <tr align="center" class="bg-secondary">
        <td>No</td>
        <td>ID Pelanggan</td>
        <td>Nama</td>
        <td>ID Barang</td>
        <td>Jenis/Merk</td>
        <td>Harga Jual</td>
        <td>Jumlah Barang</td>
        <td>Total Bayar</td>
        <td>Tanggal Beli</td>
    </tr>
    <?php
    $no = 1;
    while ($data = mysqli_fetch_array($exe)){
    ?>
    <tr align="center">
        <td><?=$no++?></td>
        <td><?=$data['id_pelanggan']?></td>
        <td><?=$data['nama']?></td>
        <td><?=$data['id_barang']?></td>
        <td><?=$data['jenis']?></td>
        <td><?=$data['harga_jual']?></td>
        <td><?=$data['jumlah_barang']?></td>
        <td><?=$data['total_bayar']?></td>
        <td><?=$data['tanggal_beli']?></td>
    </tr>    
    <?php
    }
    ?>
</table>
</body>
<button type="button" style="border: 2px solid red; padding: 5px; border-radius: 5px; color: white; background-color: red; text-decoration: none; margin-left: 80%;"><a  class="text-decoration-none text-white" href="../operator/Home.php">Back Home</a></button>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>