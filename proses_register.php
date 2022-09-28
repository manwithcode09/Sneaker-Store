<?php

include_once("function/koneksi.php");
include_once("function/helper.php");

$level = "customer";
$status = "on";
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$telepon = $_POST['phone'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];

/* PROSES UNTUK MEMBUAT FORM TETAP TERISI NILAI AWAL, AGAR USER TIDAK PERLU MENGISI ULANG */

// menghancurkan show password pada url
unset($_POST['password']);
unset($_POST['re_password']);

//menyimpan setiap nilai pada form yang di isi
$dataForm = http_build_query($_POST);

// query untuk pengecekan email yang sudah terdaftar atau belum
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");


// pengecekan apakah ada form yang bernilai kosong
if (empty($nama_lengkap) || empty($email) || empty($telepon) || empty($alamat) || empty($password)) {
    //jika data tidak ada, maka
    header("location:" . BASE_URL . "index.php?page=register&notif=require&$dataForm");


    // cek apakah password dan re-password sama atau tidak
} else if ($password != $re_password) {
    header("location:" . BASE_URL . "index.php?page=register&notif=password&$dataForm");


    // cek apakah email yang dimasukkan sudah pernah terdaftar atau belum
} else if (mysqli_num_rows($query) == 1) {
    header("location:" . BASE_URL . "index.php?page=register&notif=email&$dataForm");


    // dan jika data ada, maka
} else {
    $password = md5($password);
    mysqli_query($koneksi, "INSERT INTO user (level, nama, email, alamat, phone, password, status )
                         VALUES ('$level', '$nama_lengkap', '$email', '$alamat', '$telepon', '$password', '$status')");
    header("location:" . BASE_URL . "index.php?page=login");
}
