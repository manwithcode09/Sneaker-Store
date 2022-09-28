<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "sneakers_db";

$koneksi = mysqli_connect($server, $username, $password, $database) or die("Koneksi Gagal!");
