<?php 
session_start();

if ( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

$conn = mysqli_connect('localhost', 'root', '', 'tubes_213040037') or die('KONEKSI GAGAL!!');

$id = $_GET["id"];

if( hapus($id) > 0) {
    echo "<script>
        alert('data berhasil dihapus!');
        document.location.href =
        '../index.php';

    </script>";
} else {
    echo "<script>
        alert('data gagal dihapus!');
        document.location.href =
        '../index.php';

    </script>";
}

?>