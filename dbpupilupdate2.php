<!DOCTYPE html>
<html>
    <head>
        <title>Projekt</title>
    </head>
    <body>
<?php
            include "config.php";

        
            $snum = htmlspecialchars($_GET["snum"]);
        
            if($snum>0) 
            {
                $sql = "SELECT * FROM pupils WHERE snum='$snum';";
                $ausgabe = mysqli_query($db_link, $sql);
                $row = mysqli_fetch_array($ausgabe);
                echo "<p>Die angegebene Nummer gehört zu: </p> <h2>" . utf8_encode($row['fname']) . " - " . $row['klasse'] . " - " . $row['mail'] . "</h2>
                      <p>Um den Schüler in ein anderes Projekt zu versetzen, geben Sie die neue Projektnummer an: </p>
                      <p> <form action='dbpupilupdate3.php'> <input type='hidden' name='snum' value='" . $snum . "'>
                            neue Projektnummer: <input type='number' name='pnum'> <br> <br> 
                      <input type='submit' value='Umtragen'/>
                            </form>";
            }
            else
            {
                echo "<p>Falsche/Keine Schülernummer angegeben</p>
                      <p> <a href='dbpupilupdate1.php'>Nochmal versuchen</a></p>";
            }
        
            echo '<p> <a href="dbedit.php">Zurück</a> </p>';
?>
    </body>
</html>

<!-- pitcodec -->