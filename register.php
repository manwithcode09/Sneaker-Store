<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>

    <?php
    /*PROTECT HALAMAN JIKA USER YANG TELAH LOGIN MENCOBA UNTUK MENGAKSES HALAMAN INI*/
    // cek jika variabel user_id ada isinya
    if ($user_id) {
        // jika ada, maka redirect ke halaman utama
        header("location:" . BASE_URL);
    }
    ?>

    <div id="container-user-akses">
        <form action="<?php echo BASE_URL . "proses_register.php"; ?>" method="POST">

            <?php
            // pengecekan apakah notif sudah pernah di bikin atau belum
            // juga pengecekan apakah ada data di url
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
            $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
            $email = isset($_GET['email']) ? $_GET['email'] : false;
            $telepon = isset($_GET['phone']) ? $_GET['phone'] : false;
            $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;

            // kondisi dan aksi ketika nilai tidak di isi, maka akan muncul notif
            if ($notif == "require") {
                echo "<div class='notif'> Maaf, Kamu harus melengkapi form dibawah ini !</div>";
                echo "<br>";

                // kondisi dan aksi ketika password dan re-password tidak sama
            } else if ($notif == "password") {
                echo "<div class='notif'> Maaf, Password yang kamu masukkan tidak sama !</div>";
                echo "<br>";

                // kondisi jika email yang dimasukkan sudah terdaftar sebelumnya
            } else if ($notif == "email") {
                echo "<div class='notif'> Maaf, Email yang kamu masukkan sudah terdaftar !</div>";
                echo "<br>";
            }

            ?>

            <div class="element-form">
                <label for="nama_lengkap">Nama Lengkap</label>
                <span><input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>"></span>
            </div>

            <div class="element-form">
                <label for="email">Email</label>
                <span><input type="text" id="email" name="email" value="<?php echo $email; ?>"></span>
            </div>

            <div class="element-form">
                <label for="telepon">No.Telepon</label>
                <span><input type="text" id="telepon" name="phone" value="<?php echo $telepon; ?>"></span>
            </div>

            <div class="element-form">
                <label for="alamat">Alamat</label>
                <span><textarea name="alamat" id="alamat"><?php echo $alamat; ?></textarea></span>
            </div>

            <div class="element-form">
                <label for="password">Password</label>
                <span><input type="password" id="password" name="password"></span>
            </div>

            <div class="element-form">
                <label for="re_password">Ulangi Password</label>
                <span><input type="password" id="re_password" name="re_password"></span>
            </div>


            <div class="element-form">

                <span><input type="submit" value="register"></span>
            </div>

        </form>


    </div>




</body>

</html>