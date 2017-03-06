<!DOCTYPE html>
<html>
    <head>
        <title>Projekt</title>
    </head>
    <body>
<?php
            include "config.php";



            $pnum = htmlspecialchars($_GET["id"]);
            $vname = utf8_decode(htmlspecialchars($_GET["vname"]));
            $name = utf8_decode(htmlspecialchars($_GET["name"]));
            $klasse = htmlspecialchars($_GET["klasse"]);
            $mail1 = htmlspecialchars($_GET["mail1"]);
            $mail2 = htmlspecialchars($_GET["mail2"]);
            $fname = "$name, $vname";

            $sql3 = "SELECT tcur, tmax FROM projects WHERE id=$pnum;";
            $anfrage2 = mysqli_query($db_link, $sql3);
            $row2 = mysqli_fetch_array($anfrage2);
            $tcur = $row2['tcur'];
            $tmax = $row2['tmax'];
        
            if(strlen($vname)>2 && strlen($name)>2 && 2<strlen($klasse) && strlen($klasse)<5 && $tcur<$tmax && strcmp($mail1, $mail2)==0) 
            {
                $sql1 = "INSERT INTO pupils (pnum, fname, vname, name, klasse, mail) VALUES ( $pnum, '$fname', '$vname', '$name', '$klasse', '$mail1' );";
                $insert = mysqli_query($db_link, $sql1);
                $sql4 = "UPDATE projects SET tcur = tcur + 1 WHERE id=$pnum;";
                $increase = mysqli_query($db_link, $sql4);
                echo "Du hat dich erfolgreich für dein Projekt eingetragen,<br>";
                
                $sql2 = "SELECT snum FROM pupils WHERE fname='$fname';";
                $anfrage = mysqli_query($db_link, $sql2);
                $row = mysqli_fetch_array($anfrage);
                echo utf8_encode($fname) . " - " . $klasse . " - " . $mail1 . "<br>
                     Deine einzigartige Nummer ist:<br> <h2>" . $row['snum'] . "</h2> 
                     Bitte notiere sie und hebe sie gut auf, falls Rückfragen bestehen!";
                
                echo '<p> <a href="index.php"> zurück </a> </p>';
            }
            else
            {
                echo "ANGABEN FALSCH! Gib einen Vornamen, Namen und deine korrekte Klasse ein! Achte darauf, dass die E-Mail übereinstimmt und das Projekt nicht inzwischen voll ist!";
                echo '<p> <a href="index.php"> zurück </a> </p>';
            }
        ?>
    </body>
</html>

<!-- pitcodec -->