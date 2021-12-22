<!DOCTYPE html>
<html>
<body>

<?php

$prod_besteld = 30;

if($prod_besteld < 10) {
    $prijs = 1.50;
} 
elseif($prod_besteld < 25) {
    $prijs = 1.25;
} 
else {
    $prijs = 1.00;
}

?>
</body>
</html>