<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "assesment";

$connection = mysql_connect($db_host, $db_user, $db_pass, $db_name);

if(!$connection){
    echo "koneksi gagal" . mysqli_connect_error();
}
