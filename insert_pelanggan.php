<?php
    include "../config/connection.php";

    $nama = $_REQUEST['nama'];
    $no_telp = $_REQUEST['no_telp'];
    $alamat = $_REQUEST['alamat'];

    $query = "INSERT INTO pelanggan VALUES (null, '$nama', '$no_telp', '$alamat')";
    $exe = mysqli_query($conn, $query);
    if ($exe){
        echo "<script>alert('Tambah Data BERHASIL!!!'); document.location.href='../operator/pelanggan.php'</script>";
    }else {
        echo "<script>alert('Tambah Data GAGAL!!!'); document.location.href='../operator/'</script>";
    }
?>

<?php
    $jenis = $_REQUEST['jenis'];
    $harga_beli = $_REQUEST['harga_beli'];
    $harga_jual = $_REQUEST['harga_jual'];
    $stok = $_REQUEST['stok'];
    $id_suplier = $_REQUEST['id_suplier'];
?>    


