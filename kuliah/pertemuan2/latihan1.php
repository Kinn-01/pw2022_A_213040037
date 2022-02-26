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
    var_dump(1 > 5);
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

    // Standar output
    // echo, print
    // print_r
    // var_dump

    echo "Gilman Arief";
    echo "<br>";

    print "Gilman Arief";
    echo "<br>";

    print_r("GIlman Arief");
    echo "<br>";

    var_dump("Gilman Arief");
    echo "<br>";

    echo "<hr>";

    // Penulisan sintaks PHP
    // 1. PHP di dalam html
    // 2. HTML di dalam PHP

    // Assignment
    // =, +=, -=, *=, /=, %=, .=

    $x = 1;
    $x +=5;
    echo $x;
    echo "<br>";
    $nama = "Gilman";
    $nama .= " ";
    $nama .= "Arief";
    echo $nama;


    echo "<hr>";

    // Logika
    // &&(Dua dua nya harus true), ||(salah satu harus true), !
    $x = 10;
    var_dump($x < 20 && $x % 2 == 0);


    echo "<hr>";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Belajar PHP</title>
    </head>
    <body>
        <h1>
            Halo, Selamat Datang <?php echo "Gilman Arief"; ?>
        </h1>
        <hr>
        <?php 
            echo "<h1>Halo, Selamat Datang Gilman Arief</h1>"
        ?>
    </body>
</html>

