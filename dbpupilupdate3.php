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
        
            $sql3 = "SELECT tcur, tmax FROM projects WHERE id=$pnum;";
            $anfrage2 = mysqli_query($db_link, $sql3);
            $row2 = mysqli_fetch_array($anfrage2);
            $tcur = $row2['tcur'];
            $tmax = $row2['tmax'];
        
            if($snum>0 && $pnum>0 && $tcur<$tmax) 
            {
                $sql = "UPDATE pupils SET pnum='$pnum' WHERE snum='$snum';";
                $update = mysqli_query($db_link, $sql);
                echo "<p>Schüler erfolgreich umgetragen</p>";
            }
            else
            {
                echo "<p>Schüler erhielt kein neues Projekt. Entweder gab es keine Angaben oder das Projekt ist voll.</p>";
            }
        
            echo '<p> <a href="dbpupilupdate1.php">Zurück</a> </p>';
        ?>
    </body>
</html>

<!-- pitcodec -->