<?php

if ($totalBarang == 0) {
    echo "<h3>Saat ini belum ada data di dalam keranjang belanja anda</h3>";
} else {

    $no = 1;

    echo "<table class='table-list'>
            <tr class='baris-title'>
                <th class='tengah'>No</th>
                <th class='kiri'>Gambar</th>
                <th class='kiri'Nama</th>
                <th class='tengah'>Jumlah</th>
                <th class='kanan'>Harga Satuan</th>
                <th class='kanan'>Total</th>
            </tr>";



    $subTotal = 0;
    foreach ($keranjang as $key => $value) {
        $barang_id = $key;

        $nama_barang = $value["nama_barang"];
        $quantity = $value["quantity"];
        $gambar = $value["gambar"];
        $harga = $value["harga"];


        $total = $quantity * $harga;
        $subTotal = $subTotal + $total;


        echo "<tr>
                
                <td class='tengah'>$no</td>
                <td class='kiri'><img src='" . BASE_URL . "images/barang/$gambar' height='100px' width='100px'/></td>
                <td class='kiri'>$nama_barang</td>
                <td class='tengah'><input type='text' name='$barang_id' value='$quantity' class='update-quantity'/></td>
                <td class='kanan'>" . rupiah($harga) . "</td>
                <td class='kanan hapus_item'>" . rupiah($total) . " <a href='" . BASE_URL . "hapus_item.php?barang_id=$barang_id'>X</a></td>
                
             </tr>";

        $no++;
    }



    echo "<tr>
            <td colspan='5' class='kanan'><b>Total Harga</b></td>
            <td class='kanan'><b>" . rupiah($subTotal) . "</b></td>
            </tr>";

    echo "</table>";

    echo "<div id='frame-button-keranjang'>
            <a id='lanjut-belanja' href='" . BASE_URL . "index.php'>< Belanja Lagi</a>
            <a id='lanjut-pemesanan' href='" . BASE_URL . "data-pemesan.html'>Lanjut Pesanan ></a>
            </div>";
}

?>


<script>
    $(".update-quantity").on("input", function(e) {

        var barang_id = $(this).attr("name");
        var value = $(this).val();

        $.ajax({
                method: "POST",
                url: "update_keranjang.php",
                data: "barang_id=" + barang_id + "&value=" + value
            })


            .done(function(data) {
                var json = $.parseJSON(data);
                if (json.status == true) {
                    location.reload();
                } else {
                    alert(json.pesan);
                    location.reload();
                }
            });


    });
</script>