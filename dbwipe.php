<!DOCTYPE html>
<html>
    <head>
        <title>Projekt</title>
    </head>
    <body>
<?php
            include "config.php";

        
                $sql = "TRUNCATE projects;";
                $wipe = mysqli_query($db_link, $sql);
                echo "Projektliste geleert.";
        
                $sql = "TRUNCATE pupils;";
                $wipe = mysqli_query($db_link, $sql);
                echo " Schülerliste geleert.";
        
                echo '<p> <a href="dbedit.php"> zurück </a> </p>';
        ?>
    </body>
</html>

<!-- pitcodec -->