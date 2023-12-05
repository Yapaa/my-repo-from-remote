<?php
    include '../config/connection.php';

    $id = $_GET['customerId'];

    mysqli_query($conn, "delete from transaksi where id='$id'");
    
    header("location:../operator/transaksi.php");
?>