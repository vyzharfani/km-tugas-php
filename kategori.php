<!DOCTYPE html>
<html>
<body>

<?php

$nama = "Hestia";
$tcm = 160; //cm
$t = $tcm / 100; //m
$b = 50; //kg
$bmi = $b / $t**2;

echo "Halo, ".$nama.". Nilai BMI anda adalah ".$bmi.", anda termasuk ";

if($bmi >= 25){
	echo "gemuk";
}elseif($bmi >= 18.5){
	echo "sedang.";
}else{
	echo "kurus.";
}

?>

</body>
</html>
