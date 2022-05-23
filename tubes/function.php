<?php 

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'pw2022_a_213040037_tubes') or die('KONEKSI GAGAL!!');


    return $conn;
}

function query($query) {
$conn = koneksi();
$result = mysqli_query($conn, "SELECT * FROM jerseay") or die(mysqli_error($conn));
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

return $rows;
}


function tambah($data) {
    $conn = koneksi();

    $size = htmlspecialchars($data["size"]);
    $price = htmlspecialchars($data["price"]);
    $tshirt = htmlspecialchars($data["tshirt"]);
    $stok = htmlspecialchars($data["stok"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO 
                jerseay 
              VALUES 
                 (null, '$size','$price', '$tshirt', 
                 '$stok', '$gambar')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM jerseay WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function ubah($data) {
  $conn = koneksi();

  $id = $data["id"];

  $size = htmlspecialchars($data["size"]);
  $price = htmlspecialchars($data["price"]);
  $tshirt = htmlspecialchars($data["tshirt"]);
  $stok = htmlspecialchars($data["stok"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "UPDATE jerseay SET 
                size = '$size',
                price = '$price',
                tshirt = '$tshirt',
                stok = '$stok',
                gambar = '$gambar'
                WHERE id = $id
                ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}