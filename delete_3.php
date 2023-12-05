<?php
    include '../config/connection.php';

    $id = $_GET['customerId'];

    mysqli_query($conn, "delete from barang where id='$id'");
    
    header("location:../operator/produk.php");
?>