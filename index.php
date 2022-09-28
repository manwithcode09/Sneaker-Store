<?php

session_start();

include_once("function/helper.php");
include_once("function/koneksi.php");
// pengecekan page, lalu ambil nilai yang ada di dalam page
$page = isset($_GET['page']) ? $_GET['page'] : false;
$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;


// cek session
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
$keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : array();
$totalBarang = count($keranjang);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo BASE_URL . "css/style.css" ?>">
  <link rel="stylesheet" href="<?php echo BASE_URL . "css/banner.css" ?>">
  <title>Sneakers Addict</title>
  <script src="<?php echo BASE_URL . "js/jquery-3.6.0.min.js"; ?>">
  </script>
  <script src="<?php echo BASE_URL . "js/Slides-SlidesJS-3/source/jquery.slides.min.js"; ?>">
  </script>

  <script>
    $(function() {
      $('#slides').slidesjs({
        height: 380,
        play: {
          auto: true,
          interval: 3000
        },
        navigation: false

      });
    });
  </script>
</head>

<body>
  <div id="container">
    <div id="header">
      <a href="<?php echo BASE_URL . "index.php"; ?>">
        <img class="brand" src="<?php echo BASE_URL . "images/logo1.png"; ?>">
      </a>

      <div id="menu">
        <div id="user">

          <?php

          // cek user_id

          if ($user_id) {
            // jika ada, maka tampilkan nama user yang di dapat dari session
            echo    "Hi <b>$nama</b>, 
                                <a href='" . BASE_URL . "index.php?page=my_profile&module=pesanan&action=list'>My Profile</a>
                                <a href='" . BASE_URL . "logout.php'>Logout</a>";

            // jika tidak ada, maka menu register dan login akan muncul
          } else {
            echo "<a href='" . BASE_URL . "login.html'>Login</a>
                            <a href='" . BASE_URL . "register.html'>Register</a>";
          }
          ?>

        </div>

        <a href="<?php echo BASE_URL . "keranjang.html"; ?>" id="button-keranjang">
          <img src="<?php echo BASE_URL . "images/cart.png"; ?>">
          <?php

          if ($totalBarang != 0) {
            echo "<span class='total-barang'>$totalBarang</span>";
          }


          ?>
        </a>
      </div>
    </div>
    <div id="content">

      <?php

      $filename = "$page.php";
      if (file_exists($filename)) {
        include_once($filename);
      } else {
        include_once("main.php");
      }

      ?>

    </div>

    <div id="footer">
      <p> Copyright &copy; Sneakers Addict 2021.</p>
    </div>

  </div>
</body>

</html>