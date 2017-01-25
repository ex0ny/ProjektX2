<!DOCTYPE html>
<html>
    <head>
        <title>Projekt</title>
    </head>
    <body>
<?php
            include "config.php";

        
            $pname = utf8_decode(htmlspecialchars($_GET["pname"]));
            $lehrer = utf8_decode(htmlspecialchars($_GET["lehrer"]));
            $tmax = htmlspecialchars($_GET["tmax"]);
        
            if(strlen($pname)>2 && strlen($lehrer)>2) 
            {
                $sql = "INSERT INTO projects (pname, lehrer, tmax) VALUES ( '$pname', '$lehrer', '$tmax' );";
                $eintrag = mysqli_query($db_link, $sql);
                echo "EINTRAG ERFOLGREICH";
                echo '<p> <a href="dbplus.php"> zurück </a> </p>';
            }
            else
            {
                echo "ANGABEN FALSCH! Sie müssen einen Projektnamen & Lehrer angeben!";
                echo '<p> <a href="dbplus.php"> zurück </a> </p>';
            }
        ?>
    </body>
</html>

<!-- pitcodec -->