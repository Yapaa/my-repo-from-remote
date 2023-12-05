<?php
    include "../config/connection.php";

    $id_pelanggan = $_REQUEST['pelanggan'];
    $id_barang = $_REQUEST['barang'];
    $jumlah_barang = $_REQUEST['jumlah_barang'];
    $tanggal_beli = $_REQUEST['tanggal_beli'];

    $query = "INSERT INTO transaksi VALUES (null, '$id_pelanggan', '$id_barang', '$jumlah_barang', '$tanggal_beli')";
    $exe = mysqli_query($conn, $query);
    if ($exe){
        echo "<script>alert('Tambah Data BERHASIL!!!'); document.location.href='../operator/transaksi.php'</script>";
    }else {
        echo "<script>alert('Tambah Data GAGAL!!!'); document.location.href='../operator/'</script>";
    }
?>