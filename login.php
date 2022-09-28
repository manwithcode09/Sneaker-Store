    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
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
            <form action="<?php echo BASE_URL . "proses_login.php"; ?>" method="POST">

                <?php
                // pengecekan apakah notif sudah pernah di bikin atau belum
                // juga pengecekan apakah ada data di url
                $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

                // kondisi dan aksi ketika salah input email atau password, maka akan muncul notif
                if ($notif == "true") {
                    echo "<div class='notif'> Maaf, Email atau password salah !</div>";
                    echo "<br>";
                }

                ?>

                <div class="element-form">
                    <label for="email">Email</label>
                    <span><input type="text" id="email" name="email"></span>
                </div>

                <div class="element-form">
                    <label for="password">Password</label>
                    <span><input type="password" id="password" name="password"></span>
                </div>

                <div class="element-form">
                    <span><input type="submit" value="login"></span>
                </div>
            </form>
        </div>
    </body>

    </html>