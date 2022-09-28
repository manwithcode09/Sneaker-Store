<?php

include_once("function/helper.php");
session_start();

$barang_id = $_GET['barang_id'];
$keranjang = $_SESSION['keranjang'];

// unset data dalam keranjang berdasarkan barang_id

unset($keranjang[$barang_id]);

// lalu kembalikan hasilnya ke dalam session
$_SESSION['keranjang'] = $keranjang;

header("location:" . BASE_URL . "index.php?page=keranjang");
