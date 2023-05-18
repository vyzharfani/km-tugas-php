<!DOCTYPE html>
<html>
<body>

<?php

// persegi

$s = 5;
$l = $s**2;
echo "Luas persegi dengan sisi ".$s." adalah ".$l."<br>";

// persegi panjang

$p = 10;
$b = 5;
$l = $p * $b;
echo "Luas persegi panjang dengan panjang ".$p." dan lebar ".$b." adalah ".$l."<br>";

// segitiga

$a = 6;
$t = 12;
$l = 1/2 * $a * $t;
echo "Luas segitiga dengan alas ".$a." dan tinggi ".$t." adalah ".$l."<br>";

// jajargenjang

$a = 8;
$t = 4;
$l = $a * $t;
echo "Luas jajargenjang dengan alas ".$a." dan tinggi ".$t." adalah ".$l."<br>";

// layang-layang

$a = 10;
$b = 8;
$l = 1/2 * $a * $b;
echo "Luas layang-layang dengan diagonal ".$a." dan ".$b." adalah ".$l;

?>

</body>
</html>