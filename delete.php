<?php
    include '../config/connection.php';

    $id = $_GET['customerId'];

    mysqli_query($conn, "delete from pelanggan where id='$id'");
    
    header("location:../operator/pelanggan.php");
?>