<?php

include_once("function/koneksi.php");
include_once("function/helper.php");


$email = $_POST['email'];
$password = md5($_POST['password']);

// query untuk mengambil semua nilai di dalam tabel user
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password' AND status='on'");


if (mysqli_num_rows($query) == 0) {
    //lalu ambil jika data tidak ada, maka redirect ke halaman login 
    header("location:" . BASE_URL . "index.php?page=login&notif=true");
} else {
    //dan jika ada, maka ambil data di dalamnya 
    $row = mysqli_fetch_assoc($query);

    // masukkan ke session
    session_start();
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['level'] = $row['level'];

    if (isset($_SESSION["proses_pesanan"])) {
        unset($_SESSION["proses_pesanan"]);
        header("location:" . BASE_URL . "data-pemesan.html");
    } else {
        header("location:" . BASE_URL . "index.php?page=my_profile&module=pesanan&action=list");
    }
}
