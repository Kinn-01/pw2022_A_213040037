<?php
session_start();

if ( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
require 'function.php';
// Ketika timbol tambah di klik
if(isset($_POST["tambah"])){
// Jalankan fungsu tambah()
if(tambah($_POST) > 0) {
    echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href =
        '../index.php';

    </script>";
}else{
    echo "<script>
        alert('data gagal ditambahkan!');
        document.location.href =
        '../index.php';

    </script>";
}

}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="../css/style3.css" />


    <link rel="icon" href="../img/2.jpg">
    <title>Tambah Data Baju</title>
  </head>
  <body>
    
  <div class="wrapper">
      <h2>Tambah Data Barang</h2>
      <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="input-box">
        <!-- <label for="size" class="form-label">Size</label> -->
        <input type="text" class="form-control" id="size" name="size" placeholder="Size" required>
        </div>
        <div class="input-box">
        <!-- <label for="price" class="form-label">Price</label> -->
        <input type="text" class="form-control" id="price" name="price" placeholder="Price" required>
        </div>
        <div class="input-box">
        <!-- <label for="tshirt" class="form-label">Tshirt</label> -->
        <input type="text" class="form-control" id="tshirt" name="tshirt" placeholder="Tshirt" required>
        </div>
        <div class="input-box">
        <!-- <label for="tahun" class="form-label">Tahun</label> -->
        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" required>
        </div>
        <div class="input-box">
        <!-- <label for="stok" class="form-label">Stok</label> -->
        <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok">
        </div>
        <div class="input-box">
        <!-- <label for="gambar" class="form-label">Gambar</label> -->
        <input type="file"  id="gambar" name="gambar" required>
        </div>

        <div class="input-box button">
        <button type="submit" class="btn btn-primary" name ="tambah">Tambah Data Barang</button>
        </div>
      </form>
    </div>

      

  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>