<?php
    include '../config/connection.php';

    $id = $_GET['customerId'];

    mysqli_query($conn, "delete from karyawan where id='$id'");

    header("location:../operator/karyawan.php");
?>