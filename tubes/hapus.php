<?php 
require 'function.php';

$conn = mysqli_connect('localhost', 'root', '', 'pw2022_a_213040037_tubes') or die('KONEKSI GAGAL!!');

$id = $_GET["id"];

if( hapus($id) > 0) {
    echo "<script>
        alert('data berhasil dihapus!');
        document.location.href =
        'admin_baju.php';

    </script>";
} else {
    echo "<script>
        alert('data gagal dihapus!');
        document.location.href =
        'admin_baju.php';

    </script>";
}

?>