<?php
// Menghitung total 2 kubus
$a = 9;
$b = 4;

$luas_a = $a * $a * $a;
$luas_b = $b * $b * $b;

$total = $luas_a + $luas_b;

echo "Total dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";

echo"<hr>";

// Membuat fungsi/definisi fungsi
function totalLuasDuaKubus($a,$b) {
    $luas_a = $a * $a * $a;
    $luas_b = $b * $b * $b;
    // $luas_a = pow($a, 3);
    // $luas_b = pow($b, 3);

    $total = $luas_a + $luas_b;

    return "Total luas dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
    // return "Total luas dari kubus A dengan sisi $a and kubus B dengan sisi $b adalah " . pow($a, 3) + pow($b, 3);
}
// print dan memanggil fungsi
echo totalLuasDuaKubus(9,4)/*argument*/;
echo "<br>";
echo totalLuasDuaKubus(10,15);
echo "<br>";
echo totalLuasDuaKubus(100, 200);
?>