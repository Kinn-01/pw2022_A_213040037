<?php 

require '../section/function.php';

$keyword = $_GET["keyword"];



$query = "SELECT * FROM jerseay 
            WHERE
            tshirt LIKE '%$keyword%' OR
            size LIKE '%$keyword%' OR
            stok LIKE '%$keyword%' OR
            price LIKE '%$keyword%' OR
            tahun LIKE '%$keyword%'
                    ";

$jerseay = query($query)

?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Gambar</th>
      <th scope="col">Price</th>
      <th scope="col">Tshirt</th>
      <th scope="col">Tahun</th>
      <th scope="col">Size</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
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
        <a href="../section/ubah.php?id=<?= $jrs["id"]; ?>" class="btn badge bg-warning">Edit</a>
        <a href="../section/hapus.php?id=<?= $jrs["id"];?>" onclick="return confirm('Apakah anda yakin untuk menghapus data?');" class="btn badge bg-danger">Delete</a>
      </td>

    </tr>
    <?php } ?>
  </tbody>
</table>