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
            $mail = htmlspecialchars($_GET["mail"]);
            $fname = "$name, $vname";

            $sql3 = "SELECT tcur, tmax FROM projects WHERE id=$pnum;";
            $anfrage2 = mysqli_query($db_link, $sql3);
            $row2 = mysqli_fetch_array($anfrage2);
            $tcur = $row2['tcur'];
            $tmax = $row2['tmax'];
        
            if(strlen($vname)>2 && strlen($name)>2 && 2<strlen($klasse) && strlen($klasse)<5 && $tcur<$tmax) 
            {
                //Eingaben sind korrekt, User wird in der DB gesucht
                $sql5 = "SELECT * FROM  pupils WHERE fname = '$fname'";
                $check_duplicate = mysqli_query($db_link, $sql5);
                if($check_duplicate->num_rows > 0){
                    //User wurde in der DB gefunden und dementsprechend nicht ein weiteres Mal eingefuegt
                    echo "<p>Du hast dich schon eingetragen.</p>";
                    echo "<p><a href='index.php'Startseite</a></p>";
                }
                else{
                    //User wurde nicht gefunden in der DB und kann somit eingefuegt werden
                    $sql1 = "INSERT INTO pupils (pnum, fname, vname, name, klasse, mail) VALUES ( $pnum, '$fname', '$vname', '$name', '$klasse', '$mail' );";
                    $insert = mysqli_query($db_link, $sql1);
                    $sql4 = "UPDATE projects SET tcur = tcur + 1 WHERE id=$pnum;";
                    $increase = mysqli_query($db_link, $sql4);
                    echo "Du hat dich erfolgreich für dein Projekt eingetragen,<br>";
                    //Abrufen und Ausgabe der ID des neu hinzugefuegten Schuelers
                    $sql2 = "SELECT snum FROM pupils WHERE fname='$fname';";
                    $anfrage = mysqli_query($db_link, $sql2);
                    $row = mysqli_fetch_array($anfrage);
                    echo utf8_encode($fname) . " - " . $klasse . " - " . $mail . "<br>
                     Deine einzigartige Nummer ist:<br> <h2>" . $row['snum'] . "</h2> 
                     Bitte notiere sie und hebe sie gut auf, falls Rückfragen bestehen!";

                    echo '<p> <a href="index.php"> zurück </a> </p>';

                }

            }
            else if($tcur = $tmax){
                echo "Projekt ist leider voll bitte wähle ein anderes aus.";
            }
            else
            {
                echo "ANGABEN FALSCH! Gib einen Vornamen, Namen und deine korrekte Klasse ein!";
                echo '<p> <a href="index.php"> zurück </a> </p>';
            }
        ?>
    </body>
</html>

<!-- pitcodec -->