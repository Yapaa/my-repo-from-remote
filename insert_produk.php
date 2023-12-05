<?php
    include "../config/connection.php";

    $jenis = $_REQUEST['jenis'];
    $harga_beli = $_REQUEST['harga_beli'];
    $harga_jual = $_REQUEST['harga_jual'];
    $stok = $_REQUEST['stok'];
    $id_suplier = $_REQUEST['nama_suplier'];

    $query = "INSERT INTO barang VALUES (null, '$jenis', '$harga_beli', '$harga_jual', '$stok', '$id_suplier')";
    $exe = mysqli_query($conn, $query);
    if ($exe){
        echo "<script>alert('Tambah Data BERHASIL!!!'); document.location.href='../operator/produk.php'</script>";
    }else {
        echo "<script>alert('Tambah Data GAGAL!!!'); document.location.href='../operator/'</script>";
    }
?>