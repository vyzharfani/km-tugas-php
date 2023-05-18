<!DOCTYPE html>
<html>
<body>

<?php

for($i = 1; $i <= 1; $i++){
    for($j = 1; $j <= 10; $j++){
        echo "$i x $j = $j <br>";
    }
}

echo "<hr>";

for($i = 1; $i <= 9; $i++) { //loop sampai 9 baris
    for($j = 9; $j >= $i; $j--){ //print *, awalnya 9 *, tiap loop semakin berkurang
        echo '*'; //print *
}
echo '<br>'; //line break tiap baris
}

echo "<hr>";

for ($i = 0; $i < 9; $i++) {
  for ($j = 0; $j <= $i; $j++) {
      echo $j;
  }
   echo "<br>";
}

?>

</body>
</html>