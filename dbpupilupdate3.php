<!DOCTYPE html>
<html>
    <head>
        <title>Projekt</title>
    </head>
    <body>
<?php
            include "config.php";

        
            $snum = htmlspecialchars($_GET["snum"]);
            $pnum = htmlspecialchars($_GET["pnum"]);
        
            if($snum>0 && $pnum>0) 
            {
                $sql = "UPDATE pupils SET pnum='$pnum' WHERE snum='$snum';";
                $update = mysqli_query($db_link, $sql);
                echo "<p>Schüler erfolgreich umgetragen</p>";
            }
            else
            {
                echo "<p>Schüler erhielt kein neues Projekt</p>";
            }
        
            echo '<p> <a href="dbpupilupdate1.php">Zurück</a> </p>';
        ?>
    </body>
</html>

<!-- pitcodec -->