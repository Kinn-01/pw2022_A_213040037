<?php
// Array Associatif
// Aray yang indexnya berupa string yang ber-asosiasi dengan nilai nya

$mahasiswa = [
    [
        "nama" => "Gilman Arief",
        "npm" => "213040037",
        "email" => "gilmanarief23@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Fowaz Amran Alfarez", 
        "npm" => "213040008", 
        "email" => "alvarez@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Luthfi", 
        "npm" => "213040014", 
        "email" => "Luthfi@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Malwi", 
        "npm" => "213040007", 
        "email" => "Malwi@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],

];

// var_dump($mahasiswa);


?>

<?php foreach ($mahasiswa as $mhs) {?>
  <ul>
    <li>Nama    : <?php echo $mhs["nama"]; ?></li>
    <li>NPM     : <?php echo $mhs["npm"]; ?></li>
    <li>Email   : <?php echo $mhs["email"]; ?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
  </ul>
<?php } ?>