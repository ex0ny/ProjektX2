<!DOCTYPE html>
<html>
    <head>
        <title>Projekt</title>
    </head>
    <body>
        <?php
            $id = htmlspecialchars($_GET["id"]);
            $pname = htmlspecialchars($_GET["pname"]);
            $lehrer = htmlspecialchars($_GET["lehrer"]);
            $tmax = htmlspecialchars($_GET["tmax"]);
            
        echo("
                <p>Du hast dich für Projekt " . $id . ": " . $pname . " bei " . $lehrer . " entschieden! (Maximal " . $tmax . " Teilnehmer)</p>
                <p>Fülle nun das Formular aus. Achte darauf, dass du deine Klasse richtig angibst. (Beispiel: 9/2)</p>
             ");
        
        echo(
                "<form action='dbpupilplus.php' autocomplete='off'>
                    
                    <input type='hidden' name='id' value='" . $id . "'>
                    Dein Vorname: <br> <input type='text' name='vname'><br>
                    Dein Nachname:<br> <input type='text' name='name'><br>
                    Deine Klasse:<br> <input type='text' name='klasse'><br>
                    Deine Email-Adresse:<br> <input type='email' name='mail'><br><br>
                    
                    <input type='submit' value='EINTRAGEN'>
                    
                </form>"   
            );
        
        ?>
        
        <p><a href="index.php">Zurück</a></p>
        
    </body>
</html>

<!-- pitcodec -->