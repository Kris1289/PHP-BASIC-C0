<!DOCTYPE html>
<html>
<body>

<?php

function maakBerekening(){
    $koopPrijs = 75;
    $korting = 10;
    $procent= ($koopPrijs / 100) * $korting;
    return $koopPrijs-$procent;
}

function zetAllesGroot(){
    echo "Het totaalbedrag is " .  maakBerekening()  .  " euro";
}

zetAllesGroot();
?>


</body>
</html>