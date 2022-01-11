<!DOCTYPE html>
<html>
<body>

<?php

$var1 = 12;

if($var1 < 10 && $var1 > 5) {
    echo "het getal zit tussen de 6 en de 12!";
} else {
    echo "het getal is groter dan 6 of kleiner dan 13!";
}
echo "<br>";

if($var1 < 12 || $var1 > 12) {
    echo "beide van de twee waardes waar zijn";
} else {
    echo "beide van de twee waardes niet zelfde zijn";
}
echo "<br>";

if($var1 < 12 xor $var1 > 5) {
    echo " eerste getal is waar";
} else {
    echo "2de getal is niet waar";
}
echo "<br>";

if($var1 < 20 ! $var1 > 20) {
    echo " eerste getal is niet waar";
} else {
    echo "2de getal is niet waar";
}


?>
</body>
</html>