<?php
    $hostname = 'localhost:3308';
    $username = 'root';
    $password = '';
    $dbname = 'beautyskin';
    //$db_port = '3308';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal Terhubung');
?>