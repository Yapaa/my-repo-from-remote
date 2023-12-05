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
<h1 align="center">~ KARYAWAN ~</h1>
<?php
    include "../config/connection.php";
    $query = "select * from karyawan";
    $exe = mysqli_query($conn, $query);
?>
<table border = "1" width = "75%" align = "center">
    <tr align="center" class="bg-secondary">
        <td>No</td>
        <td>Nama</td>
        <td>No.Telp</td>
        <td>Alamat</td>
        <td>Opsi</td>
    </tr>
    <?php
    $no = 1;
    while ($data = mysqli_fetch_array($exe)){
    ?>
    <tr align="center">
        <td><?=$no++?></td>
        <td><?=$data['nama']?></td>
        <td><?=$data['no_telp']?></td>
        <td><?=$data['alamat']?></td>
        <td>
        <button  type="button" class="btn btn-secondary btn-lg"><a class="text-decoration-none text-white" href="../controller/delete_1.php?customerId=<?= $data['id']?>" >DELETE</a></button>
        <button  type="button" class="btn btn-secondary btn-md"><a class="text-decoration-none text-white" href="../controller/update_karyawan.php?customerId=<?= $data['id']?>" >EDIT</a></button>
        </td>
    </tr>    
    <?php
    }
    ?>
</table>
<h3 align="center">- Tambah Karyawan -</h3>
<form action="../controller/insert_karyawan.php" method="post" align ="center">
    <table align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id=""></td>
        </tr>
        <tr>
            <td>No.Telp</td>
            <td>:</td>
            <td><input type="text" name="no_telp" id=""></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" id=""></td>
        </tr>
    </table>
    <input type="submit" value = "SIMPAN">
</form>
<button type="button" style="border: 2px solid red; padding: 5px; border-radius: 5px; color: white; background-color: red; text-decoration: none; margin-left: 80%;"><a  class="text-decoration-none text-white" href="../operator/Home.php">Back Home</a></button>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>