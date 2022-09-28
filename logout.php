<?php 

session_start();

// menghancurkan session 
unset($_SESSION['user_id']);
unset($_SESSION['nama']);
unset($_SESSION['level']);

// lalu redirect ke halaman index
header("location: index.php");
