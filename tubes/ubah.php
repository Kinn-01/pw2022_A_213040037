<?php
require 'function.php';


//ambil data di url
$id = $_GET["id"];

//query data baju berdasarkan id
$jrs = query("SELECT * FROM jerseay WHERE id = $id")[0];


// Ketika timbol tambah di klik
if(isset($_POST["tambah"])){
// Jalankan fungsu tambah()
if(ubah($_POST) > 0) {
    echo "<script>
        alert('data berhasil diubah!');
        document.location.href =
        'admin_baju.php';

    </script>";
}else{
    echo "<script>
        alert('data gagal diubah!');
        document.location.href =
        'admin_baju.php';

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

    <title>Ubah Data Baju</title>
  </head>
  <body>
    
  <div class="container">
      <h1>Form Ubah Data Barang</h1>

      <a href="admin_baju.php">Kembali ke daftar</a>

      <div class="row mt-3">
          <div class="col-8">

            <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" name="id" value="<?= $jrs["id"]; ?>">
                <input type="hidden" name="gambarLama" value="<?= $jrs["gambar"]; ?>">
                <div class="mb-3">
                    <label for="size" class="form-label">Size</label>
                    <input type="text" class="form-control" id="size" name="size" required style="width: 150px;" required
                    value="<?= $jrs["size"];?> " >
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" required 
                    value="<?= $jrs["price"];?> " >
                </div>
                <div class="mb-3">
                    <label for="tshirt" class="form-label">Tshirt</label>
                    <input type="text" class="form-control" id="tshirt" name="tshirt" required 
                    value="<?= $jrs["tshirt"];?> " >
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" required 
                    value="<?= $jrs["tahun"];?> " >
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok" 
                    value="<?= $jrs["stok"];?> " >
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" required  >
                </div>

                <button type="submit" class="btn btn-primary" name ="tambah">Ubah Data Barang</button>
            </form>

          </div>
      </div>

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