<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_URL . "/css/style.css" ?>">    
</head>

<body>

    <?php

    // cek kategori_id
    $kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;

    // variable kosong
    $kategori = "";
    $status = "";
    // kondisi awal button sebelum aksi edit
    $button = "add";

    // jika nilai dari kategori_id ada, maka..
    if ($kategori_id) {
        //pilih semua data kategori_id
        $queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori_id = '$kategori_id'");
        // lalu keluarkan semua datanya cuk
        $row = mysqli_fetch_assoc($queryKategori);

        // simpan ke dalam variable
        $kategori = $row['kategori'];
        $status = $row['status'];
        // dan tombol berubah dari "add" menjadi "update"
        $button = "update";
    }

    ?>

    <form action="<?php echo BASE_URL . "module/kategori/action.php?kategori_id=$kategori_id"; ?>" method="POST">

        <div class="element-form">
            <label for="email">Kategori</label>
            <span><input type="text" id="email" name="kategori" value="<?php echo $kategori; ?>"></span>
        </div>

        <div class="element-form">
            <label>Status</label>
            <span>
                <input type="radio" name="status" value="on" <?php if ($status == 'on') {
                                                                    echo "checked='true'";
                                                                } ?> />On
                <input type="radio" name="status" value="off" <?php if ($status == 'off') {
                                                                    echo "checked='true'";
                                                                } ?> />Off
            </span>
        </div>


        <div class="element-form">
            <span><input type="submit" name="button" value="<?php echo $button; ?>"></span>
        </div>

    </form>




</body>

</html>