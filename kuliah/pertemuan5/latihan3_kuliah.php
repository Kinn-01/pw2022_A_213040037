<?php
// Studi kasus

$mahasiswa = [
    ["Gilman Arief", "213040037", "gilmanarief23@gmail.com", "Teknik Informatika"],
    ["Fowaz Amran Alfarez", "213040008", "alvarez@gmail.com", "Teknik Informatika"],
    ["Luthfi", "213040014", "Luthfi@gmail.com", "Teknik Informatika"],

];
var_dump($mahasiswa);


?>

<?php foreach ($mahasiswa as $mhs) {?>
  <ul>
    <?php foreach ($mhs as $ms) {?>
      <li><?php echo $ms; ?></li>
    <?php } ?>
  </ul>
<?php } ?>

<?php foreach ($mahasiswa as $mhs) {?>
  <ul>
    <li>Nama    : <?php echo $mhs[0]; ?></li>
    <li>NPM     : <?php echo $mhs[1]; ?></li>
    <li>Email   : <?php echo $mhs[2]; ?></li>
    <li>Jurusan : <?php echo $mhs[3]; ?></li>
  </ul>
<?php } ?>