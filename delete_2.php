<?php
    include '../config/connection.php';

    $id = $_GET['customerId'];

    mysqli_query($conn, "delete from suplier where id='$id'");

    header("location:../operator/suplier.php");
?>