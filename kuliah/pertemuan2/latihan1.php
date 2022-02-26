<?php 
    // Pertemuan 2, membahas mengenai sintaks PHP
    // Nila i: integer, string, boolean
    echo true;
    echo "<hr>";
    echo 10;
    echo "<hr>";
    echo "Gilman Arief F";
    echo "<hr>";

    // VARIABLE
    // wadah untuk menyimpan NILAI
    // untuk variable, nama bebas tetapi tidak boleh diawali dengan angka, tidak boleh ada spasi
    $nama = 'Gilman Arief F';
    echo $nama;
    echo "<br>";

    // bisa ditimpa / overwrite
    $nama = "Gilman";
    echo $nama;
    echo "<hr>";

    // String
    // '',""
    echo "Jum'at";
    echo "<br>";
    echo 'Gilman: "Halo, semua"';
    echo "<hr>";
    // escaped character (\)
    echo 'Gilman : "Jum\'at"';
    echo "<br>";
    echo "Gilman : \"Jum'at\"";



    echo "<br>";

    // Interpolasi
    // mencetak isi variable
    // hanya bisa digunakan oleh ""
    echo "Halo nama saya $nama";

    echo "<br>";
    $price = 200;
    echo "price : $$price";


    echo "<hr>";
    // OPERATOR
    // Aritmatika
    // +, -, *, / %(modulus/sisa bagi)
    echo (1 + 2) * 3 - 4;
    echo "<br>";
    $alas = 10;
    $tinggi = 20;
    $luas_segi_tiga = ($alas * $tinggi) / 2; 
    echo $luas_segi_tiga;
    echo "<br>";
    echo 3 % 2;
    echo "<hr>";
    // Concat
    // Penggabung sring
    // simbol (.)
    $nama_depan = "Gilman";
    $nama_belakang = "Arief";
    echo $nama_depan ." ". $nama_belakang;
    echo "<hr>";

    // Perbandingan
    // <, >, <=, >=, ==, !=
    echo 1 < 5;
    echo "<br>";
    echo 10 == "10";
    echo "<hr>";

    // identitas / strict comparison
    // ===, !==
    echo 10 === "10";
    echo "<hr>";

    // Imcrement / Decerment
    // Penambahan / pengurangan
    // ++. --
    $x = 10;
    $x ++;
    echo $x;





?>