<!DOCTYPE html>
<html>
<body>

<?php

// kubus
$r = 5;
$v = $r**3;
echo "Volume kubus dengan rusuk ".$r." adalah ".$v."<br>";

// balok
$t = 7;
$p = 10;
$l = 5;
$v = $p * $l * $t;
echo "Volume kubus dengan tinggi ".$t." panjang ".$p." dan lebar ".$l." adalah ".$v."<br>";

//tabung
$t = 18;
$r = 7;
$v = 22/7 * $r**2 * $t;
echo "Volume tabung dengan tinggi ".$t." dan jari-jari alas ".$r." adalah ".$v;

?>

</body>
</html>