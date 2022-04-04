<?php 
// Variable Scope / Lingkup Variable

// $x = 10;

// function tampilx() {
//     global $x;
//     echo $x;

// }

// tampilx();


// SUPERGLOBALS
// variable global milik PHP
// merupakan array assoociative
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Gilman Arief F";
// $_GET["nrp"] = "213040037";
// var_dump($_GET);


$mahasiswa = [
    [
        "nama" => "Gilman Arief",
        "npm" => "213040037",
        "email" => "gilmanarief23@gmail.com",
        "jurusan" => "Teknik Informatika",
        "image" => "image/2.png"
    ],
    [
        "nama" => "Fowaz Amran Alfarez", 
        "npm" => "213040008", 
        "email" => "alvarez@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "image" => "image/1.jpg"
    ],
    [
        "nama" => "Luthfi", 
        "npm" => "213040014", 
        "email" => "Luthfi@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "image" => "image/1.jpg"
    ],
    [
        "nama" => "Malwi", 
        "npm" => "213040007", 
        "email" => "Malwi@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "image" => "image/1.jpg"
    ],
    [
      "nama" => "Marc Marquez",
      "npm" => "213040099",
      "email" => "marcquez@gmail.com",
      "jurusan" => "Teknik Informatika",
      "image" => "image/1.jpg"
    ],
    [
      "nama" => "Valentina rosi",
      "npm" => "213040046",
      "email" => "valentino23@gmail.com",
      "jurusan" => "Teknik Informatika",
      "image" => "image/1.jpg"
    ],
    [
      "nama" => "John Cena",
      "npm" => "213040027",
      "email" => "JohnC3@gmail.com",
      "jurusan" => "Teknik Informatika",
      "image" => "image/1.jpg"
    ],
    [
      "nama" => "C Ronaldo",
      "npm" => "213040007",
      "email" => "CR7@gmail.com",
      "jurusan" => "Teknik Informatika",
      "image" => "image/1.jpg"
    ],
    [
      "nama" => "Lionel Messi",
      "npm" => "213040010",
      "email" => "Messi10@gmail.com",
      "jurusan" => "Teknik Informatika",
      "image" => "image/1.jpg"
    ],
    [
      "nama" => "Beckham",
      "npm" => "2130400019",
      "email" => "DavidBeckham23@gmail.com",
      "jurusan" => "Teknik Informatika",
      "image" => "image/1.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <li>
      <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["image"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
  <?php endforeach; ?>
  </ul>
  
</body>
</html>