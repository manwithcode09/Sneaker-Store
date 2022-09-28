<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <?php
    $search = isset($_GET["search"]) ? $_GET["search"] : false;
    $where = "";
    $search_url = "";

    if ($search) {
        $search_url = "&search=$search";
        $where = "WHERE barang.nama_barang LIKE '%$search%'";
    }
    ?>

    <div id="frame-tambah">

        <div id="left">
            <form action="<?php echo BASE_URL . "index.php?page=my_profile&module=barang&action=list"; ?>" method="GET">
                <input type="hidden" name="page" value="<?php echo $_GET["page"]; ?>" />
                <input type="hidden" name="module" value="<?php echo $_GET["module"]; ?>" />
                <input type="hidden" name="action" value="<?php echo $_GET["action"]; ?>" />
                <input type="text" name="search" value="<?php echo $search ?>" />
                <input type="submit" value="Search">
            </form>
        </div>

        <div id="right">
            <a href="<?php echo BASE_URL . "index.php?page=my_profile&module=barang&action=form"; ?>" class="tombol-action">+ Tambah Barang</a>
        </div>
    </div>


    <!-- php -->
    <?php
    $pagination = isset($_GET["pagination"]) ? $_GET["pagination"] : 1;
    $dataperhalaman = 3;
    $mulaidari = ($pagination - 1) * $dataperhalaman;
    // Join table
    $queryBarang = mysqli_query($koneksi, "SELECT barang.*, kategori.kategori FROM barang JOIN kategori ON barang.kategori_id=kategori.kategori_id 
    $where LIMIT $mulaidari, $dataperhalaman");

    if (mysqli_num_rows($queryBarang) == 0) {
        echo "<h3>Saat ini barang belum tersedia dalam tabel (barang)</h3>";
    } else {

        echo "<table class='table-list'>";
        echo "<tr class='baris-title'>
        <th class ='kolom-nomor'>No</th>
        <th class ='kiri'>Barang</th>
        <th class ='kiri'>Kategori</th>
        <th class ='kiri'>Harga</th>
        <th class ='tengah'>Status</th>
        <th class ='tengah'>Action</th>
        </tr>";

        $no = 1 + $mulaidari;
        while ($row = mysqli_fetch_assoc($queryBarang)) {
            echo "<tr>
        
            <td class ='kolom-nomor'>$no</td>
            <td class ='kiri'>$row[nama_barang]</td>
            <td class ='kiri'>$row[kategori]</td>
            <td class ='kiri'>" . rupiah($row["harga"]) . "</td>
            <td class ='tengah'>$row[status]</td>
            <td class ='tengah'>
            <a class='tombol-action' href='" . BASE_URL . "index.php?page=my_profile&module=barang&action=form&barang_id=$row[barang_id]'>Edit</a>
            </td>
            
            </tr>";

            $no++;
        }


        echo "</table>";

        $queryhitungBarang = mysqli_query($koneksi, "SELECT * FROM barang $where");
        pagination($queryhitungBarang, $dataperhalaman, $pagination, "index.php?page=my_profile&module=barang&action=list$search_url");
    }

    ?>

</body>

</html>