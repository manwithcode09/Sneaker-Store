<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="<?php echo BASE_URL . "css/style.css" ?>">
</head>

<body>


    <?php

    // ketika user mencoba untuk mengakses halaman profile, maka cek dulu apakah dia sudah login atau belum

    if ($user_id) {

        // jika sudah maka ambil nilai yang dibawa
        $module = isset($_GET['module']) ? $_GET['module'] : false;
        $action = isset($_GET['action']) ? $_GET['action'] : false;
        $mode = isset($_GET['mode']) ? $_GET['mode'] : false;
    } else {
        // jika belum, maka kembalikan ke halaman login
        header("location:" . BASE_URL . "index.php?page=login");
    }

    
    admin_only($module, $level);


    ?>

    <div id="bg-page-profile">

        <div id="menu-profile">

            <ul>

                <?php

                if ($level == "superadmin") {

                ?>


                    <li>
                        <a <?php if ($module == "kategori") {
                                echo "class='active'";
                            } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=kategori&action=list"; ?>">Kategori</a>
                    </li>

                    <li>
                        <a <?php if ($module == "barang") {
                                echo "class='active'";
                            } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=barang&action=list"; ?>">Barang</a>
                    </li>

                    <li>
                        <a <?php if ($module == "kota") {
                                echo "class='active'";
                            } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=kota&action=list"; ?>">Kota</a>
                    </li>

                    <li>
                        <a <?php if ($module == "user") {
                                echo "class='active'";
                            } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=user&action=list"; ?>">User</a>
                    </li>

                    <li>
                        <a <?php if ($module == "banner") {
                                echo "class='active'";
                            } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=banner&action=list"; ?>">Banner</a>
                    </li>

                <?php } ?>


                <li>
                    <a <?php if ($module == "pesanan") {
                            echo "class='active'";
                        } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=pesanan&action=list"; ?>">Pesanan</a>
                </li>

            </ul>

        </div>


        <div id="profile-content">

            <?php

            //cek ketersediaan file 

            $file = "module/$module/$action.php";
            if (file_exists($file)) {
                include_once($file);
            } else {
                echo "<h3>Maaf, Halaman tersebut tidak ditemukan !</h3>";
            }


            ?>

        </div>

    </div>

</body>

</html>