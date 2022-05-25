<?php 

require 'function.php';
$jerseay = query("SELECT * FROM jerseay");

//tombol cari ditekan
if (isset($_POST["search"]) ) {
  $jerseay = search($_POST["keyword"]);
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

    <link rel="icon" href="img/2.jpg">
    <title>Halaman Admin</title>

  </head>
  <body>
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Daftar Baju</a>
    <a class="nav-link active" aria-current="page" href="registrasi.php">Registrasi</a>
    <a class="nav-link active" aria-current="page" href="login.php">Login</a>
    <a class="nav-link active" aria-current="page" href="login.php">Log Out</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tambah_data.php">Tambah Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
      </ul>
      <!-- <form action="" method="POST">
        <input type="text" name="keyword" autofocus placeholder="Masukan Kata Kunci" autocomplete="off">
        <button type="submit" name="search">Search!</button>
      </form> -->
      <form action="" method="POST" class="d-flex">
        <input class="form-control me-2" type="text" name="keyword" placeholder="Masukan Kata Kunci" aria-label="Search" autofocus autocomplete="off" >
        <button class="btn btn-outline-info" type="submit" name="search">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Akhir navbar -->
  <div class="container" style="padding-top: 4rem;">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Price</th>
      <th scope="col">Tshirt</th>
      <th scope="col">Tahun</th>
      <th scope="col">Size</th>
      <th scope="col">Stok</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; foreach ($jerseay as $jrs) {?>
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>
      <td>
          <img src="img/<?php echo $jrs["gambar"]; ?>"
          width="50">
      </td>
      <td><?php echo $jrs["price"]; ?></td>
      <td><?php echo $jrs["tshirt"]; ?></td>
      <td><?php echo $jrs["tahun"]; ?></td>
      <td><?php echo $jrs["size"]; ?></td>
      <td><?php echo $jrs["stok"]; ?></td>

      <td>
        <a href="ubah.php?id=<?= $jrs["id"]; ?>" class="btn badge bg-warning">Edit</a>
        <a href="hapus.php?id=<?= $jrs["id"];?>" onclick="return confirm('Apakah anda yakin untuk menghapus data?');" class="btn badge bg-danger">Delete</a>
      </td>

    </tr>
    <?php } ?>
  </tbody>
</table>
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