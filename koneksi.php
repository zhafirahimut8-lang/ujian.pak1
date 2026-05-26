<?php

$host = "localhost";
$username = "root";
$pass ="";
$db = "db_registrasi_sistem";

$conn = mysqli_connect($host, $username, $pass, $db);

if (!$conn) {
    die("koneksi gagal");
}
?>