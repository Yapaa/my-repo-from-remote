<?php
    include "../config/connection.php";

    $nama = $_REQUEST['nama'];
    $no_telp = $_REQUEST['no_telp'];
    $alamat = $_REQUEST['alamat'];

    $query = "INSERT INTO suplier VALUES (null, '$nama', '$no_telp', '$alamat')";
    $exe = mysqli_query($conn, $query);
    if ($exe){
        echo "<script>alert('Tambah Data BERHASIL!!!'); document.location.href='../operator/suplier.php'</script>";
    }else {
        echo "<script>alert('Tambah Data GAGAL!!!'); document.location.href='../operator/'</script>";
    }
?>



