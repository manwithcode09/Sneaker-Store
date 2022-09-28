<?php

define("BASE_URL", "http://localhost/weshop/");

$arrayStatusPesanan[0] = "Menunggu Pembayaran";
$arrayStatusPesanan[1] = "Pembayaran Sedang Di Validasi";
$arrayStatusPesanan[2] = "Lunas";
$arrayStatusPesanan[3] = "Pembayaran Di Tolak";

function rupiah($nilai = 0)
{
    $string = "Rp." . number_format($nilai);
    return $string;
}



function kategori($kategori_id = false)
{
    global $koneksi;

    $string = "<div id='menu-kategori'>";

    $string .= "<ul>";


    $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'");


    while ($row = mysqli_fetch_assoc($query)) {

        $kategori = strtolower($row['kategori']);

        if ($kategori_id == $row['kategori_id']) {
            $string .= "<li><a href='" . BASE_URL . "$row[kategori_id]/$kategori.html' class='active'>$row[kategori]</a></li>";
        } else {
            $string .= "<li><a href='" . BASE_URL . "$row[kategori_id]/$kategori.html'>$row[kategori]</a></li>";
        }
    }


    $string .= "</ul>";

    $string .= "</div>";

    return $string;
}


function admin_only($module, $level){

    if($level != "superadmin"){

        $admin_pages = array("kategori", "barang", "kota", "user", "banner");
        
        if(in_array($module, $admin_pages)){
            header("location:".BASE_URL);
        }
    }



}

function pagination($query, $dataperhalaman, $pagination, $url)
{


    $totaldata = mysqli_num_rows($query);
    $totalhalaman = ceil($totaldata / $dataperhalaman);

    $batas_posisi_nomer = 6;
    $batas_jumlah_halaman = 10;
    $mulai_pagination = 1;
    $batas_akhir_pagination = $totalhalaman;

    echo "<ul class='pagination'>";

    if ($pagination > 1) {

        $prev = $pagination - 1;
        echo  "<li><a href='" . BASE_URL . "$url&pagination=$prev'><< Prev </a></li>";
    }

    if ($totalhalaman >= $batas_jumlah_halaman) {

        if ($pagination > $batas_posisi_nomer) {
            $mulai_pagination = $pagination - ($batas_posisi_nomer - 1);
        }

        $batas_akhir_pagination = ($mulai_pagination - 1) + $batas_jumlah_halaman;
        if ($batas_akhir_pagination > $totalhalaman) {
            $batas_akhir_pagination = $totalhalaman;
        }
    }


    for ($i = $mulai_pagination; $i <= $batas_akhir_pagination; $i++) {

        if ($pagination == $i) {

            echo  "<li><a class='active' href='" . BASE_URL . "$url&pagination=$i'>$i</a></li>";
        } else {

            echo  "<li><a href='" . BASE_URL . "$url&pagination=$i'>$i</a></li>";
        }
    }

    if ($pagination < $totalhalaman) {

        $next = $pagination + 1;
        echo  "<li><a href='" . BASE_URL . "$url&pagination=$next'> Next >> </a></li>";
    }

    echo "</ul>";
}
