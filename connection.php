<?php
    $host =  "localhost";
    $username = "root";
    $password = "";
    $database = "thrift";
    $conn = mysqli_connect($host, $username, $password, $database);
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
       }
?>