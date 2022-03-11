<?php 
// FUNCTION

// Built-in Function
// date();
// Membutuhkan argument yang wajib diisi setidaknya satu
echo date("d"); // tanggal saja
echo"<br>";
echo date("D"); // singkatan nama hari ini
echo"<br>";
echo date("l"); // nama lengkap hari ini
echo"<br>";
echo date("l, j F Y");
echo"<hr>";


echo time();
// UNIX Timestamp / EPOCH Time
// DETik yang sudah berlalu sejak 1 januari 1970
echo"<br>";
// Detik dalam hari kedepan
echo time() + 86400;
echo"<br>";
echo time() + 60 * 60 * 24;
echo"<hr>";
echo date("l, j F Y", time() + 60 * 60 * 24);
echo"<br>";
echo date("i, j F Y", time() + 60 * 60 * 24 * 100);
echo"<br>";
echo date("i, j F Y", time() - 60 * 60 * 24 * 100);
echo "<hr>";


// mktime(0,0,0,0,0,0);
// mendapatkan detik pada tanggal tertentu
// jam,menit,detik,bulan,tanggal,tahun
echo mktime(0,0,0,3,5,2022);
echo "<hr>";
echo date("l", mktime(0,0,0,1,28,2002));
echo "<hr>";

// MATH (pangkat)
echo pow(2,3);
echo "<br>";
echo rand(1,10);
echo "<br>";
// PEMBULATAN
// round(), ceil(), floor();
echo round(2.4);
echo "<br>";
echo ceil(2.1);  //ke atas (ceiling / langit")
echo "<br>";
echo floor(2.9); //ke bawah(lantai)
echo "<hr>";



?>