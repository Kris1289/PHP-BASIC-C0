<?php  
    require 'database.php';

    $leeftijd = 19;
?>
<html>
<head>
</head>
<body>

    <div class="menu">
        <?php include 'menu.php'; ?> <!-- Op deze regel wordt een menu ingevoegd -->
    </div>

    <div id="isMeerderJarig">
        <?php
            if($leeftijd < 16 ){
                echo "<h6>Je bent te jong om deze pagina te bekijken</h6>";
            }
            else {
                echo "U bent volwassen u kunt bekijken";
              }
        ?>
    </div>

</body>
</html>