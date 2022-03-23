<?php
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Gilman Arief",
        "npm" => "213040037",
        "email" => "gilmanarief23@gmail.com",
        "jurusan" => "Teknik Informatika",
        "image" => "image/1.png"
    ],
    [
        "nama" => "Fowaz Amran Alfarez", 
        "npm" => "213040008", 
        "email" => "alvarez@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "image" => "image/1.png"
    ],
    [
        "nama" => "Luthfi", 
        "npm" => "213040014", 
        "email" => "Luthfi@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "image" => "image/1.png"
    ],
    [
        "nama" => "Malwi", 
        "npm" => "213040007", 
        "email" => "Malwi@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "image" => "image/1.png"
    ],
    [
      "nama" => "Marc Marquez",
      "npm" => "213040099",
      "email" => "marcquez@gmail.com",
      "jurusan" => "Teknik Informatika",
      "image" => "image/1.png"
    ],
    [
      "nama" => "Valentina rosi",
      "npm" => "213040046",
      "email" => "valentino23@gmail.com",
      "jurusan" => "Teknik Informatika",
      "image" => "image/1.png"
    ],
    [
      "nama" => "John Cena",
      "npm" => "213040027",
      "email" => "JohnC3@gmail.com",
      "jurusan" => "Teknik Informatika",
      "image" => "image/1.png"
    ],
    [
      "nama" => "C Ronaldo",
      "npm" => "213040007",
      "email" => "CR7@gmail.com",
      "jurusan" => "Teknik Informatika",
      "image" => "image/1.png"
    ],
    [
      "nama" => "Lionel Messi",
      "npm" => "213040010",
      "email" => "Messi10@gmail.com",
      "jurusan" => "Teknik Informatika",
      "image" => "image/1.png"
    ],
    [
      "nama" => "Beckham",
      "npm" => "2130400019",
      "email" => "DavidBeckham23@gmail.com",
      "jurusan" => "Teknik Informatika",
      "image" => "image/1.png"
    ]
];

echo $mahasiswa[1]["email"];
echo "<br>";
echo $mahasiswa[1]["jurusan"];
echo "<br>";



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs) : ?>
  <ul>
    <li>
      <img src="<?= $mhs["image"]?>" alt="">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["npm"]; ?></li>
    <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
    <li>Email :<?= $mhs["email"]; ?></li>
  </ul>
<?php endforeach; ?>


</body>
</html>