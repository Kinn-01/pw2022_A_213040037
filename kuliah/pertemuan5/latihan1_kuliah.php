<?php 
// ARRAY 
// ARRAY adalah variable yang dapat menampung lebih dari satu nilai sekaligus




// Membuat Array

$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"]; //Cara baru

$bulan = array("Januari", "Februari", "Maret", "April" ); //cara lama

$myArray = [100, "Gilman", true];

// Mencetak Array
// Mencetak satu element / nilai menggunakan indexnya, index didalam php dimulai dari 0

echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// Mencetak semua elemen pada array
// var_dump() atau print_r()
// Khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// Mencetak menggunakan looping
// for 

for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// jika isi array fluktuatif
for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
  }
  echo "<hr>";

// foreach(Khusus untuk Array)
foreach ($bulan as $b) {
    echo $b;
    echo "<br>";
}

echo "<hr>";

foreach ($hari as $key => $value) {
    echo "Key: $key, Value: $value";
    echo "<br>";
}
echo "<hr>";

// Memanipulasi isi array
// Menambah elemen baru di akhir array
$hari[] = "Sabtu";
$hari[] = "Minggu";
// $hari[count($hari)] = "Minggu";
var_dump($hari);











?>