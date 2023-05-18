<!DOCTYPE html>
<html>
<body>

<?php

$nilai = "B";

switch($nilai){
    case "A":
        echo "Nilaimu A (90-100).";
        break;
    case "B":
        echo "Nilaimu B (80-90).";
        break;
    case "C":
        echo "Nilaimu C (70-80).";
        break;
    case "D":
        echo "Nilaimu D (0-70).";
        break;
    default:
    	echo "Tidak ada nilai.";
}

?>

</body>
</html>