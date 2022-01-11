<!DOCTYPE html>
<html>
<body>

<?php

function mijnNaamIsGroot() {
    $voornaam = "Kris";
    $achternaam= "Delver";
    $geheleNaam = $voornaam . " " . $achternaam;
    echo strtoupper("Mijn naam is.$geheleNaam");
}

mijnNaamIsGroot();

?>


</body>
</html>