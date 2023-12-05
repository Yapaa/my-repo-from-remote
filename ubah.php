<?php
    include "../config/connection.php";
    $id = $_GET ('customerId');

    $query = "SELECT * FROM pelanggan where id = $id";

    $exe = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($exe);

    $id = $data('id');
    $nama = $data('nama');
    $no_telp = $data('no_telp');
    $alamat = $data('alamat');
?>   