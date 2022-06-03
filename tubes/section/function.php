<?php 

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'tubes_213040037') or die('KONEKSI GAGAL!!');


    return $conn;
}

function query($query) {
$conn = koneksi();
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
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
    $tahun = htmlspecialchars($data["tahun"]);
    $stok = htmlspecialchars($data["stok"]);

    //upload gambar
    $gambar = upload();
    if( !$gambar) {
      return false;
    }

    // $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO 
                jerseay 
              VALUES 
                 (null, '$gambar','$price', '$tshirt', '$tahun', 
                 '$size', '$stok')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upload() {

  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  //cek apakah tidak ada gambar diupload

  if ( $error === 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
          </script>";
          return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg','jpeg','png','jfif','webp'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
            alert('silahkan upload gambar sesuai ketentuan!');
          </script>";
          return false;
  }

  // cek jika ukuran gambar terlalu besar
  if ($ukuranFile > 10000000) {
    echo "<script>
            alert('Ukuran gambar terlalu besar!');
          </script>";
          return false;
  }

  //lolos pengecekan, gambar siap diupload
  //generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName,'../img/' . $namaFileBaru);

  return $namaFileBaru;

}




function hapus($id) {
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM jerseay WHERE id = '$id'");
  return mysqli_affected_rows($conn);
}


function ubah($data) {
  $conn = koneksi();

  $id = $data["id"];

  $size = htmlspecialchars($data["size"]);
  $price = htmlspecialchars($data["price"]);
  $tshirt = htmlspecialchars($data["tshirt"]);
  $tahun = htmlspecialchars($data["tahun"]);
  $stok = htmlspecialchars($data["stok"]);
  $gambarLama = htmlspecialchars($data["gambarLama"]);

  //cek apakah user mengganti gambar atau tidak

  if($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  $query = "UPDATE jerseay SET 
                size = '$size',
                price = '$price',
                tshirt = '$tshirt',
                tahun = '$tahun',
                stok = '$stok',
                gambar = '$gambar'
                WHERE id = $id
                ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function search($keyword) {
  $query = "SELECT * FROM jerseay 
              WHERE
              tshirt LIKE '%$keyword%' OR
              size LIKE '%$keyword%' OR
              stok LIKE '%$keyword%' OR
              price LIKE '%$keyword%' OR
              tahun LIKE '%$keyword%'
              ";

    return query($query);
}


function registrasi($data) {
  $conn = koneksi();

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  // cek username sudah ada atau belum

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

  if( mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('Username sudah terdaftar!')
            </script>";
        return false;
  }

  //enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);


  //tambahkan user baru ke database
  mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

  return mysqli_affected_rows($conn);
}

// menambah barang masuk
if(isset($_POST['barangmasuk'])) {
  $conn = koneksi();

  $baju = $_POST['baju'];
  $pengirim = $_POST['pengirim'];
  $qty = $_POST['qty'];

  $cekstocksekarang = mysqli_query($conn, "SELECT * FROM jerseay WHERE id='$baju'");
  $ambildata = mysqli_fetch_array($cekstocksekarang);

  $stocksekarang = $ambildata['stok'];
  $tambahstocksekarang = $stocksekarang + $qty;


  $addtomasuk = mysqli_query($conn, "INSERT into masuk (id, keterangan ,qty) 
                          value('$baju', '$pengirim', '$qty')");
  $updatestockmasuk = mysqli_query($conn, "UPDATE jerseay SET stok='$tambahstocksekarang' WHERE id = '$baju'");
       if($addtomasuk && $updatestockmasuk) {
          header('location:masuk.php');
      }else {
          echo "gagal";
          header('location:masuk.php');
      }
}