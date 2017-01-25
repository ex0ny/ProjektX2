
<!DOCTYPE html>
<html>
    <head>
        <title>Projekteintragung</title>
    </head>
    <body>
        <h1>Projektwoche 2017: Eintragung</h1>
        <p>
            Hier kannst du dich für die Projektwoche 2017 eintragen. Bitte wähle eines der folgenden Projekte, 
            <br>
            um dich einzutragen. Fülle dazu einfach das auftauchende Formular aus und folge weiteren Anweisungen!
        </p>

        
        <?php
            
            include ("config.php");

            $sql = "SELECT * FROM projects;";
            $db_erg = mysqli_query( $db_link, $sql );
        
            if ( ! $db_erg ) 
            {
                    die ("FALSCHE ABFRAGE: " . mysqli_error());
            }

            while ($zeile = mysqli_fetch_array( $db_erg )) 
                {
                    echo ('<p><a href="project.php?id=' . $zeile['id'] . "&pname=" . utf8_encode($zeile['pname']) . "&lehrer=" . utf8_encode($zeile['lehrer']) . 
                          "&tmax=" . $zeile['tmax'] . '">Projekt ' . $zeile['id'] . ": " . utf8_encode($zeile['pname']) . "</a>: " . utf8_encode($zeile['lehrer']) . 
                          " (Maximal " . $zeile['tmax'] . " Schüler)</p>");
                }
        ?>
        
        <form action="dbedit.php">
            <button>DB_EDIT</button>
        </form>
        
    </body>
</html>

<!-- pitcodec -->