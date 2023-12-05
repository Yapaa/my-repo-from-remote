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
            padding-top: 10vh;
            padding-bottom: 5vh;
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
<h1 align="center">~ TRANSAKSI ~</h1>
<?php
    include "../config/connection.php";
    $query = "select * from transaksi";
    $exe = mysqli_query($conn, $query);
?>
<table border = "1" width = "75%" align = "center">
    <tr align="center" class="bg-secondary">
        <td>No</td>
        <td>ID Pelanggan</td>
        <td>ID Barang</td>
        <td>Jumlah Barang</td>
        <td>Tanggal Beli</td>
        <td>Opsi</td>
    </tr>
    <?php
    $no = 1;
    while ($data = mysqli_fetch_array($exe)){
    ?>
    <tr align="center">
        <td><?=$no++?></td>
        <td><?=$data['id_pelanggan']?></td>
        <td><?=$data['id_barang']?></td>
        <td><?=$data['jumlah_barang']?></td>
        <td><?=$data['tanggal_beli']?></td>
        <td>
            <button  type="button" class="btn btn-secondary btn-lg"><a class="text-decoration-none text-white" href="../controller/delete_4.php?customerId=<?= $data['id']?>" >DELETE</a></button>
        </td>
    </tr>    
    <?php
    }
    ?>
</table>
<h3 align="center">- Tambah Transaksi -</h3>
<form action="../controller/insert_transaksi.php" method="post" align ="center">
    <table align="center">
        <tr>
            <td>ID Pelanggan</td>
            <td>:</td>
            <td><input type="text" name="pelanggan" id=""></td>
        </tr>
        <tr>
            <td>ID Barang</td>
            <td>:</td>
            <td><input type="text" name="barang" id=""></td>
        </tr>
        <tr>
            <td>jumlah_barang</td></td>
            <td>:</td>
            <td><input type="text" name="jumlah_barang" id=""></td>
        </tr>
        <tr>
            <td>Tanggal Beli</td></td>
            <td>:</td>
            <td><input type="text" name="tanggal_beli" id=""></td>
        </tr>
    </table>
    <input type="submit" value = "SIMPAN">
</form>
<button type="button" style="border: 2px solid red; padding: 5px; border-radius: 5px; color: white; background-color: red; text-decoration: none; margin-left: 80%;"><a  class="text-decoration-none text-white" href="../operator/Home.php">Back Home</a></button>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>