<!DOCTYPE html>
<html>
    <head>
        <title>Projekt</title>
    </head>
    <body>
        <p> Um ein Projekt hinzuzufügen, füllen Sie das Formular aus:  </p>
        <form action="dbprojectplus.php" action="POST" autocomplete="off">
            Projektname: <br> <input type="text" name="pname"><br>
            Lehrer: <br> <input type="text" name="lehrer"><br> 
            Maximale Teilnehmerzahl: <br> <input type="number" name="tmax"> <br> <br>
        <input type="submit" value="Hinzufügen"/>
        </form>
        
        <p><a href="dbedit.php">Zurück</a></p>
        
    </body>
</html>

<!-- pitcodec -->