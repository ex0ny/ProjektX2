<!DOCTYPE html>
<html>
    <head>
        <title>Projekt</title>
    </head>
    <body>
        <p> Um ein Projekt zu löschen, geben Sie die Nummer ein:  </p>
        <p> WARNUNG: Sie können immer nur das zuletzt eingetragene Projekt löschen!<br>
            Wenn Sie ein Projekt löschen wollen, was nicht das zuletzt eingetragene ist, <br>
            änderen Sie es unter der Schaltfläche "Projekt(e) Ändern"!</p>
        <form action="dbprojectminus.php" action="POST" autocomplete="off">
        Projektnummer: <br> <input type="number" name="id"><br><br>
        <input type="submit" value="Löschen"/>
        </form>
        
        <p><a href="dbedit.php">Zurück</a></p>
        
    </body>
</html>

<!-- pitcodec -->