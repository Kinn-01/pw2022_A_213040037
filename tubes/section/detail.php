<?php 
session_start();

// $conn = mysqli_connect('localhost', 'root', '', 'tubes_213040037') or die('KONEKSI GAGAL!!');

//cek apakah ada id yg dikirim dari index
if (isset($_GET['id'])) {
    header("Location : ../index.php");
    exit;
}

require 'function.php';

$jerseay = query("SELECT * FROM jerseay");

// ambil id dari url
// $id = $_GET["id"];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Detail</title>
</head>
<body>

    <!-- Navbar -->
<nav class="navbar bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../img/2.jpg" alt="" width="50" height="44" class="rounded-circle" class="d-inline-block align-text-top">
      <span>Chelsea District</span>
    </a>
    <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#merchandise">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#merchandise">Kits</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#merchandise">Training Kits</a>
  </li>
</ul>
  </div>
</nav>
<!-- Akhir Navbar -->

<!-- Section -->

<!-- akhir -->

</body>
</html>